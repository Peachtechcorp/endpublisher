            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- LOGO -->
                    <a href="{{ \URL::to('/') }}" class="logo text-center mb-4">
                        <span class="logo-lg">
                            <img src="{{ asset('images/logo/logo.png') }}" alt="" height="50">
                        </span>
                    </a>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="{{ route('home') }}">
                                    <i class="fe-airplay"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('categories.index') }}">
                                    <i class="fe-briefcase"></i>
                                    <span> Categories </span>
                                </a>
                            </li>
                          
                            <li>
                                <a href=" {{ route('books.index') }} ">
                                    <i class="fe-type"></i>
                                    <span> Books </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('orderItems.index') }}">
                                    <i class="fe-type"></i>
                                    <span> Orders </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('brands.index') }}">
                                    <i class="fe-type"></i>
                                    <span> Brand </span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
