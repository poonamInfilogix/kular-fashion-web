<header class="header header-7">
    <div class="header-top">
        <div class="container-fluid">
            <div class="header-left">
                <div class="header-dropdown">
                    <a href="#">Usd</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">Eur</a></li>
                            <li><a href="#">Usd</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="header-right">
                <ul class="top-menu">
                    <li>
                        <a href="#">Links</a>
                        <ul>
                            <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                            <li><a href="{{ route('wishlist') }}"><i class="icon-heart-o"></i>My Wishlist <span>(3)</span></a></li>
                            <li><a href="{{ route('about.index')}}">About Us</a></li>
                            <li><a href="{{ route('contact.index')}}">Contact Us</a></li>
                            @if (Auth::check())
                                <li><div class="header-dropdown">
                                    <a href="#"><i class="icon-user"></i>{{ Auth::user()->name }} </a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="{{ route('logout') }}"><i class="icon-user"></i> Logout</a></li>
                                        </ul>
                                    </div>
                                </div></li>
                            @else
                                <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header-middle sticky-header">
        <div class="container-fluid">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>
                
                <a href="#" class="logo">
                    <img src="{{ asset('assets/logo.png') }}" alt="Kular Logo" width="200" height="100">
                </a>

                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container active">
                            <a href="{{ route('home')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('products.index')}}" class="sf-with-ul">Women</a>

                            <div class="megamenu megamenu-sm">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="menu-col">
                                            <div class="menu-title">Women</div>
                                            <ul>
                                                <li><a href="#">New Arrivals</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Shirts</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Trousers</a></li>
                                                <li><a href="#">overshirts</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="banner banner-overlay">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/menu/banner-2.jpg') }}" alt="Banner">

                                                <div class="banner-content banner-content-bottom">
                                                    <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div><!-- End .banner-title -->
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('products.index')}}" class="sf-with-ul">Men</a>

                            <div class="megamenu megamenu-sm">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="menu-col">
                                            <div class="menu-title">Men</div>
                                            <ul>
                                                <li><a href="#">New Arrivals</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Shirts</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Trousers</a></li>
                                                <li><a href="#">overshirts</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="banner banner-overlay">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/menu/banner-2.jpg') }}" alt="Banner">

                                                <div class="banner-content banner-content-bottom">
                                                    <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div><!-- End .banner-title -->
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('products.index')}}" class="sf-with-ul">Kids</a>

                            <div class="megamenu megamenu-sm">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="menu-col">
                                            <div class="menu-title">Men</div>
                                            <ul>
                                                <li><a href="#">New Arrivals</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Shirts</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Trousers</a></li>
                                                <li><a href="#">overshirts</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="banner banner-overlay">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/menu/banner-2.jpg') }}" alt="Banner">

                                                <div class="banner-content banner-content-bottom">
                                                    <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div><!-- End .banner-title -->
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="megamenu-container">
                            <a href="#">Brands</a>
                        </li>
                        <li class="megamenu-container">
                            <a href="#">Outlet</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="header-right">
                <div class="header-search header-search-extended header-search-visible">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper search-wrapper-wide">
                            <label for="q" class="sr-only">Search</label>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
                
                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="icon-shopping-cart"></i>
                        <span class="cart-count">2</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-cart-products">
                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="#">Beige knitted elastic runner shoes</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span>
                                        x $84.00
                                    </span>
                                </div>

                                <figure class="product-image-container">
                                    <a href="#" class="product-image">
                                        <img src="{{ asset('assets/images/products/cart/product-1.jpg') }}" alt="product">
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                            </div>

                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="#">Blue utility pinafore denim dress</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span>
                                        x $76.00
                                    </span>
                                </div>

                                <figure class="product-image-container">
                                    <a href="#" class="product-image">
                                        <img src="{{ asset('assets/images/products/cart/product-2.jpg') }}" alt="product">
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                            </div>
                        </div>

                        <div class="dropdown-cart-total">
                            <span>Total</span>

                            <span class="cart-total-price">$160.00</span>
                        </div>

                        <div class="dropdown-cart-action">
                            <a href="{{ route('cart.index') }}" class="btn btn-primary">View Cart</a>
                            <a href="{{ route('checkout.index') }}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

