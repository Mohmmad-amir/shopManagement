<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productCategories = ProductCategory::orderBy('updated_at','desc')->paginate(20);
        return view('admin/category',compact('productCategories'));
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $productCategory = new ProductCategory();
        // $productCategory->category_name = $request->category_name;
        // $productCategory->save();
        $request->validate([
            'category_name'=>'required'
        ]);
        ProductCategory::create($request->post());
        if (ProductCategory::create($request->post())) {
            # code...
            return redirect()->back()->with("success","Category added Successfully");

        } else {
            # code...
            return redirect()->back()->with("failed","Category added Failed");

        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory, $id)
    {
        //
        $productCategory = ProductCategory::findOrFail($id);
        $productCategory->delete();

        if ($productCategory) {
            # code...
            return redirect()->back()->with("success","Category Delete Successfully");

        } else {
            # code...
            return redirect()->back()->with("failed","Category Delete Failed");

        }

        // return redirect()->back()->with("message","Category Deleted Successfully");

    }
}
