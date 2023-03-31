@extends('layouts.web')

@section('content')
    <div class="">
        <div class="py-9 bg-gray-light">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-4">
                    <div class="col-span-12">
                        <nav>
                            <ul class="flex flex-wrap items-center justify-center">
                                <li class="mr-5"><a href="index.html"
                                        class="text-dark font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">Home</a>
                                </li>
                                <li class="text-dark font-medium text-base uppercase mr-5">shop-grid-4-column</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <!-- Hero section end -->



        <!-- blog grid section start -->

        <div class="py-24">
            <div class="container">
                <div class="flex flex-wrap flex-col lg:flex-row -mx-4">
                    <div id="shoptab" class="flex-1 px-4">
                        <div class="flex flex-wrap justify-between items-center">
                            <div class="flex flex-wrap">
                                <div class="shop-select flex mr-12">
                                    <label for="SortBy">Sort by :</label>
                                    <select id="SortBy" class="px-2 bg-transparent">
                                        <option value="manual">Featured</option>
                                        <option value="best-selling">Best Selling</option>
                                        <option value="title-ascending">Alphabetically, A-Z</option>
                                        <option value="title-descending">Alphabetically, Z-A</option>
                                        <option value="price-ascending">Price, low to high</option>
                                        <option value="price-descending">Price, high to low</option>
                                        <option value="created-descending">Date, new to old</option>
                                        <option value="created-ascending">Date, old to new</option>
                                    </select>
                                </div>
                                <p class="my-2 sm:my-0">Showing {{ $books->links() }} result</p>
                            </div>
                            <div>
                                <span>Show :</span>
                                <select class="bg-transparent">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div>
                                <ul class="shop-tab-nav flex flex-wrap">
                                    <li><a href="#grid" class="text-base hover:text-orange inline-block py-2 px-2"><i
                                                class="icon-grid"></i></a></li>
                                    <li class="active"><a href="#list"
                                            class="text-base hover:text-orange inline-block py-2 px-2 ml-5"><i
                                                class="icon-menu"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-10">
                            <div id="grid" class="shop-tab-content">
                                <div class="flex flex-wrap -my-4 -px-4">


                                    @foreach ($books as $book)
                                        <div class="w-full md:w-1/2 lg:w-1/3 2xl:w-1/4 px-4 my-4">
                                            <div
                                                class="border border-solid border-gray-300 transition-all hover:shadow-product group">
                                                <div class="relative overflow-hidden">
                                                    <span
                                                        class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                                    <span
                                                        class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                                    <span
                                                        class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                                    <img class="w-full h-full" src="{{ $book->featured_image }} "
                                                        alt="product image" loading="lazy" width="432" height="480" />
                                                    <!-- actions start -->

                                                    <div
                                                        class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                        <ul
                                                            class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                            <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                                <a href="#modal-addto-cart"
                                                                    class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                                    aria-label="add to cart"
                                                                    data-tippy-content="Add to cart">
                                                                    <i class="icon-bag"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <!-- actions end -->
                                                </div>

                                                <div class="py-5 px-4">
                                                    <h3><a class="block text-base hover:text-orange transition-all"
                                                            href="#">{{ $book->name }}</a></h3>
                                                    <h4 class="font-bold text-md leading-none text-orange mt-3">
                                                        TSH:{{ $book->price }}
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach




                                </div>




                            </div>
                            <div id="list" class="shop-tab-content active">
                                <div class="flex flex-wrap -mb-7 -px-4">
                                    @foreach ($books as $book)
                                        <div class="w-full px-4 mb-7">
                                            <div
                                                class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                                <div class="relative overflow-hidden md:w-1/3">

                                                    <img class="md:absolute w-full md:h-full md:object-cover"
                                                        src="{{ $book->featured_image }} " alt="product image"
                                                        loading="lazy" width="432" height="480" />
                                                    <!-- actions start -->

                                                    <div
                                                        class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                        <ul
                                                            class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                        </ul>
                                                    </div>

                                                    <!-- actions end -->
                                                </div>

                                                <div class="py-5 px-4 flex-1">
                                                    <h4><a class="block text-md hover:text-orange transition-all mb-2"
                                                            href="#">{{ $book->name }}</a></h4>
                                                    <p class="text-sm">{{ $book->description }}.</p>

                                                    <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4">
                                                        TSH:{{ $book->price }}
                                                    </h5>

                                                    <ul class="flex items-center">
                                                        <li class="mr-2">

                                                            <a href="{{ route('book.view', ['book' => $book]) }}"
                                                                class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                                aria-label="Add to wishlist"
                                                                data-tippy-content="Add to wishlist">
                                                                <i class="icon-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li class="mr-2">
                                                            <form action="{{ route('cart.add', ['book' => $book]) }}"
                                                                method="post">
                                                                @csrf
                                                                <a href="javascript:void(0);"
                                                                    onclick="this.parentElement.submit()"
                                                                    class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                                    aria-label="add to cart"
                                                                    data-tippy-content="Add to cart">
                                                                    <i class="icon-basket-loaded"></i>
                                                                    <span class="text-sm ml-2">Add to cart</span>
                                                                </a>
                                                            </form>


                                                        </li>


                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach



                                </div>




                            </div>
                        </div>

                        <div class="mt-10">
                            <div id="grid" class="shop-tab-content">
                                <div class="flex flex-wrap -my-4 -px-4">
                                    <div class="w-full md:w-1/2 lg:w-1/3 2xl:w-1/4 px-4 my-4">
                                        <div
                                            class="border border-solid border-gray-300 transition-all hover:shadow-product group">
                                            <div class="relative overflow-hidden">
                                                <span
                                                    class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                                <span
                                                    class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                                <span
                                                    class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                                <img class="w-full h-full"
                                                    src="{{ asset('images/products/lg/b17.jpg') }} " alt="product image"
                                                    loading="lazy" width="432" height="480" />
                                                <!-- actions start -->

                                                <div
                                                    class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                    <ul
                                                        class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="#modal-cart"
                                                                class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                                data-tippy-content="Quick View" aria-label="Quick View">
                                                                <i class="icon-magnifier"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="whishlist.html"
                                                                class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                                data-tippy-content="Add to wishlist"
                                                                aria-label="wishlist">
                                                                <i class="icon-heart"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="compare.html"
                                                                class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                                data-tippy-content="Compare" aria-label="Compare">
                                                                <i class="icon-refresh"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                            <a href="#modal-addto-cart"
                                                                class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                                aria-label="add to cart" data-tippy-content="Add to cart">
                                                                <i class="icon-bag"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- actions end -->
                                            </div>

                                            <div class="py-5 px-4">
                                                <h3><a class="block text-base hover:text-orange transition-all"
                                                        href="#">Airpod shortcode product</a></h3>
                                                <h4 class="font-bold text-md leading-none text-orange mt-3"><del
                                                        class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00
                                                </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-12">
                                        <ul class="pagination flex flex-wrap items-center justify-center">
                                            <li class="mx-2">
                                                {{ $books->links() }}
                                            </li>


                                        </ul>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            @endsection
