@extends('layouts.app')

@section('content')
<div class="">
    <x-admin.layouts.header />
    <x-admin.layouts.side-bar />
    <div class="content-page">
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="header-title">Recent Customers</h4> --}}
                            <div class="pull-right mb-3 ">
                                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Category</a>
                            </div>

                            <div class="table-responsive mt-3">
                                <table class="table table-hover table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Descritpion</th>
                                            <th>Featured image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        @foreach ($categories as $category)
                                        <tr>
                                            <th scope="row">{{ $category->category_id }}</th>

                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td>{{ $category->featured_image }}</td>
                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <form action="{{ route('categories.destroy', $category->id)}}" method="POST">
                                                            <a class="dropdown-item" href="{{ route('categories.show', $category->id)}}"><i class="mdi mdi-pencil mr-1 text-muted"></i>View </a>
                                                            <a class="dropdown-item" href="{{ route('categories.edit', $category->id)}}"><i class="mdi mdi-email mr-1 text-muted"></i>Edit</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-link"><i class="mdi mdi-delete mr-1 text-muted"></i>Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
            </div>
             </div>
<!-- end row -->  
    </div>
     
</div>
@endsection