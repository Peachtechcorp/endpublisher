    <!-- Hero section start -->
    <div class="py-9 bg-gray-light">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                            <li class="mr-5"><a href="index.html" class="text-dark font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">Home</a></li>
                            <li class="text-dark font-medium text-base uppercase mr-5">Book details</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <!-- Hero section end -->


    <div class="py-24">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                <div>
                    <div class="relative overflow-hidden">
                        <span class="font-semibold uppercase text-sm text-white inline-block py-1 px-2 leading-none absolute top-3  z-10 right-3 bg-orange">Sale</span>
                        <div class="gallery mb-6">
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/products/lg/b17.jpg')}}" alt="product image">
                                </div>
                        </div>

                    </div>
                </div>

                <div >
                    <h3 class="font-medium text-lg capitalize">Airp Variable product</h3>
                    <h5 class="font-bold text-md leading-none text-orange my-3"><del class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00</h5>
                    <div class="mb-3">Author:<span> Mark </span></div>
                    <div class="mb-3">Year: <span> 2023 </span></div>
                    <div class="mb-3"><span>ISBN:</span> <span class="font-semibold">654646</span></div>
                    <div class="mb-3"><span>Pages:</span> <span class="font-semibold">676</span></div>
                    <div class="mb-3"><span>Price:</span> <span class="font-semibold">676</span></div>
                    <p class="mb-8">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>

                    <div>


                        <div class="mb-8">
                            <div class="flex flex-wrap items-center mt-8">
                                <div class="flex count border border-solid border-gray-300 p-2 h-11">
                                    <button class="decrement flex-auto w-5 leading-none" aria-label="button">-</button>
                                    <input type="number" min="1" max="100" step="1" value="1" class="quantity__input flex-auto w-8 text-center focus:outline-none input-appearance-none">
                                    <button class="increment flex-auto w-5 leading-none" aria-label="button">+</button>
                                </div>
                                <div class="ml-2 sm:ml-8">
                                    <button class="bg-black leading-none py-4 px-5 md:px-8 font-normal text-sm h-11 text-white transition-all hover:bg-orange">Add to Cart</button>
                                </div>
                                <a href="#" class="text-md ml-8"><i class="icon-heart"></i></a>
                                <a href="#" class="text-md ml-8"><i class="icon-refresh"></i></a>
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center justify-start mb-8">
                            <a href="#" class="text-md text-facebook hover:text-dark mr-10 leading-none transition relative before:absolute before:top-1/2  before:-translate-y-1/2 before:left-7 before:empty before:bg-gray-900 before:w-4 before:h-1px"><i class="icon-social-facebook"></i></a>
                            <a href="#" class="text-md text-twitter hover:text-dark mr-10 leading-none transition relative before:absolute before:top-1/2  before:-translate-y-1/2 before:left-7 before:empty before:bg-gray-900 before:w-4 before:h-1px"><i class="icon-social-twitter"></i></a>
                            <a href="#" class="text-md text-dribbble hover:text-dark mr-10 leading-none transition relative before:absolute before:top-1/2  before:-translate-y-1/2 before:left-7 before:empty before:bg-gray-900 before:w-4 before:h-1px"><i class="icon-social-instagram"></i></a>
                            <div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>