
@extends('layouts.app')

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
                                            <li class="breadcrumb-item active">Categories</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Categories</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="pull-right mb-3 ">
                                            <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Category</a>
                                        </div>
                                        <h4 class="header-title">Input Types</h4>
                                        @isset($category)
                                            <form method="POST" action="{{ route('categories.update', ['category' => $category]) }}" class="row g-3"
                                                enctype="multipart/form-data">
                                                @method('patch')
                                                @csrf
                                        @else
                                            <form action="{{ route('categories.store') }}" enctype="multipart/form-data" method="POST">
                                                @csrf
                                            @endisset
        
        
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Name:</strong>
                                                        <input type="text" name="name" value="{{ isset($category) ? $category->name : old('name')  }}"
                                                            class="form-control" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Description:</strong>
                                                        <textarea class="form-control" style="height:150px" name="description" placeholder="Description">
                                                            {{ isset($category) ? $category->description : old('description')  }}
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Feature Image:</strong>
                                                        <input class="form-control" type="file"
                                                            value="{{ isset($category) ? $category->featured_image : old('featured_image')  }}" name="featured_image"
                                                            id="formFileMultiple">
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


                
