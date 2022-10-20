@extends('admin/adminMaster')

@section('title')
{{'Categories'}}
@endsection

@section('content')


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class=" px-2 py-3">
        <h1 class=" fw-bold fs-3">Categories </h1>
      </div>
      <div class="card">
        <div class="text-uppercase fs-4 fw-bolder card-header">
          <span class="fs-6 text-muted">Add New Category</span>
        </div>
        <div class="card-body">
          <form method="POST" action="{{route('product.category.add')}}" enctype="multipart/form-data">
            @csrf
            <div class="row g-3 align-items-center">
              <div class="offset-1 col-md-3">
                <label for="categoryName" class="col-form-label">Category Name <span
                    class="text-danger">*</span></label>
              </div>
              <div class="col-md-6">
                <input required type="text" id="categoryName" name="category_name" class="form-control"
                  aria-describedby="passwordHelpInline">
              </div>
              <div class="col-md-2">
                <button class="btn btn-success" type="submit">Save <i class=" fa-solid fa-check"></i></button>
              </div>
            </div>

          </form>

          <hr class="my-3">
          <div class=" text-center fw-bolder fs-1">All Categories</div>
          <table class="table table-bordered table-hover table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">Sl.</th>
                <th class=" text-center" scope="col">Category Name</th>
                <th class=" text-center" colspan="1">action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($productCategories as $category)
              <tr>
                <th scope="row">{{$category->id}}</th>
                <td class=" text-center">{{$category->category_name}}</td>
                <td>
                  <form method="post" class="text-center"
                    action="{{route('product.category.destroy',['id'=>$category->id])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" btn btn-sm btn-danger">
                      <span>DELETE</span>
                      <span>
                        <li class=" fa-solid fa-trash"></li>
                      </span>
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
          <div class="d-flex justify-content-center">
            {!! $productCategories->links() !!}

          </div>
        </div>
      </div>
    </div>
  </div>


</div>

@endsection