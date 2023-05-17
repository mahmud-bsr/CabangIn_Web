@extends('layout.app')

@section('content')

<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary "><i class=></i>CabangIn</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Mahmud01</h6>
                        <span>User</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route ('dashboard')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{route ('admin')}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Admin</a>
                    <a href="{{route ('cabang')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Cabang</a>
                    <a href="{{route ('laporan')}}" class="nav-item nav-link active"><i class="fa fa-file-alt me-2"></i>Laporan</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

<!-- Content Start -->
<div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4 w-100">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Mahmud01</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{route ('profiluser')}}" class="dropdown-item">My Profile</a>
                            <a href="{{route ('signin')}}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container-fluid">
                <div class="row h-79 align-items-center justify-content-center" style="min-height: 79vh;">
                    <div class="col 12">
                        <div class="bg-light rounded h-100 p-4">
                            <div class="text-center mb-4">
                            <h6 class="mb-4">Laporan Bulanan Penjualan Cabang</h6>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama Makanan</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>AK01</th>
                                        <td>Kebab</td>
                                        <td>150.000</td>
                                        <td>50</td>
                                        <td>750.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>AK02</td>
                                        <td>Burger</td>
                                        <td>12.000</td>
                                        <td>50</td>
                                        <td>60.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>AK03</td>
                                        <td>Roti Maryam</td>
                                        <td>8.000</td>
                                        <td>50</td>
                                        <td>40.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>AK04</td>
                                        <td>Shawarma</td>
                                        <td>15.000</td>
                                        <td>50</td>
                                        <td>750.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>AK05</td>
                                        <td>Hot Dog</td>
                                        <td>12.000</td>
                                        <td>50</td>
                                        <td>60.000</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-sm-end">
                                <a href ="{{route ('laporan')}}"><button type="button" class="btn btn-danger m-2">Back</button></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">CabangIn</a>, All Right Reserved 2023. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="#">CUi</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->

@endsection