@extends('layouts.app')

@section('content')
    <div class="">
        <x-admin.layouts.header />
        <x-admin.layouts.side-bar />
        <div class="content-page">
            <div class="container">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">END Vision Publishers
                                                    Co
                                                    ltd</a></li>
                                            <li class="breadcrumb-item active">books</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Books</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>

                                    </div>
                                    <div class="card-body">
                                        <div class="pull-right mb-3 ">


                                        </div>
                                        <div class="">
                                            <h4> Update Book Categories</h4>
                                        </div>
                                        <hr />

                                        <form action="{{ route('books.assign-category', ['book' => $book]) }}"
                                            method="post">
                                            @csrf
                                            <table class="table table-bordered">
                                                @foreach ($categories as $category)
                                                    <tr>
                                                        <th>{{ $loop->iteration }}</th>
                                                        <th>{{ $category->name }}</th>
                                                        <th><input class="form-check-input" name="category_id[]"
                                                                type="checkbox" value="{{ $category->id }}"
                                                                id="flexCheckDefault"
                                                                {{ $book->categoryies->contains('name', $category->name) ? ' checked' : '' }}>
                                                        </th>
                                                    </tr>
                                                @endforeach
                                            </table>
                                            <div class="pull-right mb-3 ">
                                                <button type="submit" class="btn btn-success">Save</button>
                                            </div>
                                        </form>



                                    </div>
                                    <div class="card-body">
                                        <div class="pull-right mb-3 ">


                                        </div>
                                        <div class="">
                                            <h4> Update Book Brand</h4>
                                        </div>
                                        <hr />

                                        <form action="{{ route('books.assign-brand', ['book' => $book]) }}" method="post">
                                            @csrf
                                            <table class="table table-bordered">
                                                @foreach ($brands as $brand)
                                                    <tr>
                                                        <th>{{ $loop->iteration }}</th>
                                                        <th>{{ $brand->name }}</th>
                                                        <th><input class="form-check-input" name="brand_id[]"
                                                                type="checkbox" value="{{ $brand->id }}"
                                                                id="flexCheckDefault"
                                                                {{ $book->brands->contains('name', $brand->name) ? ' checked' : '' }}>
                                                        </th>
                                                    </tr>
                                                @endforeach
                                            </table>
                                            <div class="pull-right mb-3 ">
                                                <button type="submit" class="btn btn-success">Save</button>
                                            </div>
                                        </form>



                                    </div> <!-- end card-box -->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $book->featured_image }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $book->name }}</h5>
                                        <h5 class="card-title">{{ $book->pages }}</h5>
                                        <p class="card-text">{{ $book->description }}</p>
                                        <h5 class="card-title">{{ $book->year_published }}</h5>
                                        <h5 class="card-title">{{ $book->author }}</h5>
                                        <h5 class="card-title">{{ $book->isbn }}</h5>
                                        <h5 class="card-title">{{ $book->price }}</h5>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
