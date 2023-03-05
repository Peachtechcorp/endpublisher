            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- LOGO -->
                    <a href="{{ \URL::to('/')}}" class="logo text-center mb-4">
                        <span class="logo-lg">
                            <img src="{{ asset("images/logo/logo.png")}}" alt="" height="50">
                        </span>
                    </a>
        
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>
        
                            <li>
                                <a href="#">
                                    <i class="fe-airplay"></i>
                                    <span class="badge badge-success float-right">01</span>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                
                            <li>
                                <a href="{{ route('categories.index')}}">
                                    <i class="fe-briefcase"></i>
                                    <span> Categories </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('products.index')}}">
                                    <i class="fe-briefcase"></i>
                                    <span> Products </span>
                                </a>
                            </li>
                            <li>
                                <a href=" {{ route('books.index')}} ">
                                    <i class="fe-type"></i>
                                    <span> Books </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('orders.index')}}">
                                    <i class="fe-type"></i>
                                    <span> Orders </span>
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