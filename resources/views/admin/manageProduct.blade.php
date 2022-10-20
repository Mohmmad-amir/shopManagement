@extends('admin/adminMaster')

@section('title')
{{'Product List'}}
@endsection

@section('content')


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class=" px-2 py-3">
        <h1 class=" fw-bold fs-3">Products </h1>
      </div>
      <div class="card">
        <div class="text-uppercase fs-4 fw-bolder card-header">
          <span class="fs-6 text-muted">Manage Product</span>
          <div class=" float-end py-2">
            <a class=" btn btn-sm btn-success py-2 px-2" href="{{route('product.add')}}">Add Product <i
                class=" fa-solid fa-plus"></i></a>
          </div>
        </div>

        <div class="card-body">
          <div class=" text-center fw-bolder fs-1">All Products</div>
          <table class="table table-dark table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">Sl.</th>
                <th class=" text-center" scope="col">Product Name</th>
                <th class=" text-center" scope="col">Product Stock</th>
                <th class=" text-center" scope="col">Product Per Cartoon</th>
                <th class=" text-center" scope="col">Supplier Name</th>
                <th class=" text-center" scope="col">Supplier Price</th>
                <th class=" text-center" scope="col">Sell Price</th>
                <th class=" text-center" colspan="1">action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tr>
                <th scope="row">{{$product->id}}</th>
                <td class=" text-center">{{$product->product_name}}</td>
                <td class=" text-center">{{$product->stock}}</td>
                <td class=" text-center">{{$product->product_per_cartoon}}</td>
                <td class=" text-center">{{$product->supplier}}</td>
                <td class=" text-center">{{$product->supplier_price}}</td>
                <td class=" text-center">{{$product->sell_price}}</td>
                <td class=" text-center">
                  <form method="post" action="{{route('product.destroy',['id'=>$product->id])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                      class=" btn btn-sm btn-danger">
                      <i class=" fa-solid fa-trash"></i>
                    </button>

                  </form>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
          <div class="d-flex justify-content-center">
            {!! $products->links() !!}

          </div>
        </div>
      </div>
    </div>
  </div>


</div>

@endsection