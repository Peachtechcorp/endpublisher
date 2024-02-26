    <!-- Header start -->
    @php
        use App\Models\Category;
        $categories = Category::all();
    @endphp

    <header id="sticky-header">

        <div class="px-4 md:px-10 2xl:px-24 py-6 lg:py-0">
            <div class="flex items-center lg:relative">
                <div class="w-6/12 lg:w-2/12">
                    <div class="logo"><a href="{{ \URL::to('/') }}"><img src="{{ asset('images/logo/logo.png') }} "
                                alt="logo" loading="lazy" width="125" height="45" /></a></div>
                </div>
                <div class="hidden lg:flex flex-1 xl:relative">
                    <nav class="main-menu">
                        <ul class="flex flex-wrap">
                            <li class="main-menu__item"><a
                                    class="block py-10 xl:px-6 md:px-5 capitalize font-normal text-md text-primary hover:text-orange transition-all"
                                    href="/">Home</a></li>
                            <li class="main-menu__item relative group">
                                <a class="block py-10 xl:pr-6 md:pr-5 capitalize font-normal text-md text-primary hover:text-orange transition-all"
                                    href="/">Browse Categories</a>
                                <ul
                                    class="submenu bg-white py-3 px-8 shadow transition-all absolute left-0 top-full opacity-0 group-hover:opacity-100 invisible group-hover:visible group-hover:-translate-y-3 transform z-10 min-w-max">
                                    @foreach ($categories as $category)
                                        <li class="my-3"><a
                                                class="text-dark font-normal text-base capitalize transition-all hover:text-orange"
                                                href="{{ route('book.category', ['category' => $category->id]) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach


                                </ul>
                            </li>
                            <li class="main-menu__item"><a
                                    class="block py-10 xl:px-6 md:px-5 capitalize font-normal text-md text-primary hover:text-orange transition-all"
                                    href="/shop">Shop</a></li>
                            <li class="main-menu__item"><a
                                    class="block py-10 xl:px-6 md:px-5 capitalize font-normal text-md text-primary hover:text-orange transition-all"
                                    href="{{ route('about') }}">About Us</a></li>
                            <li class="main-menu__item"><a
                                    class="block py-10 xl:px-6 md:px-5 capitalize font-normal text-md text-primary hover:text-orange transition-all"
                                    href="{{ route('contact') }}">Contact Us</a></li>

                        </ul>
                    </nav>

                </div>

                <div class="w-6/12 lg:w-3/12">

                    <ul class="flex items-center justify-end">

                        <li class="ml-6 hidden lg:block">
                            <button
                                class="search-toggle text-right text-primary text-md hover:text-orange transition-all"
                                aria-label="icon-settings">
                                <i class="icon-magnifier"></i>
                            </button>
                        </li>
                        <li class="ml-6">
                            <a href="{{ route('cart') }}"
                                class="text-primary text-md hover:text-orange transition-all ">

                                <i class="icon-bag"></i>
                                {{ is_array(session()->get('cart')) ? count(session()->get('cart')) : 0 }}
                            </a>

                        </li>

                        <li id="toggle-menu" class="ml-6 hidden lg:block relative">
                            <button class="text-primary text-md hover:text-orange transition-all toggle-menu"
                                aria-label="icon-user">
                                <i class="icon-user"></i>
                            </button>
                            @if (Route::has('login'))
                                <div id="settings-card"
                                    class="bg-white absolute right-0 px-8 py-5 shadow w-80 opacity-0 invisible transition-all duration-300 ease-in-out z-20">
                                    <h4
                                        class="text-md text-dark font-normal capitalize tracking-wide pb-5 border-b border-solid border-gray-600 mb-5">
                                        Account</h4>
                                    <ul class="navbar-nav ms-auto">
                                        <!-- Authentication Links -->
                                        @guest
                                            @if (Route::has('login'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                                </div>
                            @endif
                        </li>
                        <li class="ml-6 lg:hidden">
                            <a href="#offcanvas-mobile-menu"
                                class="offcanvas-toggle text-primary text-md hover:text-orange transition-all"><i
                                    class="icon-menu"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </header>

    <div
        class="search-form fixed top-0 left-0 w-full bg-black opacity-95 min-h-screen items-center justify-center py-8 px-10 transform  transition-transform translate-x-full ease-in-out duration-500 hidden lg:flex z-50">
        <button class="search-close absolute left-1/2 text-white text-xl top-12 translate-y-1/2"
            aria-label="close icon"><span class="icon-close"></span></button>
        <form class="relative xl:w-1/3 lg:w-1/2" action="#" method="get">
            <input
                class="text-md font-normal border-b border-solid border-gray-600 bg-transparent h-14 w-full focus:outline-none pr-14 text-white"
                type="search" name="search" placeholder="Search our store" />
            <button class="absolute right-0 top-3 text-white text-md font-normal" type="submit"
                aria-label="submit button"><i class="icon-magnifier"></i></button>
        </form>
    </div>
    <!-- offcanvas-overlay start -->
    <div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
    <!-- offcanvas-overlay end -->
    <!-- offcanvas-mobile-menu start -->
    <div id="offcanvas-mobile-menu"
        class="offcanvas left-auto right-0  transform translate-x-translate-x-full-120 fixed font-normal text-sm top-0 z-50 h-screen w-72 sm:w-80 lg:w-96 transition-all ease-in-out duration-300 bg-white">

        <div class="px-8 py-12 h-5/6 overflow-y-auto">

            <!-- search form start -->

            <form class="pb-10 mb-10 border-b border-solid border-gray-600" action="#" method="get">
                <div class="relative">
                    <input
                        class="w-full h-12 text-sm py-4 pl-4 pr-16 bg-gray-light text-dark placeholder-current focus:outline-none"
                        type="search" name="search" placeholder="Search our store">
                    <button
                        class="w-12 h-full absolute top-0 right-0 flex items-center justify-center text-dark text-md border-l border-solid border-gray-600"
                        type="submit" aria-label="button"><i class="icon-magnifier"></i></button>
                </div>
            </form>

            <!-- search form end -->

            <!-- close button start -->
            <button
                class="offcanvas-close bg-dark group transition-all hover:text-orange text-white w-10 h-10 flex items-center justify-center absolute -left-10 top-0"
                aria-label="offcanvas"><i
                    class="icon-close transition-all transform group-hover:rotate-90"></i></button>
            <!-- close button end -->

            <!-- offcanvas-menu start -->


            <nav class="offcanvas-menu pb-10 mb-10 border-b border-solid border-gray-600">
                <ul>
                    <li class="relative block"><a href="/"
                            class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">Home</a>
                    </li>
                    <li class="relative block"><a href="/about"
                            class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">About us</a>
                    </li>
                    <li class="relative block"><a href="/shop"
                            class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">Shop</a>
                    </li>
                    <li class="main-menu__item relative group "><a href="#"
                            class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">Browse
                            Category</a>
                            <ul
                            class="submenu bg-white py-3 px-8 shadow transition-all absolute left-0 top-full opacity-0 group-hover:opacity-100 invisible group-hover:visible group-hover:-translate-y-3 transform z-10 min-w-max">
                            @foreach ($categories as $category)
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-orange"
                                        href="{{ route('book.category', ['category' => $category->id]) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach


                        </ul>
                    </li>
                    <li class="relative block"><a href="/contact"
                            class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">Contact
                            us</a>
                    </li>
                </ul>
            </nav>
            <!-- offcanvas-menu end -->


            <nav>
                           @if (Route::has('login'))
                                    <ul class="navbar-nav ms-auto">
                                        <!-- Authentication Links -->
                                        @guest
                                            @if (Route::has('login'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                            @endif
            </nav>

        </div>
    </div>
    <!-- offcanvas-mobile-menu end -->


    {{-- <!-- offcanvas-mobile-menu start -->
    <div id="offcanvas-cart"
        class="offcanvas left-auto right-0  transform translate-x-translate-x-full-120 fixed font-normal text-sm top-0 z-50 h-screen w-80 lg:w-96 transition-all ease-in-out duration-300 bg-white overflow-y-auto">
        <div class="p-8">
            <div class="flex flex-wrap justify-between items-center pb-6 mb-6 border-b border-solid border-gray-600">
                <h4 class="font-normal text-md text-dark capitalize">Shoping Cart</h4>
                <button class="offcanvas-close hover:text-orange" aria-label="close icon"><i
                        class="icon-close"></i></button>
            </div>
            <ul class="h-96 overflow-y-auto">
                <li class="flex flex-wrap group mb-8">
                    <div class="mr-5 relative">
                        <a href="#"><img src="{{ asset('images/cart/b5.jpg') }} " alt="product image"
                                loading="lazy" width="90" height="100" /></a>
                        <button
                            class="absolute top-3 left-3 opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all hover:text-orange"><i
                                class="icon-close"></i></button>
                    </div>
                    <div class="flex-1">
                        <h4>
                            <a class="font-light text-sm md:text-base text-dark hover:text-orange transition-all tracking-wide"
                                href="#">Birpod product unsde - m / gold</a>
                        </h4>
                        <span class="font-light text-sm text-dark transition-all tracking-wide">1 x
                            <span>$80.00</span></span>
                    </div>
                </li>
                <li class="flex flex-wrap group mb-8">
                    <div class="mr-5 relative">
                        <a href="/#"><img src="{{ asset('images/cart/b17.jpg') }} " alt="product image"
                                loading="lazy" width="90" height="100" /></a>
                        <button
                            class="absolute top-3 left-3 opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all hover:text-orange"><i
                                class="icon-close"></i></button>
                    </div>
                    <div class="flex-1">
                        <h4>
                            <a class="font-light text-sm md:text-base text-dark hover:text-orange transition-all tracking-wide"
                                href="/#">Airpod product kiebd - red</a>
                        </h4>
                        <span class="font-light text-sm text-dark transition-all tracking-wide">1 x
                            <span>$99.00</span></span>
                    </div>
                </li>
                <li class="flex flex-wrap group mb-8">
                    <div class="mr-5 relative">
                        <a href="#"><img src="{{ asset('images/cart/b17.jpg') }} " alt="product image"
                                loading="lazy" width="90" height="100" /></a>
                        <button
                            class="absolute top-3 left-3 opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all hover:text-orange"><i
                                class="icon-close"></i></button>
                    </div>
                    <div class="flex-1">
                        <h4>
                            <a class="font-light text-sm md:text-base text-dark hover:text-orange transition-all tracking-wide"
                                href="#">Airpod product ides - navy</a>
                        </h4>
                        <span class="font-light text-sm text-dark transition-all tracking-wide">1 x
                            <span>$39.00</span></span>
                    </div>
                </li>
            </ul>
            <div>
                <div
                    class="flex flex-wrap justify-between items-center py-4 my-6 border-t border-b border-solid border-gray-600 font-normal text-base text-dark capitalize">
                    Total:<span>$218.00</span>
                </div>
                <div class="text-center">
                    <a class="py-5 px-10 block bg-white border border-solid border-gray-600 uppercase font-semibold text-base hover:bg-orange hover:border-orange hover:text-white transition-all leading-none"
                        href="checkout.html">Checkout</a><a
                        class="py-5 px-10 block bg-white border border-solid border-gray-600 uppercase font-semibold text-base hover:bg-orange hover:border-orange hover:text-white transition-all leading-none mt-3"
                        href="cart.html">View Cart</a>
                </div>
            </div>

        </div>

    </div>
    <!-- offcanvas-mobile-menu end --> --}}


    <!-- Header end -->
