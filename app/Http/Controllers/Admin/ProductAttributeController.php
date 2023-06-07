<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\ProductAttributeValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class ProductAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Admin/Product/ProductAttribute/Index', ['simpleProduct' => ProductAttributeValue::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'sku_simple' => 'string|required',
            'attribute.*' => 'nullable',
            'product_id' => 'integer|required',
            'image' => 'nullable|image'
        ]);

        if(array_key_exists('attribute', $params)) {
            foreach ($params['attribute'] as $key => $attribute) {
                ProductAttributeValue::create([
                    'product_id' => $params['product_id'],
                    'sku_simple' => $params['sku_simple'],
                    'attribute_id' => $key,
                    'attribute_value' => $attribute
                ]);
            }
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');

            ProductAttributeValue::create([
                'product_id' => $params['product_id'],
                'sku_simple' => $params['sku_simple'],
                'attribute_id' => 20,
                'attribute_value' => $path
            ]);
        }

        return Redirect::route('admin.product.show', Product::find($params['product_id']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Inertia\Response
     */
    public function edit(Product $product, ProductAttributeValue $simpleProduct)
    {
        return Inertia::render('Admin/Product/ProductAttribute/Edit', ['product' => $product, 'simpleProduct' => $simpleProduct]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
