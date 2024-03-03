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
                                    <li class="breadcrumb-item active">Books</li>
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
                            <div class="card-body">
                                <h4 class="header-title">Create Book</h4>
                                @isset($book)
                                    <form class="form-horizontal" method="POST"
                                        action="{{ route('books.update', ['book' => $book]) }}" enctype="multipart/form-data"
                                        class="row g-3">
                                        @method('patch')
                                        @csrf
                                    @else
                                        <form class="form-horizontal" action="{{ route('books.store') }}"
                                            enctype="multipart/form-data" method="POST">
                                            @csrf
                                        @endisset

                                        <div class="form-group row">
                                            
                                            <div class="col-sm">
                                                <strong>Name:</strong>
                                                <input name="name" type="text" class="form-control"
                                                    value="{{ isset($book) ? $book->name : old('name') }}"
                                                    id="validationDefaultUsername" aria-describedby="inputGroupPrepend2"
                                                    placeholder="Author" required>
                                            </div>
                                            <div class="col-sm">
                                                <strong>Author:</strong>
                                                <input type="text" class="form-control" name="author"
                                                    value="{{ isset($book) ? $book->author : old('author') }}"
                                                    id="validationDefaultUsername" aria-describedby="inputGroupPrepend2"
                                                    placeholder="Author" required>
                                            </div>
                                            <div class="col-sm">
                                                <strong>Year Published:</strong>
                                                <input type="number" class="form-control"
                                                    value="{{ isset($book) ? $book->year_published : old('year_published') }}"
                                                    name="year_published" id="validationDefaultUsername"
                                                    aria-describedby="inputGroupPrepend2" placeholder="Year" required>
                                            </div>

                                        </div>
                                        <div class="row g-3">
                                            <div class="col-sm-3">
                                                <strong>Image:</strong>
                                                <input type="file" name="featured_image" class="form-control"
                                                    id="inputGroupFile01">
                                            </div>
                                            <div class="col-sm-3">
                                                <strong>ISBN:</strong>
                                                <input type="number" class="form-control"
                                                    value="{{ isset($book) ? $book->isbn : old('isbn') }}" name="isbn"
                                                    placeholder="ISBN" aria-label="ISBN">
                                            </div>
                                            <div class="col-sm-3">
                                                <strong>Price:</strong>
                                                <input type="number" class="form-control" name="price"
                                                    value="{{ isset($book) ? $book->price : old('price') }}"
                                                    placeholder="Price" aria-label="Price">
                                            </div>
                                            <div class="col-sm-3">
                                                <strong>Pages:</strong>
                                                <input type="number" class="form-control" name="pages"
                                                    value="{{ isset($book) ? $book->pages : old('pages') }}"
                                                    placeholder="Pages" aria-label="Pages">
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-12 mt-2">
                                                <strong>Description:</strong>
                                                <textarea type="text" name="description" rows="4" class="form-control" id="inputAddress"
                                                    placeholder="Description">
                                                   {{ isset($book) ? $book->description : old('description') }}
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-12 mt-2">
                                                <strong>Select Categories:</strong>

                                                <div class="form-check">
                                                    @foreach ($categories as $category)
                                                        <div class="col"> <input class="form-check-input"
                                                                name="category_id[]" type="checkbox"
                                                                value="{{ $category->id }}"
                                                                {{ isset($book) ? ($book->categoryies->contains('name', $category->name) ? ' checked' : '') : '' }}>
                                                        </div>

                                                        <div class="col">

                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                <div class="ml-5"></div> {{ $category->name }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>





                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-12 mt-2">
                                                <strong>Select Brands:</strong>
                                                <div class="form-check">
                                                    @foreach ($brands as $brand)
                                                        <div class="col">
                                                            <input class="form-check-input" name="brand_id[]"
                                                                type="checkbox" value="{{ $brand->id }}"
                                                                id="flexCheckDefault"
                                                                {{ isset($book) ? ($book->brands->contains('name', $brand->name) ? ' checked' : '') : '' }}>
                                                        </div>
                                                        <div class="col">

                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                <div class="ml-5"></div> {{ $brand->name }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
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
