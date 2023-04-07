    <!-- Breadcrumb section start -->
    <div class="py-9 bg-gray-light">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                            <li class="mr-5"><a href="index.html"
                                    class="text-dark font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">Home</a>
                            </li>
                            <li class="text-dark font-medium text-base uppercase mr-5">Your Shopping Cart</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <!-- Breadcrumb section end -->


    <div class="py-24">

        <div class="container">
            <div class="grid grid-cols-1 gap-x-5">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-max">
                        <thead>
                            <tr>
                                <th
                                    class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">
                                    Image</th>
                                <th
                                    class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">
                                    Product</th>
                                <th
                                    class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">
                                    Price</th>
                                <th
                                    class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">
                                    Quantity</th>
                                <th
                                    class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">
                                    Total</th>
                                <th
                                    class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">
                                    Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (session()->get('cart', []) as $item)
                                <tr>
                                    <td class="w-32 p-3 border border-solid border-gray-600 text-center">
                                        <a href="#">
                                            <img src="{{ $item['image'] }}" alt="product image"></a>
                                    </td>
                                    <td class="p-3 border border-solid border-gray-600 text-center">
                                        {{ $item['name'] }} </td>
                                    <td class="p-3 border border-solid border-gray-600 text-center">
                                        {{ $item['price'] }}
                                    </td>
                                    <td class="p-3 border border-solid border-gray-600 text-center">

                                        <div class="flex count border border-solid border-gray-300 p-2 h-11">
                                            <button class="decrement flex-auto w-5 leading-none"
                                                aria-label="button">-</button>
                                            <input type="number" min="1" max="100" step="1"
                                                value="{{ $item['quantity'] }}"
                                                class="quantity__input flex-auto w-8 text-center focus:outline-none input-appearance-none">
                                            <button class="increment flex-auto w-5 leading-none"
                                                aria-label="button">+</button>
                                        </div>
                                    </td>
                                    <td class="p-3 border border-solid border-gray-600 text-center">
                                        <span>TSH {{ $item['price'] * $item['quantity'] }} /=</span>
                                    </td>
                                    <td class="p-3 border border-solid border-gray-600 text-center">

                                        <a href="{{ route('cart.remove', ['book' => $item['book_id']]) }}"
                                            class="inline-block mx-1 hover:text-orange transition-all"><i
                                                class="icon-close"></i></a>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
