@extends('admin/adminMaster')

@section('title')
{{'Dashboard'}}
@endsection

@section('content')


<div class="container-fluid">
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="text-uppercase fs-4 fw-bolder">{{Breadcrums::render('dashboard')}}</div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-md-12">
            <div class="text-uppercase fs-4 fw-bolder">Dashboard</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 mb-3">
            <div class="card text-bg-success  h-100">
                <div class="card-header">Category</div>
                <div class="card-body">
                    <h5 class="card-title text-center">Total Categories</h5>
                    <p class="card-text fs-1 text-center fw-bolder">{{$category->count()}}</p>

                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card text-bg-primary  h-100">
                <div class="card-header">Products</div>

                <div class="card-body">
                    <div class=" float-end fs-1 fw-bolder opacity-25">
                        <i class="fa-solid fa-box"></i>
                    </div>
                    <h5 class="card-title text-center">Total Products</h5>
                    <p class="card-text fs-1 text-center fw-bolder">{{$products->count()}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card text-bg-warning  h-100">
                <div class="card-header">Customer</div>
                <div class="card-body">
                    <div class=" float-end fs-1 fw-bolder opacity-25">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h5 class="card-title text-center">Total Customer</h5>
                    <p class="card-text fs-1 text-center fw-bolder">{{$customer->count()}}</p>

                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card text-bg-info  h-100">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection