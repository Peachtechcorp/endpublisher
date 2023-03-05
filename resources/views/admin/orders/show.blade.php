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
                                <li class="breadcrumb-item active">orders</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Orders</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="pull-right mb-3 ">
                                <a class="btn btn-success" href="{{ route('orders.create') }}"> Create New Order</a>
                            </div>
                            <div class="">
                                <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
                            </div>
                        </div> <!-- end card-box -->
                    </div> <!-- end card-->
                </div><!-- end col -->
            </div>
            <div class="card mb-3" >
                <div class="row g-0">
                  <div class="col-md-4">
                    {{-- <img src="{{ $orders->featured_image }}" class="img-fluid rounded-start" alt="..."> --}}
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{ $order->user_id }}</h5>
                      <h5 class="card-title">{{ $order->status }}</h5>
                      <h5 class="card-title">{{ $order->description }}</h5>
                      <h5 class="card-text">{{ $order->date }}</h5>
                      <h5 class="card-text">{{ $order->date }}</h5>
    
    
                    </div>
                  </div>
                </div>
              </div>
        </div>    
        </div>
    </div>
@endsection