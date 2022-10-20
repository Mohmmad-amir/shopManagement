<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Shop Management</title>
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">
</head>

<body>
    <div>
        <span class="circle shadow-lg"></span>
        <span class="circle-two shadow-lg"></span>
    </div>
    <div class="box shadow-lg">
        <div class="login-box">
            <div class="text-white text-center text-capitalize">
                <span>Welcome to</span>
                <h1>GS</h1>
                <h2>Login now</h2>
            </div>
            <div class="text-white">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" id="adminLoginEmail" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" id="adminLoginPassword" class="form-control"
                        id="exampleInputPassword1">
                </div>
                <button type="submit" id="loginBtnId"
                    class="btn btn-danger px-5 w-100 mt-3 fw-bold text-uppercase">Submit</button>
            </div>
        </div>
        <div class="social-media mt-5 mt-md-1">
            <div class="float-end fw-bolder fs-2 text-capitalize text-white">Login via</div> <br><br>
            <div class="d-flex justify-content-end">
                <div>
                    <a class="text-white fs-3" href="#">
                        <li class="fa-brands fa-facebook"></li>
                    </a>
                </div>
                <div>
                    <a class="text-white fs-3 ps-2 pe-1" href="#">
                        <li class="fa-brands fa-instagram"></li>
                    </a>
                </div>
                <div>
                    <a class="text-white fs-3 ps-1 pe-2" href="#">
                        <li class="fa-brands fa-twitch"></li>
                    </a>
                </div>
                <div>
                    <a class="text-white fs-3" href="#">
                        <li class="fa-brands fa-twitter"></li>
                    </a>
                </div>
            </div>
        </div>
    </div>




    <script src="{{asset('assets/js/jquery-3.6.1.min.js')}}"></script>
    <script src="{{asset('assets/js/toastr.min.js')}}"></script>
    <script src="{{asset('assets/js/axios.min.js')}}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}

    <script src="{{asset('assets/js/config.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script>
        $('#loginBtnId').on('click', function() {

            let email = $('#adminLoginEmail').val();
            let password = $('#adminLoginPassword').val();
            if (email.length == 0) {
                ErrorToast('Email required')

            } else if (password.length == 0) {
                ErrorToast('Password required')

            } else {

                let myformdata = new FormData();
                myformdata.append('email', email);
                myformdata.append('password', password);

                let URL = '/login/check';
                let config = {
                    headers: {
                        'Content-type': 'application/json'
                    }
                };
                axios.post(URL, myformdata, config).then(function(response) {
                        if (response.status == 200) {
                            if (response.data == 0) {
                                ErrorToast('Incorrect Email or password')
                            } else {
                                window.location = '/'
                                SuccessToast('Log In Success')
                            }
                        } else {
                            ErrorToast('Something Went Wrong')
                        }
                    }).catch(function(error) {
                        ErrorToast('Something Went Wrong')
                    });


            }
        })
    </script>

</body>

</html>