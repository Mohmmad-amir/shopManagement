@extends('admin/adminMaster')

@section('title')
{{'Add Product'}}
@endsection

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class=" px-2 py-3">
                <h1 class=" fw-bold fs-3">Products</h1>
            </div>
            <div class="card">
                <div class="text-uppercase fs-4 fw-bolder card-header">
                    <div class=" d-flex justify-content-between">
                        <span class="fs-6 text-muted">Add New Product</span>
                        <a class=" btn btn-sm btn-outline-success" href="{{route('product.list')}}">Manage Products</a>
                    </div>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{route('product.add')}}" enctype="multipart/form-data">
                        @csrf
                        {{-- row --}}
                        <div class="row g-3 align-items-center">
                            {{-- name column --}}
                            <div class="col-md-6">
                                <div class=" form-floating">
                                    <input required placeholder="Leave a comment here" type="text" id="productName"
                                        name="product_name" class="form-control" aria-describedby="passwordHelpInline">
                                    <label for="productName">Product Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            {{-- desc column --}}
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <textarea class="form-control" name="description" placeholder="Leave a comment here"
                                        id="description"></textarea>
                                    <label for="description">Description</label>
                                </div>
                            </div>
                            {{-- category column --}}
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" name="productCategory"
                                        aria-label="Floating label select example">
                                        <option disabled selected>Choose Category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->category_name}}">{{$category->category_name}}
                                        </option>

                                        @endforeach
                                    </select>
                                    <label for="floatingSelect">Works with selects</label>
                                </div>
                            </div>

                            {{-- supplier column --}}
                            <div class="col-md-6">
                                <div class=" form-floating">
                                    <input required placeholder="Leave a comment here" type="text" id="supplier"
                                        name="supplier" class="form-control" aria-describedby="passwordHelpInline">
                                    <label for="supplier">Supplier Name <span class="text-danger">*</span></label>
                                </div>
                            </div>

                            {{-- model column --}}
                            <div class="col-md-6">
                                <div class=" form-floating">
                                    <input required placeholder="Leave a comment here" type="number" id="productStock"
                                        name="stock" class="form-control" aria-describedby="passwordHelpInline">
                                    <label for="productStock">Product Stock <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            {{-- supplier price column --}}
                            <div class="col-md-6">
                                <div class=" form-floating">
                                    <input required placeholder="Leave a comment here" type="text" id="supplierPrice"
                                        name="supplier_price" class="form-control"
                                        aria-describedby="passwordHelpInline">
                                    <label for="supplierPrice">Supplier Price <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            {{-- sell price column --}}
                            <div class="col-md-6">
                                <div class=" form-floating">
                                    <input required placeholder="Leave a comment here" type="text" id="sellPrice"
                                        name="sell_price" class="form-control" aria-describedby="passwordHelpInline">
                                    <label for="sellPrice">Sell Price <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            {{-- supplier price column --}}
                            <div class="col-md-6">
                                <div class=" form-floating">
                                    <input required placeholder="Leave a comment here" type="number"
                                        id="productPerCartoon" name="product_per_cartoon" class="form-control"
                                        aria-describedby="passwordHelpInline">
                                    <label for="productPerCartoon">Product Per Cartoon <span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>
                            {{-- button column --}}
                            <div class="col-md-2">
                                <button class="btn btn-success" type="submit">Save <i
                                        class=" fa-solid fa-check"></i></button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</div>

@endsection