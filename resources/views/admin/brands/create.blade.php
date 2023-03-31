@extends('layouts.app')

@section('content')
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">END Vision Publishers Co
                                            ltd</a></li>
                                    <li class="breadcrumb-item active">Brands</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Brands</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="pull-right mb-3 ">
                                    <a class="btn btn-success" href="{{ route('brands.index') }}"> Back</a>
                                </div>

                                @isset($brand)
                                    <form method="POST" action="{{ route('brands.update', ['brand' => $brand]) }}"
                                        enctype="multipart/form-data">
                                        @method('patch')
                                        @csrf
                                    @else
                                        <form action="{{ route('brands.store') }}" enctype="multipart/form-data" method="POST">
                                            @csrf
                                        @endisset


                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <strong>Name:</strong>
                                                    <input type="text" name="name"
                                                        value="{{ isset($brand) ? $brand->name : old('name') }}"
                                                        class="form-control" placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>

                                    </form>


                            </div> <!-- end card-box -->
                        </div> <!-- end card-->
                    </div><!-- end col -->
                </div>

            </div> <!-- container-fluid -->

        </div> <!-- content -->
    @endsection
