    <!-- Footer section start -->
    <footer>

        <!-- News Letter section start -->
        {{-- <section class="news-letter-section bg-white pb-24">
            <div class="container">
                <div class="grid gap-x-4">
                    <div class="col-span-12">
                        <div class="section-title text-center pb-14">
                            <span class="font-medium text-orange text-base block mb-4">SUBSCRIBE AREA</span>
                            <h3 class="font-playfair font-bold text-primary text-3xl md:text-4xl lg:text-xl">FOR LATEST NEWS</h3>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="text-center">
                            <form id="mc-form" class="relative text-center md:max-w-3xl mx-auto">
                                <input id="mc-email" type="email" name="email" placeholder="email@example.com" class="border border-solid border-gray-600 w-full h-16 rounded-full bg-gray-400 placeholder-primary placeholder-opacity-50 text-base focus:outline-none py-1 pl-8 sm:pr-36" />
                                <button id="mc-submit" type="submit" class="bg-orange transition-all hover:bg-primary hover:text-white px-10 sm:px-5 py-5 sm:py-1 rounded-full text-white capitalize font-medium text-sm lg:text-md sm:absolute sm:top-0 sm:right-0 sm:h-full mt-3 sm:mt-0 leading-none w-full sm:w-auto">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success text-green-400"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error text-red-600"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>


                    </div>
                </div>
            </div>
        </section> --}}
        <!-- News Letter section end -->


        <!-- footer start -->
        <div class="bg-gray bg-no-repeat bg-center bg-cover pt-24"
            style="background-image:url('{{ asset('images/footer/shape.webp') }} ')">
            <div class="container">

                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 md:col-span-6 lg:col-span-6 mb-10">
                        <a href="index.html" class="inline-block mb-4"><img src="{{ asset('images/logo/logo.png') }} "
                                alt="logo" loading="lazy" width="125" height="45" /></a>
                        <p class="mb-8">We aim to give our community the chance to read and succeed. We provide proven
                            programs to ensure our community discovers the joy of books, develop critical emergent
                            literacy and language skills,</p>

                        <div class="flex flex-wrap items-center justify-start">
                            <a href="#" aria-label="social links"
                                class="text-lg text-dark hover:text-orange mx-3 leading-none transition"><i
                                    class="icon-social-facebook"></i></a>
                            <a href="#" aria-label="social links"
                                class="text-lg text-dark hover:text-orange mx-3 leading-none transition"><i
                                    class="icon-social-twitter"></i></a>
                            <a href="#" aria-label="social links"
                                class="text-lg text-dark hover:text-orange mx-3 leading-none transition"><i
                                    class="icon-social-instagram"></i></a>
                        </div>
                    </div>

                    <div class="col-span-6 md:col-span-6 lg:col-span-2 mb-10">
                        <h3 class="text-primary font-bold text-md capitalize leading-none mb-8 font-playfair">
                            Menu</h3>
                        <ul>
                            <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all"
                                    href="/about">About us</a></li>
                            <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all"
                                    href="/contact">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-span-6 md:col-span-6 lg:col-span-2 mb-10">
                        <h3 class="text-primary font-bold text-md capitalize leading-none mb-8 font-playfair">Quick
                            Links</h3>
                        <ul>
                            <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all"
                                    href="/contact">Our Office</a></li>
                            <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all"
                                    href="/contact">Our Store</a></li>
                        </ul>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-2 mb-10">
                        <h3 class="text-primary font-bold text-md capitalize leading-none mb-8 font-playfair">Our
                            Branches</h3>
                        <ul>
                            <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all"
                                    href="#">Dar es Salaam</a></li>
                            <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all"
                                    href="#">Tanzania</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
        <!-- footer end -->


        <!-- Footer Bottom Section start -->
        <div class="footer-bottom-section py-8 bg-gray-500">
            <div class="container">
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="flex order-last md:order-first flex-wrap items-center justify-center md:justify-start">
                        <p class="text-white flex flex-wrap items-center text-sm lg:text-base">&copy; 2023 END Vision
                            Publishers.</p>
                    </div>

                    <div class="flex flex-wrap items-center justify-center md:justify-end">
                        <a href="#">
                            <img class="w-full h-full" src="{{ asset('images/logo/payment.webp') }} " alt="payment logo"
                                loading="lazy" width="286" height="23" />
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- Footer Bottom Section end -->

    </footer>
    <!-- Footer section end -->

    <a id="scrollUp"
        class="w-12 h-12 rounded-full bg-orange text-white fixed right-5 bottom-16 flex flex-wrap items-center justify-center transition-all duration-300 z-10"
        href="#" aria-label="scroll up"><i class="icon-arrow-up"></i></a>
    <!-- Modals -->

    <!-- modal-overlay start -->
    <div class="modal-overlay hidden fixed inset-0 bg-black opacity-50 z-10"></div>
    <!-- modal-overlay end -->
    <!-- modal-mobile-menu start -->
    <div id="modal-cart"
        class="modal fixed opacity-0 transition-opacity duration-300 ease-linear md:w-11/12 md:max-w-1000 hidden z-40 left-8 right-8 md:left-1/2 top-1/2 transform -translate-y-1/2 md:-translate-x-1/2 p-7 bg-white">



        <div class="grid md:grid-cols-2 gap-4">
            <div class="w-full">
                <img class="w-full h-full" src="{{ asset('images/products/lg/b5.jpg') }} " alt="product image"
                    loading="lazy" width="432" height="480">
            </div>
            <div>
                <button class="text-black text-lg absolute top-7 right-7 modal-close"><i
                        class="icon-close"></i></button>

                <h3 class="text-dark font-medium text-md lg:text-lg leading-none mb-4">Airpod product kiebd</h3>
                <h5 class="font-bold text-md leading-none text-orange mb-8">
                    $130.00
                    <del class="font-normal text-base mr-1 inline-block">$110.00</del>
                </h5>

                <p class="mb-5 text-sm">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks
                    as necessary, making this the first true generator on the Internet. All the Lorem Ipsum generators
                    on the Internet tend to repeat predefined chunks as necessary,</p>

                <select class="w-full h-12 border border-solid border-gray-300  px-5 py-2 appearance-none"
                    style="background: rgba(0,0,0,0) url('assets/images/icon/qcv-arrow-down.webp') no-repeat scroll right 20px center;">
                    <option value="red">red</option>
                    <option value="green">green</option>
                    <option value="blue">blue</option>
                </select>

                <div class="flex flex-wrap items-center mt-8">
                    <div class="flex count border border-solid border-gray-300 p-2 h-11">
                        <button class="decrement flex-auto w-5 leading-none" aria-label="button">-</button>
                        <input type="number" min="1" max="100" step="1" value="1"
                            class="quantity__input flex-auto w-8 text-center focus:outline-none input-appearance-none">
                        <button class="increment flex-auto w-5 leading-none" aria-label="button">+</button>
                    </div>
                    <div class="ml-2 sm:ml-8">
                        <button
                            class="bg-black leading-none py-4 px-5 md:px-8 font-normal text-sm h-11 text-white transition-all hover:bg-orange">Add
                            to Cart</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- modal-mobile-menu end -->


    <!-- modal-overlay start -->
    <div class="modal-overlay hidden fixed inset-0 bg-black opacity-50 z-30"></div>
    <!-- modal-overlay end -->
    <!-- modal-mobile-menu start -->
    <div id="modal-addto-cart"
        class="modal fixed opacity-0 transition-opacity duration-300 ease-linear md:w-11/12 md:max-w-1000 hidden z-50 left-8 right-8 md:left-1/2 top-1/2 transform -translate-y-1/2 md:-translate-x-1/2 p-7 bg-white mx-auto">


        <div class="md:flex md:flex-wrap">
            <div class="md:mr-5 md:flex-30 mb-5 md:mb-0">
                <img class="w-full" src="{{ asset('images/products/lg/b5.jpg') }} " alt="product image"
                    loading="lazy" width="432" height="480">
            </div>
            <div class="md:flex-auto">
                <button class="text-black text-lg absolute top-7 right-7 modal-close"><i
                        class="icon-close"></i></button>
                <h3 class="text-dark font-medium text-md sm:text-lg mb-4">Airpod product kiebd</h3>
                <p class="text-dark text-sm flex flex-wrap items-center"><i class="icon-check text-lg mr-5"></i> Added
                    to cart successfully!</p>
                <div class="mt-8">
                    <a href="#"
                        class="bg-black leading-none py-2 px-5 font-normal text-sm text-white transition-all hover:bg-orange mr-5">View
                        Cart</a>
                    <a href="#"
                        class="bg-black leading-none py-2 px-5 font-normal text-sm text-white transition-all hover:bg-orange">Checkout</a>
                </div>
            </div>
        </div>

    </div>
    <!-- modal-mobile-menu end -->
