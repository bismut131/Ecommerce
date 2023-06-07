<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttributeValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Admin/Product/Index', ['products' => Product::with('brand', 'category')->get()]);
    }

    public function show(Product $product)
    {
        return Inertia::render('Admin/Product/Show', ['product' => $product->load('brand', 'category'), 'attributes' => Attribute::all(), 'simpleProducts' => ProductAttributeValue::where('product_id', $product->id)->with('attribute')->get()->groupBy('sku_simple')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Product/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'sku' => 'required|string',
            'configurable' => 'required|boolean',
            'category' => 'required|string',
            'brand' => 'required|string'
        ]);

        $params = $validator->validated();

        $category = Category::where('name', '=', $request->category)->first();
        $params['category_id'] = $category->id;
        $brand = Brand::where('name', '=', $request->brand)->first();
        $params['brand_id'] = $brand->id;

        Product::create($params);

        return Redirect::route('admin.product.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $product
     * @return \Inertia\Response
     */
    public function edit(Product $product)
    {
        return Inertia::render('Admin/Product/Edit', ['product' => $product->load('brand', 'category')]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->fill($request->all());

        $product->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return Redirect::route('admin.product.index');
    }
}
