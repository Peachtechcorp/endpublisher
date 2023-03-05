@extends('layouts.app')

@section('content')
<div class="">
    <x-admin.layouts.header />
    <x-admin.layouts.side-bar />

    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">END Vision Publishers Co
                                        ltd</a></li>
                                <li class="breadcrumb-item active">categories</li>
                            </ol>
                        </div>
                        <h4 class="page-title">categories</h4>
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
                            <div class="">
                                <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
                            </div>
                        </div> <!-- end card-box -->
                    </div> <!-- end card-->
                </div><!-- end col -->
            </div>
            <div class="card mb-3" >
                <div class="row g-0">
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{ $category->user_id }}</h5>
                      <h5 class="card-title">{{ $category->name }}</h5>
                      <h5 class="card-title">{{ $category->description }}</h5>
                      <h5 class="card-text">{{ $category->featured_image }}</h5>
                    </div>
                  </div>
                </div>
              </div>
        </div>    
        </div>
    </div>
@endsection