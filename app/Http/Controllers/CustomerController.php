<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customers = Customer::orderBy('id','desc')->paginate(20);
        return view('admin/manageCustomer', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/addCustomer');
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
        // validate the request from the add customer form
        $request-> validate([
            'customer_name'=>'required',
            'customer_email'=>'required',
            'customer_mobile'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:14',
            'customer_address'=>'required',
            'customer_balance'=>'required',
        ]);
        
        // create new customer
        Customer::create($request->post());
        return redirect()->route('customer.all')->with('success','Customer Added Successfully');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer, $id)
    {
        //
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.all')->with('success','Customer Delete Successfully');

    }
}
