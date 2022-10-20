<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Products;
use App\Models\Customer;


class PageController extends Controller
{
    public function dashboard()
    {
        $category = ProductCategory::all();
        $products = Products::all();
        $customer = Customer::all();
        return view('admin/dashboard',compact('category','products','customer'));
    }


}
