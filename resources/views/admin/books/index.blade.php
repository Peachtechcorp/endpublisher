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
                                <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Book</a>
                            </div>

                            <div class="table-responsive mt-3">
                                <table class="table table-hover table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Descritpion</th>
                                            <th>Author</th>
                                            <th>Year</th>
                                            <th>ISBN</th>
                                            <th>Pages</th>
                                            <th>Price</th>
                                            <th>Featured Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        @foreach ($books as $book)
                                        <tr>
                                            <th scope="row">{{ $book->id }}</th>
                                            <td>
                                                <div class="overflow-hidden">
                                                    <p class="mb-0 font-weight-medium"><a href="javascript: void(0);">{{ $book->name}}</a></p>
                                                </div>
                                            </td>

                                            <td>
                                                {{ $book->escritpion}}
                                            </td>

                                            <td>
                                                {{$book->auhtor}}
                                            </td>

                                            <td>
                                                {{$book->year_published}}
                                            </td>
                                            <td>
                                                {{$book->isbn}}
                                            </td>
                                            <td>
                                                {{$book->pages}}
                                            </td>
                                            <td>
                                                {{$book->price}}
                                            </td>
                                            <td>
                                                <img src="{{ $book->featured_image}} " width="100" height="50" alt="">
                                            </td>
                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <form action="{{ route('books.destroy', $book->id)}}" method="POST">
                                                            <a class="dropdown-item" href="{{ route('books.show', $book->id)}}"><i class="mdi mdi-pencil mr-1 text-muted"></i>View </a>
                                                            <a class="dropdown-item" href="{{ route('books.edit', $book->id)}}"><i class="mdi mdi-email mr-1 text-muted"></i>Edit</a>
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