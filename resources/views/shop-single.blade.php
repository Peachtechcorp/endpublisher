@extends('layouts.web')

@section('content')
    <div class="">

        <!-- Hero section start -->
        <div class="py-9 bg-gray-light">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-4">
                    <div class="col-span-12">
                        <nav>
                            <ul class="flex flex-wrap items-center justify-center">
                                <li class="mr-5"><a href="/"
                                        class="text-dark font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">Home</a>
                                </li>
                                <li class="text-dark font-medium text-base uppercase mr-5">{{ $book->name }}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <!-- Hero section end -->


        <div class="py-5">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                    <div>
                        <div class="relative overflow-hidden">
                            <span
                                class="font-semibold uppercase text-sm text-white inline-block py-1 px-2 leading-none absolute top-3  z-10 right-3 bg-orange">Sale</span>
                            <div class="gallery mb-6">
                                <div class="swiper-slide">
                                    <img src="{{ $book->featured_image }}" alt="product image" width="800" height="900">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div>
                        <h3 class="font-medium text-lg capitalize">{{ $book->name }}</h3>
                        <h5 class="font-bold text-md leading-none text-orange my-3">TSH {{ $book->price }} /=</h5>
                        <div class="mb-3">Author:<span>{{ $book->author }}</span></div>
                        <div class="mb-3">Year Published: <span> {{ $book->year_published }}</span></div>
                        <div class="mb-3">ISBN:<span>{{ $book->isbn }}</span></div>
                        <div class="mb-3"><span>Availability:</span> <span class="font-semibold">9 left in stock</span>
                        </div>
                        <div>
                            <div class="mb-8">
                                <div class="flex flex-wrap items-center mt-8">
                                    <div class="flex count border border-solid border-gray-300 p-2 h-11">
                                        <button class="decrement flex-auto w-5 leading-none" aria-label="button">-</button>
                                        <input type="number" min="1" max="100" step="1" value="1"
                                            class="quantity__input flex-auto w-8 text-center focus:outline-none input-appearance-none">
                                        <button class="increment flex-auto w-5 leading-none" aria-label="button">+</button>
                                    </div>
                                    <div class="ml-2 sm:ml-8">
                                        <form action="{{ route('cart.add', ['book' => $book]) }}" method="post">
                                            @csrf
                                            <a href="javascript:void(0);" onclick="this.parentElement.submit()"
                                                class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                aria-label="add to cart" data-tippy-content="Add to cart">
                                                <i class="icon-basket-loaded"></i>
                                                <span class="text-sm ml-2">Add to cart</span>
                                            </a>
                                        </form>
                                    </div>
                                    <a href="#" class="text-md ml-8"><i class="icon-heart"></i></a>
                                    <a href="#" class="text-md ml-8"><i class="icon-refresh"></i></a>
                                </div>
                            </div>

                            <div class="flex flex-wrap items-center justify-start mb-8">
                                <a href="#"
                                    class="text-md text-facebook hover:text-dark mr-10 leading-none transition relative before:absolute before:top-1/2  before:-translate-y-1/2 before:left-7 before:empty before:bg-gray-900 before:w-4 before:h-1px"><i
                                        class="icon-social-facebook"></i></a>
                                <a href="#"
                                    class="text-md text-twitter hover:text-dark mr-10 leading-none transition relative before:absolute before:top-1/2  before:-translate-y-1/2 before:left-7 before:empty before:bg-gray-900 before:w-4 before:h-1px"><i
                                        class="icon-social-twitter"></i></a>
                                <a href="#"
                                    class="text-md text-dribbble hover:text-dark mr-10 leading-none transition relative before:absolute before:top-1/2  before:-translate-y-1/2 before:left-7 before:empty before:bg-gray-900 before:w-4 before:h-1px"><i
                                        class="icon-social-instagram"></i></a>
                                <a href="#" class="text-md text-pinterest hover:text-dark leading-none transition"><i
                                        class="icon-social-youtube"></i></a>
                                <div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div id="maintab" class="pb-5">
            <div class="container">
                <div class="grid grid-cols-1 gap-x-5">
                    <div class="border border-solid border-gray-300 p-8">
                        <ul class="custom-tab-nav flex flex-wrap items-center mb-10 -mx-5 -my-1">
                            <li class="mx-5 my-1"><a class="pb-3 leading-none capitalize transition-all hover:text-orange text-base sm:text-md before:absolute before:left-auto before:right-0 before:bottom-0 before:w-0 before:h-2px before:empty before:bg-orange relative before:transition-all ease-out" href="#description">Description</a></li>
                        </ul>
                        <div id="description" class="custom-tab-content">
                            <div>
                                <p class="mb-8">{{ $book->description }}.</p>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-web.shop-single.similar-products />
    </div>
@endsection
