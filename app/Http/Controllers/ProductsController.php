<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\ProductCategory;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Products::orderBy('id','desc')->paginate(10);
        return view('admin/manageProduct', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = ProductCategory::all();
        return view('admin/addProduct', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'product_name' => 'required',
            'description' => 'required',
            'productCategory' => 'required',
            'supplier' => 'required',
            'stock' => 'required',
            'supplier_price' => 'required',
            'sell_price' => 'required',
            'product_per_cartoon' => 'required',
        ]);
        // Products::create($request->post());
        $products = new Products();
        $products->product_name = $request->product_name;
        $products->description = $request->description;
        $products->category = $request->productCategory;
        $products->supplier = $request->supplier;
        $products->stock = $request->stock;
        $products->supplier_price = $request->supplier_price;
        $products->sell_price = $request->sell_price;
        $products->product_per_cartoon = $request->product_per_cartoon;

        $products->save();
        return redirect()->route('product.list')->with('success','Product Added Successfully');
            
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products, $id)
    {
        //
        $products = Products::findOrFail($id);
        $products->delete();
        
        if ($products) {
            # code...
            return redirect(route('product.list'))->with("success","product Deleted Successfully");
        } else {
            # code...
            return redirect(route('product.list'))->with("failed","product Deleted Successfully");
        }
        
    
    
    }
}
