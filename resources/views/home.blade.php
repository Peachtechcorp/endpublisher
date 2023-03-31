@extends('layouts.app')

@section('content')
    <div class="">
        <x-admin.layouts.header />
        <x-admin.layouts.side-bar />

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">END Vision Publishers</a>
                                        </li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-lg-6">
                            <div class="card widget-flat">
                                <div class="card-body p-0">
                                    <div class="p-3 pb-0">
                                        <div class="float-right">
                                            <i class="mdi mdi-cart text-primary widget-icon"></i>
                                        </div>
                                        <h5 class="text-muted font-weight-normal mt-0">Categories</h5>
                                        <h3 class="mt-2">{{ $categories }}</h3>
                                    </div>
                                    <div id="sparkline1"></div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-3 col-lg-6">
                            <div class="card widget-flat">
                                <div class="card-body p-0">
                                    <div class="p-3 pb-0">
                                        <div class="float-right">
                                            <i class="mdi mdi-currency-usd text-danger widget-icon"></i>
                                        </div>
                                        <h5 class="text-muted font-weight-normal mt-0">Products</h5>
                                        <h3 class="mt-2">{{ $products }}</h3>
                                    </div>
                                    <div id="sparkline2"></div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-3 col-lg-6">
                            <div class="card widget-flat">
                                <div class="card-body p-0">
                                    <div class="p-3 pb-0">
                                        <div class="float-right">
                                            <i class="mdi mdi-account-multiple text-primary widget-icon"></i>
                                        </div>
                                        <h5 class="text-muted font-weight-normal mt-0">Books</h5>
                                        <h3 class="mt-2">{{ $books }}</h3>
                                    </div>
                                    <div id="sparkline3"></div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-3 col-lg-6">
                            <div class="card widget-flat">
                                <div class="card-body p-0">
                                    <div class="p-3 pb-0">
                                        <div class="float-right">
                                            <i class="mdi mdi-eye-outline text-danger widget-icon"></i>
                                        </div>
                                        <h5 class="text-muted font-weight-normal mt-0">Orders</h5>
                                        <h3 class="mt-2">{{ $orders }}</h3>
                                    </div>
                                    <div id="sparkline4"></div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->


                </div> <!-- container-fluid -->

            </div> <!-- content -->

        </div>
    </div>
@endsection
