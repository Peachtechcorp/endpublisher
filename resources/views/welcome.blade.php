@extends('layouts.web')

@section('content')
    <div class="">
        <x-web.home.slider />
        <x-web.home.best-seller />
        <!-- Product section start -->
        @foreach ($categories as $category)
            <section class="product-section pb-24">
                <div class="container">
                    <div class="grid grid-rows-1 grid-flow-col gap-x-4">
                        <div class="text-center mb-14">
                            <h2 class="font-playfair font-bold text-3xl text-primary md:text-4xl lg:text-xl">
                                {{ $category->name }}</h2>
                        </div>
                    </div>

                    <div class="grid grid-cols-12 gap-x-4">
                        <div class="col-span-12">
                            <section class="relative -m-4">
                                <div class="product-carousel2 overflow-hidden p-4">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <!-- swiper-slide start -->
                                            <div class="swiper-slide">
                                                <div
                                                    class="border border-solid border-gray-300 transition-all hover:shadow-product group">
                                                    <div class="relative overflow-hidden">
                                                        <span
                                                            class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                                        <span
                                                            class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                                        <img class="w-full h-full"
                                                            src="{{ asset('images/products/lg/b17.jpg') }} "
                                                            alt="product image" loading="lazy" width="432"
                                                            height="480" />
                                                        <!-- actions start -->

                                                        <div
                                                            class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                            <ul
                                                                class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                                <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                                    <a href="#modal-cart"
                                                                        class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                                        data-tippy-content="Quick View"
                                                                        aria-label="Quick View">
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
                                                                href="#">name</a>
                                                        </h3>
                                                        <h4 class="font-bold text-md leading-none text-orange mt-3">TSH:
                                                            price
                                                        </h4>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- swiper-slide end-->
                                            <!-- swiper-slide start -->



                                        </div>
                                    </div>

                                    <!-- Add Pagination -->

                                    <!-- <div class="swiper-pagination"></div> -->

                                    <!-- swiper navigation -->

                                    <div class="swiper-buttons">
                                        <div
                                            class="swiper-button-prev right-auto left-4  w-12 h-12 rounded-full bg-white border border-solid border-gray-400 text-sm text-dark opacity-100 transition-all hover:text-orange hover:border-orange">
                                        </div>
                                        <div
                                            class="swiper-button-next left-auto right-4  w-12 h-12 rounded-full bg-white border border-solid border-gray-400 text-sm text-dark opacity-100 transition-all hover:text-orange hover:border-orange">
                                        </div>
                                    </div>
                                </div>
                            </section>




                        </div>
                    </div>

                </div>
            </section>
        @endforeach
        <!-- Product section end -->

    </div>
@endsection
