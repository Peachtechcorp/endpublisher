    <!-- Breadcrumb section start -->
    <div class="py-9 bg-gray-light">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                            <li class="mr-5"><a href="/"
                                    class="text-dark font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">Home</a>
                            </li>
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
                        <form class="personal-information" action="{{ route('orderItems.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-5">


                                <div class="lg:col-span-2">
                                    <div>
                                        <label class="mb-3 inline-block"> Name</label>
                                        <input
                                            class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                                            type="text" value="{{ Auth::user()->name }}" readonly>
                                    </div>
                                </div>







                                <div>
                                    <div>
                                        <label class="mb-3 inline-block">Email Address</label>
                                        <input
                                            class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                                            type="text" value="{{ Auth::user()->email }}" readonly>
                                    </div>
                                </div>
                                <div class="lg:col-span-2">
                                    <div>
                                        <label class="mb-3 inline-block"> Description</label>
                                        <textarea
                                            class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                                            name="description" rows="10"></textarea>
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
                                    @foreach (session()->get('cart', []) as $key => $item)
                                        <li class="flex flex-wrap items-center justify-between">
                                            <input type="hidden" name="order_items[{{ $key }}][product_id]"
                                                value="{{ $item['book_id'] }}" />
                                            <input type="hidden" name="order_items[{{ $key }}][price]"
                                                value="{{ $item['price'] }}" />
                                            <input type="hidden" name="order_items[{{ $key }}][quantity]"
                                                value="{{ $item['quantity'] }}" />
                                            <span>{{ $item['name'] }}</span>
                                            <span>TSH {{ $item['price'] }} /=</span>
                                        </li>
                                    @endforeach

                                </ul>
                                <ul class="flex flex-wrap items-center justify-between">
                                    <li class="text-base font-semibold">Shipping</li>
                                    <li class="text-base font-semibold">Free shipping</li>
                                </ul>
                                <ul
                                    class="flex flex-wrap items-center justify-between border-t border-b border-gray-600 py-5 my-5">
                                    <li class="text-base font-semibold">Total</li>
                                    <input type="hidden" name="total" value="{{ session()->get('total') }}">
                                    <li class="text-base font-semibold">TSH {{ session()->get('total') }} /=</li>
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
                            <button
                                class="block w-full text-center leading-none uppercase text-white text-sm bg-dark px-5 py-5 transition-all hover:bg-orange font-semibold"
                                type="submit">Place Order</button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
