<?php

namespace App\Http\Controllers;

use App\Models\Sell;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Products;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        // $products = Products::findOrFail($product_name);
        return view('admin/addSell');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function show(Sell $sell)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function edit(Sell $sell)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sell $sell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sell $sell)
    {
        //
    }

    // customer search

    public function customerSearch(Request $request)
    {
        # code...

        return Customer::select('customer_name')
        ->where('customer_name', 'like', "%{$request->term}%")
        ->pluck('customer_name');
        
    }

    // product search

    public function productSearch(Request $request )
    {
        # code...
        return Products::select('product_name')
        ->where('product_name', 'like',"%{$request->termTwo}%")
        ->pluck('product_name');
    }
}
