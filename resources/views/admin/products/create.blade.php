@extends('layoutS.app')

@section('content')
<x-admin.layouts.header />
<x-admin.layouts.side-bar />
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

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
                                    <li class="breadcrumb-item active">Products</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Products</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Create Product</h4>

                                @isset($product)
                                    <form class="form-horizontal" method="POST"
                                        action="{{ route('products.update', ['product' => $product]) }}" enctype="multipart/form-data"
                                        class="row g-3">
                                        @method('patch')
                                        @csrf
                                    @else
                                        <form class="form-horizontal" action="{{ route('products.store') }}"
                                            enctype="multipart/form-data" method="POST">
                                            @csrf
                                        @endisset
                                        
                                        <div class="form-group row">
                                            <div class="col-sm-7">
                                                <strong>Name:</strong>
                                                <input name="name" type="text" class="form-control"
                                                    value="{{ isset($product) ? $product->name : old('name') }}"
                                                    id="validationDefaultUsername" aria-describedby="inputGroupPrepend2"
                                                    placeholder="Name" required>
                                            </div>
                                            <div class="col-sm">
                                                <strong>Instock:</strong>
                                                <input type="number" class="form-control" name="instock"
                                                    value="{{ isset($product) ? $product->instock : old('instock') }}"
                                                    id="validationDefaultUsername" aria-describedby="inputGroupPrepend2"
                                                    placeholder="Instock" required>
                                            </div>
                                            <div class="col-sm">
                                                <strong>Price:</strong>
                                                <input type="number" class="form-control"
                                                    value="{{ isset($product) ? $product->price: old('price') }}"
                                                    name="price" id="validationDefaultUsername"
                                                    aria-describedby="inputGroupPrepend2" placeholder="Price" required>
                                            </div>

                                        </div>
                                        <div class="row g-3">
                                            <div class="col-sm-12">
                                                <strong>Image:</strong>
                                                <input type="file" required name="featured_image" class="form-control"
                                                    id="inputGroupFile01" required>
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-12 mt-2">
                                                <strong>Description:</strong>
                                                <textarea type="text" name="description" class="form-control" id="inputAddress" placeholder="Description">
                                                   {{ isset($product) ? $product->description : old('description') }}
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="row g-3 mt-3">
                                            <div class="col-12">
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
