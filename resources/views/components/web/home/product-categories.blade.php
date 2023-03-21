@php
    $brands = App\Models\Brand::all();
@endphp
<div id="maintab" class="pb-24">
    <div class="container">
        <div class="grid grid-rows-1 grid-flow-col gap-x-4">
            <div class="text-center mb-14">
                {{-- <h2 class="font-playfair font-bold text-3xl text-primary md:text-4xl lg:text-xl">Featured</h2> --}}
            </div>
        </div>
        <div class="grid grid-cols-1 gap-x-5">
            <div class="border border-solid border-gray-300 p-8">
                @foreach ($brands as $brand)
                    <ul class="custom-tab-nav flex flex-wrap items-center mb-10 -mx-5 -my-1">
                        <li class="mx-5 my-1"><a
                                class="pb-3 leading-none capitalize transition-all hover:text-orange text-base sm:text-md before:absolute before:left-auto before:right-0 before:bottom-0 before:w-0 before:h-2px before:empty before:bg-orange relative before:transition-all ease-out"
                                href="#description-{{ $brand->id }}">{{ $brand->name }}</a></li>

                    </ul>
                    @foreach ($brand->books as $book)
                        <div id="description-{{ $brand->id }}" class="custom-tab-content">
                            <div class="mt-10">
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
                                                <img class="w-full h-full" src="{{ $book->featured_image }} "
                                                    alt="product image" loading="lazy" width="432" height="480" />
                                                <!-- actions start -->

                                                <div
                                                    class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                    <ul
                                                        class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="{{ route('book.view', ['book' => $book]) }}"
                                                                class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                                data-tippy-content="View More" aria-label="View More">
                                                                <i class="icon-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                            <form action="{{ route('cart.add', ['book' => $book]) }}"
                                                                method="post">
                                                                @csrf
                                                                <a href="javascript:void(0);"
                                                                    onclick="this.parentElement.submit()"
                                                                    class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                                    aria-label="add to cart"
                                                                    data-tippy-content="Add to cart">
                                                                    <i class="icon-bag"></i>
                                                                </a>
                                                            </form>
                                                        </li>

                                                    </ul>
                                                </div>

                                                <!-- actions end -->
                                            </div>

                                            <div class="py-5 px-4">
                                                <h3><a class="block text-base hover:text-orange transition-all"
                                                        href="#">{{ $book->name }}</a></h3>
                                                <h4 class="font-bold text-md leading-none text-orange mt-3">TSH :
                                                    {{ $book->price }}</h4>
                                            </div>
                                        </div>
                                    </div>




                                </div>

                            </div>
                        </div>
                    @endforeach
                @endforeach



            </div>
        </div>
    </div>
</div>
