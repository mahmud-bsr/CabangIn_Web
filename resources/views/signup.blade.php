@extends('layout.signup')

@section('content')

<!-- Sign Up Start -->
<div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="text-center mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class=></i>CabangIn</h3>
                            </a>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="jhondoe">
                            <label for="floatingText">Masukkan Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Masukkan Email</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Masukkan Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div>
                        <a href ="{{route ('signin')}}">
                            <button  type="button" class="btn btn-lg btn-primary py-3 w-100 mb-4">SIGN UP</button>
                        </a>
                        <p class="text-center mb-0">Already have an Account? <a href="{{route ('signin')}}">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->

@endsection