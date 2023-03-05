
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">END Vision Publishers Co ltd</a></li>
                                            <li class="breadcrumb-item active">Orders</li>
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
                                      <h4 class="header-title">Input Types</h4>
                                      <p class="sub-header">
                                          Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                                      </p>
                                      @isset($order)
                                        <form class="form-horizontal" method="POST" action="{{ route('orders.update',['order'=>$order])}}" class="row g-3">
                                        @method("patch")
                                        @csrf

                                        @else   
                                        <form class="form-horizontal" action="{{ route('orders.store') }}" method="POST">
                                        @csrf  
                                      @endisset
                                          <div class="form-group row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <strong>User ID:</strong>
                                                    <select name="user_id" id="user_id" class="form-control">
                                                        <option value="id"> -- Select One --</option>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                        @endforeach 
                                                    </select>
                                                    
                                                </div>
                                    
                                         </div>
                                         <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Description:</strong>
                                                <textarea class="form-control" style="height:150px" name="description" placeholder="Detail"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
          
                                      </form>
                                    
          
                                  </div> <!-- end card-box -->
                              </div> <!-- end card-->
                          </div><!-- end col -->
                      </div>
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->
@endsection


                
