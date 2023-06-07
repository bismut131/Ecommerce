<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Admin/Attribute/Index', ['attributes' => Attribute::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Inertia\Response
     */
    public function edit(Attribute $attribute)
    {
        return Inertia::render('Admin/Attribute/Edit', ['attribute' => $attribute]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Attribute/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'code' => 'required|string',
            'name' => 'required|string'
        ]);

        Attribute::create($params);

        return Redirect::route('admin.attribute.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Attribute $attribute)
    {
        $request->validate([
            'attribute_code' => 'required'
        ]);

        if ($attribute->code !== $request->attribute_code) {
            $attribute->update([
                'code' => $request->attribute_code
            ]);
        }

        return Redirect::route('admin.attribute.edit', $attribute);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Attribute $attribute)
    {
        $attribute->delete();

        return Redirect::route('admin.attribute.index', ['attributes' => $attribute]);
    }
}
