    <!-- Breadcrumb section start -->
    <div class="py-9 bg-gray-light">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                            <li class="mr-5"><a href="index.html" class="text-dark font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">Home</a></li>
                            <li class="text-dark font-medium text-base uppercase mr-5">Checkout page</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <!-- Breadcrumb section end -->

    <div class="py-24">
        <div class="container">
            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12 lg:col-span-7">
                    <div>
                        <h3 class="text-lg font-semibold mb-5">Billing Details</h3>
                        <form class="personal-information" action="assets/php/contact.php">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-5">
                                <div>
                                    <div>
                                        <label class="mb-3 inline-block">First Name</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label class="mb-3 inline-block">Last Name</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text">
                                    </div>
                                </div>
                                <div class="lg:col-span-2">
                                    <div>
                                        <label class="mb-3 inline-block">Company Name</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text">
                                    </div>
                                </div>
                                <div class="lg:col-span-2">
                                    <div>
                                        <label class="mb-3 inline-block">Country</label>
                                        <select class="bg-transparent border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base">
                                            <option>Select a country</option>
                                            <option>Azerbaijan</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Barbados</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="lg:col-span-2">
                                    <div>
                                        <label class="mb-3 inline-block">Street Address</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" placeholder="House number and street name" type="text">
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" placeholder="Apartment, suite, unit etc." type="text">
                                    </div>
                                </div>
                                <div class="lg:col-span-2">
                                    <div>
                                        <label class="mb-3 inline-block">Town / City</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label class="mb-3 inline-block">State / County</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label class="mb-3 inline-block">Postcode / ZIP</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label class="mb-3 inline-block">Phone</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label class="mb-3 inline-block">Email Address</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text">
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="checkout-account mb-5">
                            <input id="id2" class="checkout-toggle2" type="checkbox">
                            <label for="id2">Create an account?</label>
                        </div>
                        <div class="checkout-account-toggle open-toggle2 mb-30 hidden">
                            <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" placeholder="Email address" type="email">
                            <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" placeholder="Password" type="password">
                            <button class="text-center leading-none uppercase text-white text-sm bg-dark px-6 py-4 transition-all hover:bg-orange font-semibold mb-5" type="submit" aria-label="button">
                                register
                            </button>
                        </div>
                        <div class="additional-info-wrap">
                            <h4 class="text-base font-semibold">Additional information</h4>
                            <div class="additional-info">
                                <label class="mb-3 inline-block">Order notes</label>
                                <textarea class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-36 focus:outline-none text-base" placeholder="Notes about your order, e.g. special notes for delivery." name="message"></textarea>
                            </div>
                        </div>
                        <div class="checkout-account mt-25">
                            <input id="ship" class="checkout-toggle" type="checkbox">
                            <label for="ship">Ship to a different address?</label>
                        </div>
                        <div class="different-address open-toggle mt-5 hidden">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-5">
                                <div>
                                    <div>
                                        <label class="mb-3 inline-block">First Name</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label class="mb-3 inline-block">Last Name</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text">
                                    </div>
                                </div>
                                <div class="lg:col-span-2">
                                    <div>
                                        <label class="mb-3 inline-block">Company Name</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text">
                                    </div>
                                </div>
                                <div class="lg:col-span-2">
                                    <div>
                                        <label class="mb-3 inline-block">Country</label>
                                        <select class="bg-transparent border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base">
                                            <option>Select a country</option>
                                            <option>Azerbaijan</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Barbados</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="lg:col-span-2">
                                    <div>
                                        <label class="mb-3 inline-block">Street Address</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" placeholder="House number and street name" type="text">
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" placeholder="Apartment, suite, unit etc." type="text">
                                    </div>
                                </div>
                                <div class="lg:col-span-2">
                                    <div>
                                        <label class="mb-3 inline-block">Town / City</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label class="mb-3 inline-block">State / County</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label class="mb-3 inline-block">Postcode / ZIP</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label class="mb-3 inline-block">Phone</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label class="mb-3 inline-block">Email Address</label>
                                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5 mt-4 mt-lg-0">
                    <div>
                        <h3 class="text-lg font-semibold mb-5">Your order</h3>
                        <div class="bg-gray-700 p-10">
                            <div class="your-order-product-info">
                                <ul class="flex flex-wrap items-center justify-between">
                                    <li class="text-base font-semibold">Product</li>
                                    <li class="text-base font-semibold">Total</li>
                                </ul>
                                <ul class="border-t border-b border-gray-600 py-5 my-5">
                                    <li class="flex flex-wrap items-center justify-between">
                                        <span>Product Name X 1</span>
                                        <span>$329 </span>
                                    </li>
                                    <li class="flex flex-wrap items-center justify-between">
                                        <span>Product Name X 1</span>
                                        <span>$329 </span>
                                    </li>
                                </ul>
                                <ul class="flex flex-wrap items-center justify-between">
                                    <li class="text-base font-semibold">Shipping</li>
                                    <li class="text-base font-semibold">Free shipping</li>
                                </ul>
                                <ul class="flex flex-wrap items-center justify-between border-t border-b border-gray-600 py-5 my-5">
                                    <li class="text-base font-semibold">Total</li>
                                    <li class="text-base font-semibold">$329</li>
                                </ul>
                            </div>
                            <div class="accordion">
                                <div class="set mb-4">
                                    <button class="text-base font-semibold active" aria-label="button">
                                        Direct bank transfer
                                    </button>
                                    <div class="content overflow-hidden p-4 bg-white mt-3">
                                        <p>
                                            Please send a check to Store Name, Store Street,
                                            Store Town, Store State / County, Store Postcode.
                                        </p>
                                    </div>
                                </div>
                                <div class="set mb-4">
                                    <button class="text-base font-semibold" aria-label="button">
                                        Check payments
                                    </button>
                                    <div class="content overflow-hidden p-4 bg-white mt-3 hidden">
                                        <p>
                                            Please send a check to Store Name, Store Street,
                                            Store Town, Store State / County, Store Postcode.
                                        </p>
                                    </div>
                                </div>
                                <div class="set mb-4">
                                    <button class="text-base font-semibold" aria-label="button">
                                        Cash on delivery
                                    </button>
                                    <div class="content overflow-hidden p-4 bg-white mt-3 hidden">
                                        <p>
                                            Please send a check to Store Name, Store Street,
                                            Store Town, Store State / County, Store Postcode.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="mt-6">
                            <a class="block w-full text-center leading-none uppercase text-white text-sm bg-dark px-5 py-5 transition-all hover:bg-orange font-semibold" href="#">Place Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>