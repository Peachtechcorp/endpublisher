    <!-- shipping  start -->
    <section class="pb-24">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-5">
                <div>
                    <div>
                        <h3 class="text-md font-semibold capitalize mb-8"></h3>

                    </div>
                </div>
                <div class="mt-4 lg:mt-0">
                    <div class="bg-gray-700 p-10">
                        <ul class="flex flex-wrap items-center justify-between">
                            <li class="text-base font-semibold">Product</li>
                            <li class="text-base font-semibold">Total</li>
                        </ul>

                        <ul class="flex flex-wrap items-center justify-between">
                            <li class="text-base font-semibold">Shipping</li>
                            <li class="text-base font-semibold">Free shipping</li>
                        </ul>
                        <div class="border-t border-b border-gray-600 py-5 mt-5">
                            <ul class="flex flex-wrap items-center justify-between">
                                <li class="text-base font-semibold">Total</li>
                                <li class="text-base font-semibold text-orange">TSH {{ session()->get('total') }} /=
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-8">

                        <a href="{{ route('checkout') }}"
                            class="inline-block bg-dark leading-none py-4 px-5 md:px-8 text-sm text-white transition-all hover:bg-orange uppercase font-semibold hover:text-white ml-4">checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shipping  end -->
