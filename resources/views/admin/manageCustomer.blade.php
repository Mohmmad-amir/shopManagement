@extends('admin/adminMaster')

@section('title')
{{'Customer List'}}
@endsection

@section('content')


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class=" px-2 py-3">
        <h1 class=" fw-bold fs-3">Customer </h1>
      </div>
      <div class="card">
        <div class="text-uppercase fs-4 fw-bolder card-header">
          <span class="fs-6 text-muted">Manage Customer</span>
          <div class=" float-end py-2">
            <a class=" btn btn-sm btn-success py-2 px-2" href="{{route('customer.create')}}">Add Customer <i
                class=" fa-solid fa-plus"></i></a>
          </div>
        </div>

        <div class="card-body">
          <div class=" text-center fw-bolder fs-1">All Customer</div>
          <table class="table table-dark table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">Sl.</th>
                <th class=" text-center" scope="col">Customer Name</th>
                <th class=" text-center" scope="col">Customer Email</th>
                <th class=" text-center" scope="col">Customer mobile</th>
                <th class=" text-center" scope="col">Customer Balance</th>
                <th class=" text-center" colspan="1">action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($customers as $customer)
              <tr>
                <th scope="row">{{$customer->id}}</th>
                <td class=" text-center">{{$customer->customer_name}}</td>
                <td class=" text-center">{{$customer->customer_email}}</td>
                <td class=" text-center">{{$customer->customer_mobile}}</td>
                <td class=" text-center">{{$customer->customer_balance}}</td>
                <td class=" text-center">
                  <form method="post" action="{{route('customer.destroy',['id'=>$customer->id])}}">
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
            {{-- pagination link --}}
            {!! $customers->links() !!}

          </div>
        </div>
      </div>
    </div>
  </div>


</div>

@endsection