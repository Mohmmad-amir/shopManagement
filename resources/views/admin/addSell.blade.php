@extends('admin/adminMaster')

@section('title')
{{'Add Sell'}}
@endsection

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class=" px-2 py-3">
                <h1 class=" fw-bold fs-3">Customer</h1>
            </div>
            <div class="card">
                <div class="text-uppercase fs-4 fw-bolder card-header">
                    <div class=" d-flex justify-content-between">
                        <span class="fs-6 text-muted">Add New Sell</span>
                        <a class=" btn btn-sm btn-outline-success" href="">Manage Sell</a>

                    </div>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class=" row">


                        </div>
                    </form>
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        {{-- row --}}
                        <div class="row g-3 align-items-center">


                            {{-- customer search start --}}
                            <div class="col-md-6">
                                <div class=" form-floating mb-2">
                                    <input required placeholder="Leave a comment here" data-provide="typeahead"
                                        type="text" id="customerNameSearch" name="customer_name"
                                        class="form-control typeahead" aria-describedby="passwordHelpInline">

                                    <label for="customerNameSearch">Customer Name</label>

                                </div>
                            </div>
                            <div class=" col-md-3">
                                <a href="{{route('customer.create')}}" class=" btn btn-sm btn-success" type="submit">Add
                                    New Customer</a>
                            </div>
                            {{-- customer search close --}}

                            <hr class=" py-2">
                            <div class=" col-md-12">
                                <table class=" table">
                                    <thead>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Discount</th>
                                        <th scope="col">Tax</th>
                                        <th scope="col">Action</th>
                                    </thead>
                                    <tbody>


                                        <tr>
                                            <td>
                                                <div class=" form-floating">
                                                    <input required placeholder="Leave a comment here"
                                                        data-provide="typeahead" type="text" id="productNameSearch"
                                                        name="product_name" class="form-control typeahead"
                                                        aria-describedby="passwordHelpInline">
                                                    <label for="productNameSearch">Product Name <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                            </td>
                                            {{-- @if ($procusts->product_name == $request->product_name) --}}


                                            <td>
                                                <div class="form-floating">
                                                    <input class="form-control" value=""
                                                        type="number" name="quantity" placeholder="Leave a comment here"
                                                        id="quantity">
                                                    <label for="quantity">Quantity</label>
                                                </div>
                                            </td>
                                            {{-- @endif --}}
                                            <td>
                                                <div class="form-floating">
                                                    <input class="form-control" type="number" name="rate"
                                                        placeholder="Leave a comment here" id="rate"><label
                                                        for="rate">Rate</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-floating"><input class="form-control" type="number"
                                                        name="discount" placeholder="Leave a comment here"
                                                        id="discount"><label for="discount">Discount</label></div>
                                            </td>
                                            <td>
                                                <div class="form-floating"><input class="form-control" type="number"
                                                        name="tax" placeholder="Leave a comment here" id="tax"><label
                                                        for="tax">Tax</label></div>
                                            </td>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>

                            {{-- button column --}}
                            <div class="col-md-4">
                                <div class=" btn-group-sm" role="group" aria-label="Basic example">
                                    <button class="btn btn-success" type="submit">Save</button>
                                    <button type="button" id="tableAddId" class="btn btn-info">Add another Item</button>

                                </div>

                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</div>



@endsection