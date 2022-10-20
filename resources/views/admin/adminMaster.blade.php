<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Grocery Shop </title>

    {{-- css --}}
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">


</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <!-- offcanvas trigger -->
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- offcanvas trigger -->
            <a class="navbar-brand fw-bolder text-uppercase me-auto" href="{{route('dashboard')}}">
                <span class="fs-4">
                    <i class="fa-solid fa-shop"></i>
                    {{-- <i class="bi bi-shop"></i> --}}

                </span>
                Grocery Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="d-flex ms-auto" role="search">
                    <div class="input-group my-3 my-lg-0">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                            aria-describedby="button-addon2">
                        <button class="btn btn-outline-primary" type="button" id="button-addon2">
                            <i class="fa-solid fa-search"></i>
                        </button>
                    </div>

                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{route('logout')}}">
                                    <span class="px-2">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                    </span>
                                    Logout</a></li>

                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- navbar -->

    <!-- offcanvas menu -->


    <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">

        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav px-3">
                    <li>
                        <div class="text-muted text-uppercase small fw-bold">Core</div>
                    </li>
                    <li>
                        <a href="{{route('dashboard')}}" class="nav-link active">
                            <span><i class="fa-solid fa-gauge-high"></i></span>
                            <span class="text-uppercase ms-2">Dashboard</span>
                        </a>
                    </li>
                    <li class="py-4">
                        <div class="custom-divider">Divider</div>
                    </li>
                    <li>
                        <div class="text-muted text-uppercase small fw-bold">inventory</div>
                    </li>
                    <li>
                        <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <span><i class="fa-solid fa-bag-shopping"></i></span>
                            <span class="text-uppercase ms-2 me-2">products</span>
                            <span class="d-print-inline-flex ms-auto right-icon"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <div>
                                <ul class="navbar-nav ps-3">

                                    <li>
                                        <a href="{{route('product.category')}}" class="nav-link">
                                            <span><i class="bi bi-tag-fill"></i> </span>
                                            <span class="text-uppercase ms-2">Category</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{route('product.add')}}" class="nav-link">
                                            <span><i class="bi bi-bag-plus"></i> </span>
                                            <span class="text-uppercase ms-2">Add Product</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{route('product.list')}}" class="nav-link">
                                            <span><i class="bi bi-basket-fill"></i> </span>
                                            <span class="text-uppercase ms-2">Manage Product</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#secondExample" role="button"
                            aria-expanded="false" aria-controls="secondExample">
                            <span><i class="fa-solid fa-users"></i></span>
                            <span class="text-uppercase ms-2 me-2">Customer</span>
                            <span class="d-print-inline-flex ms-auto right-icon"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <div class="collapse" id="secondExample">
                            <div>
                                <ul class="navbar-nav ps-3">
                                    {{-- add customer --}}
                                    <li>
                                        <a href="{{route('customer.create')}}" class="nav-link">
                                            <span><i class="bi bi-person-plus"></i></span>
                                            <span class="text-uppercase ms-2">Add Customer</span>
                                        </a>
                                    </li>
                                    {{-- manage customer --}}
                                    <li>
                                        <a href="{{route('customer.all')}}" class="nav-link">
                                            <span><i class="bi bi-person-plus"></i></span>
                                            <span class="text-uppercase ms-2">Manage Customer</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#AddonseExample" role="button"
                            aria-expanded="false" aria-controls="AddonseExample">
                            <span><i class=" fa-solid fa-cash-register"></i></span>
                            <span class="text-uppercase ms-2 me-2">Sell</span>
                            <span class="d-print-inline-flex ms-auto right-icon"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <div class="collapse" id="AddonseExample">
                            <div>
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="{{route('sell.add')}}" class="nav-link">
                                            <span><i class=" fa-solid fa-wallet"></i></span>
                                            <span class="text-uppercase ms-2">New sell</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#AddonsesecondExample"
                            role="button" aria-expanded="false" aria-controls="AddonsesecondExample">
                            <span><i class="fa-regular fa-file"></i></span>
                            <span class="text-uppercase ms-2 me-2">Pages</span>
                            <span class="d-print-inline-flex ms-auto right-icon"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <div class="collapse" id="AddonsesecondExample">
                            <div>
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="#" class="nav-link">
                                            <span><i class="bi bi-list-nested"></i></span>
                                            <span class="text-uppercase ms-2">Nested Link</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>


                </ul>
            </nav>

        </div>
    </div>
    <!-- offcanvas menu -->

    <!-- main body element -->
    <main class="mt-5 pt-3">

        @yield('content')

    </main>

    <!-- main body element -->


    {{-- javacript --}}
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-3.6.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap3-typeahead.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>
    <script src="{{asset('assets/js/toastr.min.js')}}"></script>



    {{-- toastr message script --}}
    <script>
        $(document).ready(function() {
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @endif
    });

    </script>

    {{-- customer search script --}}
    <script type="text/javascript">
        var route = "{{url('admin/customer/search');}}"
    $('#customerNameSearch').typeahead({
        source: function(query, process){
            return $.get(route, {
                term: query
            }, function(data){
                return process(data);
            });
        }
    });
    </script>

    {{-- product search script --}}

    <script type="text/javascript">
        var routeTwo = "{{url('admin/product/search');}}"
        $('#productNameSearch').typeahead({
            source: function (querytwo, processtwo){
                return $.get(routeTwo,{
                    termTwo: querytwo
                },function(data){
                    return processtwo(data);
                }
                );
            }
        })

    </script>



</body>

</html>