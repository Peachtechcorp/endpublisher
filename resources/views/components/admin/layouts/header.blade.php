            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            {{-- <img src="assets/images/users/avatar-4.jpg" alt="user-image" class="rounded-circle"> --}}
                            <span class="pro-user-name ml-1">
                                {{ Auth::user()->name }}<i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h6 class="m-0">
                                    Welcome !
                                </h6>
                            </div>

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                @guest
                                    @if (Route::has('login'))
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    @endif

                                    @if (Route::has('register'))
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                @else
                                    <div class="px-2">
                                        {{-- <a id="navbarDropdown" class="nav-link  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a> --}}


                                        <a class="" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>


                                @endguest
                            </div>


                        </div>
                    </li>

                    {{-- <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li> --}}

                </ul>

                <ul class="list-unstyled menu-left mb-0">

                    <li class="float-left">
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                </ul>
            </div>
            <!-- end Topbar -->
