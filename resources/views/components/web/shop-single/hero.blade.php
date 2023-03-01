    <!-- Hero section start -->
    <div class="py-9 bg-gray-light">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                            <li class="mr-5"><a href="index.html" class="text-dark font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">Home</a></li>
                            <li class="text-dark font-medium text-base uppercase mr-5">Airp Variable product</li>
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
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('images/products/lg/b17.jpg')}}" alt="product image">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div >
                    <h3 class="font-medium text-lg capitalize">Airp Variable product</h3>
                    <h5 class="font-bold text-md leading-none text-orange my-3"><del class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00</h5>
                    <div class="mb-3">Vendor:<span> Vendor 3 </span></div>
                    <div class="mb-3">Type: <span> Type 3 </span></div>
                    <div class="mb-3"><span>Availability:</span> <span class="font-semibold">9 left in stock</span></div>
                    <p class="mb-8">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>

                    <div>


                        <div class="flex flex-wrap items-center mb-6">
                            <span class="mr-8">Size:</span>
                            <form class="size-swatch" action="#">
                                <ul class="flex flex-wrap">
                                    <li class="mx-1">
                                        <input class="hidden opacity-0" type="radio" name="radio-group" id="size1">
                                        <label class="py-2 px-2 leading-none text-sm flex items-center justify-center transition-all bg-gray-300 cursor-pointer capitalize" for="size1">s</label>
                                    </li>

                                    <li class="mx-1">
                                        <input class="hidden opacity-0" type="radio" name="radio-group" id="size2" checked>
                                        <label class="py-2 px-2 leading-none text-sm flex items-center justify-center transition-all bg-gray-300 cursor-pointer capitalize" for="size2">m</label>
                                    </li>
                                    <li class="mx-1">
                                        <input class="hidden opacity-0" type="radio" name="radio-group" id="size3">
                                        <label class="py-2 px-2 leading-none text-sm flex items-center justify-center transition-all bg-gray-300 cursor-pointer capitalize" for="size3">l</label>
                                    </li>

                                    <li class="mx-1">
                                        <input class="hidden opacity-0" type="radio" name="radio-group" id="size4">
                                        <label class="py-2 px-2 leading-none text-sm flex items-center justify-center transition-all bg-gray-300 cursor-pointer capitalize" for="size4">xl</label>
                                    </li>

                                    <li class="mx-1">
                                        <input class="hidden opacity-0" type="radio" name="radio-group" id="size5">
                                        <label class="py-2 px-2 leading-none text-sm flex items-center justify-center transition-all bg-gray-300 cursor-pointer capitalize" for="size5">xxl</label>
                                    </li>
                                </ul>
                            </form>
                        </div>

                        <div class="flex flex-wrap items-center  mb-6">
                            <span class="mr-6">Color:</span>
                            <form action="#" class="colors-swatch">
                                <ul class="flex flex-wrap">
                                    <li class="mx-1">
                                        <input class="hidden opacity-0" type="radio" checked name="radio-group" id="color1">
                                        <label for="color1" class="w-7 h-7 rounded-full text-sm flex items-center justify-center transition-all relative bg-indigo-800 cursor-pointer capitalize"></label>
                                    </li>

                                    <li class="mx-1">
                                        <input class="hidden opacity-0" type="radio" name="radio-group" id="color2">
                                        <label for="color2" class="w-7 h-7 rounded-full text-sm flex items-center justify-center transition-all relative bg-pink-600 cursor-pointer capitalize"></label>
                                    </li>
                                    <li class="mx-1">
                                        <input class="hidden opacity-0" type="radio" name="radio-group" id="color3">
                                        <label for="color3" class="w-7 h-7 rounded-full text-sm flex items-center justify-center transition-all relative bg-red-600 cursor-pointer capitalize"></label>
                                    </li>

                                    <li class="mx-1">
                                        <input class="hidden opacity-0" type="radio" name="radio-group" id="color4">
                                        <label for="color4" class="w-7 h-7 rounded-full text-sm flex items-center justify-center transition-all relative bg-green-500 cursor-pointer capitalize"></label>
                                    </li>

                                    <li class="mx-1">
                                        <input class="hidden opacity-0" type="radio" name="radio-group" id="color5">
                                        <label for="color5" class="w-7 h-7 rounded-full text-sm flex items-center justify-center transition-all relative bg-yellow-500 cursor-pointer capitalize"></label>
                                    </li>
                                </ul>
                            </form>
                        </div>


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
                            <a href="#" class="text-md text-pinterest hover:text-dark leading-none transition"><i class="icon-social-youtube"></i></a>
                            <div>
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <a href="#" class="mr-2"><img src="{{ asset('images/payment/amazon.svg')}}" alt="payment icon"></a>
                            <a href="#" class="mr-2"><img src="{{ asset('images/payment/apple-pay.svg')}}" alt="payment icon"></a>
                            <a href="#" class="mr-2"><img src="{{ asset('images/payment/bitcoin.svg')}}" alt="payment icon"></a>
                            <a href="#" class="mr-2"><img src="{{ asset('images/payment/google-pay.svg')}}" alt="payment icon"></a>
                            <a href="#" class="mr-2"><img src="{{ asset('images/payment/paypal.svg')}}" alt="payment icon"></a>
                            <a href="#" class="mr-2"><img src="{{ asset('images/payment/visa.svg')}}" alt="payment icon"></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>