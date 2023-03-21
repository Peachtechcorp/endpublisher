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

                                    <div class="">
                                        <a class="btn btn-primary" href="{{ route('orderItems.index') }}"> Back</a>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end card-->
                        </div><!-- end col -->
                    </div>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title">Code :{{ $orderItem->code }}</h5>
                                    <h5 class="card-title">Status :{{ $orderItem->status }}</h5>
                                    <h5 class="card-title">Total Amount:{{ $orderItem->total }}</h5>
                                    <h5 class="card-text">Create At:{{ $orderItem->created_at->format('d M Y - H:i:s') }}
                                    </h5>

                                </div>
                            </div>
                            <div class="col-md-8">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->book->name }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->price }}</td>
                                        </tr>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
