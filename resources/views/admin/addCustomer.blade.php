@extends('admin/adminMaster')

@section('title')
{{'Add Customer'}}
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
                        <span class="fs-6 text-muted">Add New Customer</span>
                        <a class=" btn btn-sm btn-outline-success" href="{{route('customer.all')}}">Manage Customer</a>

                    </div>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{route('customer.store')}}" enctype="multipart/form-data">
                        @csrf
                        {{-- row --}}
                        <div class="row g-3 align-items-center">
                            {{-- name column --}}
                            <div class="col-md-6">
                                <div class=" form-floating">
                                    <input required placeholder="Leave a comment here" type="text" id="customerName"
                                        name="customer_name" class="form-control" aria-describedby="passwordHelpInline">
                                    <label for="customerName">Customer Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            {{-- email column --}}
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" type="email" name="customer_email"
                                        placeholder="Leave a comment here" id="customerEmail">
                                    <label for="customerEmail">Customer Email</label>
                                </div>
                            </div>
                            {{-- mobile column --}}
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input required placeholder="Leave a comment here" type="text" id="customerMobile"
                                        name="customer_mobile" class="form-control"
                                        aria-describedby="passwordHelpInline">
                                    <label for="customerMobile">Customer Mobile</label>
                                </div>
                            </div>

                            {{-- address column --}}
                            <div class="col-md-6">
                                <div class=" form-floating">
                                    <input required placeholder="Leave a comment here" type="text" id="customerAddress"
                                        name="customer_address" class="form-control"
                                        aria-describedby="passwordHelpInline">
                                    <label for="customerAddress"> Customer Address<span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>

                            {{-- model column --}}
                            <div class="col-md-6">
                                <div class=" form-floating">
                                    <input required placeholder="Leave a comment here" type="text" id="customerBalance"
                                        name="customer_balance" class="form-control"
                                        aria-describedby="passwordHelpInline">
                                    <label for="customerBalance">Previous Balance <span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>
                            {{-- button column --}}
                            <div class="col-md-2">
                                <button class="btn btn-success" type="submit">Save</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</div>

@endsection