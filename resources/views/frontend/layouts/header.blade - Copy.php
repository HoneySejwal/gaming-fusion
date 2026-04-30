<div class="cartfix-area">
    @cookieconsentview
            <div class="cartcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="cartcanvas__content">
                        <div class="mb-5 d-flex justify-content-between align-items-center border-bottom pb-3">
                          <h5 class="me-auto "> Cart Information</h5>
                            <div class="cartcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                             </div> 
                          <!-- end header title section -->
                            <ul class="cart-list">
                                @if(Helper::cartCount())
                                @foreach(Helper::getAllProductFromCart() as $key=>$cart)
                                  <li class="d-flex position-relative align-items-center"> 
                                   <a href="{{ route('cart-delete',$cart->id) }}" class="remove-item">   <i class="fas fa-times"></i> </a>
                                   @php
                                    $photo=explode(',',$cart->product['photo']);
                                    @endphp 
                                      <!-- <img src="{{url($photo[0])}}" class="img-fluid cart-img me-3" alt="game-img"> -->
                                      <div class="cart-info me-4">
                                           <a href="{{ route('product-detail',$cart->product->slug) }}">{{ $cart->product['title'] }}</a>
                                           <p> {{ Helper::getCurrencySymbol(session('currency')) }} {{number_format($cart['price'], 2)}}</p>
                                        </div>      
                                </li>
                                @endforeach
                                @else
                                    <li><p class="welcome-one__text">{{ __('common.no_cart_available') }}</p></li>
                                @endif
                             </ul>
                           <div class="cart-footer border-top mt-3 pt-3 pb-3 d-flex mb-3">
                               <h5 class="me-auto text-dark fw-bold">{{ __('common.subtotal') }} : </h5>
                              @php
                                $total_amount = Helper::totalCartPrice();
                            @endphp
                               <span>{{ Helper::getCurrencySymbol(session('currency')) }} {{ number_format($total_amount, 2) }}</span>
                           </div> 
                           <div class="cart-btn d-flex justify-content-center">
                            @if(Helper::cartCount())
                               <a href="{{ route('cart') }}" class="gt-theme-btn me-3">{{ __('common.view_cart') }}</a>
                                <a href="{{ route('checkout') }}" class="gt-theme-btn">{{ __('common.checkout') }}</a>
                               </div>  
                            @endif
                    </div>
                </div>
            </div>
        </div>
             <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/img/logo/black-logo.svg') }}" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>                       
                        <div class="mobile-menu fix mb-3"></div>                       
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header Section Start -->
        <header id="header-sticky" class="header-1">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <a href="{{ route('home') }}" class="header-logo">
                                    <img src="{{ asset('assets/img/logo/white-logo.svg') }}" alt="logo-img">
                                </a>
                            </div>
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                    <li class="has-dropdown {{ request()->routeIs('home') ? 'active' : '' }}">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="has-dropdown game_lst">
                                        <a href="{{ url('/product-lists') }}">
                                            Our Games <i class="fa-solid fa-chevron-down rotate-icon"></i>
                                        </a>
                                                <ul class="submenu">
                                            @php
                                                $category_lists = Helper::productCategoryList('all')->sortBy('id')->take(49);
                                            @endphp
                                            @foreach($category_lists as $category)
                                                <li>
                                                    <a href="{{ url('product-cat/'.$category->slug) }}">{{ $category->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="{{ request()->routeIs('pages.about-us') ? 'active' : '' }}">
                                        <a href="{{ route('pages', 'about-us') }}">About Us</a>
                                    </li>
                                    <li> <a href="{{route('database')}}">Database </a></li>
                                    
                                    <li class="has-dropdown">
                                        <a href="#">
                                            My Account <i class="fa-solid fa-chevron-down rotate-icon"></i>
                                        </a>
                                        <ul class="submenu">
                                            @auth
                                                <li><a href="{{ route('user') }}">My Account</a></li>
                                                <li><a href="{{ route('user.logout') }}">Logout</a></li>
                                            @else
                                                <li><a href="{{ route('login.form') }}">Login</a></li>
                                                <li><a href="{{ route('register.form') }}">Register</a></li>
                                            @endauth
                                        </ul>
                                    </li>
                                    <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                        <a href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                    <li class="curency-tinfo">
                                        <a href="#">
                                            {{ session('currency') == 'USD' ? '$ US Dollar' : '¥ Japanese Yen' }} 
                                            <i class="fa-solid fa-chevron-down rotate-icon"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('change.currency', 'JPY') }}">¥ Japanese Yen</a></li>
                                            <li><a href="{{ route('change.currency', 'USD') }}">$ US Dollar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="header-right-icon cart-rghticn position-relative">                              
                                <a href="javascript:void(0);">
                                    <i class="far fa-shopping-cart"></i>
                                </a>
                                @if(Helper::getAllProductFromCart())
                                <span class="cart-count">{{ Helper::totalCartQuantity() }}</span>
                                @else
                                <span class="cart-count">0</span>
                                @endif                             
                            </div>
                            <div class="header__hamburger d-block d-md-none my-auto ">
                                <div class="sidebar__toggle ">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
