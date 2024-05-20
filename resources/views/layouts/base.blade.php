<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Techolic - Best High-Tech Store</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/icons/logo-icon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/icons/logo-icon.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/icons/site.html') }}">
    <link rel="mask-icon" href="{{ asset('assets/images/icons/safari-pinned-tab.svg') }}" color="#666666">
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/logo-icon.png') }}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery.countdown.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-demo-3.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demos/demo-3.css') }}">

    @stack('styles')
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-intro-clearance header-3">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <a href="tel:#"><i class="icon-phone"></i>Call: +0917199868</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>

                                <ul>
                                    @if (session('user'))
                                        <li>Người dùng: {{ session('user')->name }}</li>
                                        <li><a href="{{ route('publicLogout') }}">Logout</a></li>
                                    @else
                                        <li><a href="{{ route('publicLogin') }}">Sign in</a></li>
                                        <li><a href="{{ route('publicRegister') }}">Sign up</a></li>
                                    @endif


                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->

                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="{{ route('public.index') }}" class="logo">
                            <img src="{{ asset('assets/images/demos/demo-3/logo.png') }}" alt="Techolic Logo"
                                width="170" height="24">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="{{route('public.product.index')}}" method="POST">
                                @csrf
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                    <input type="search" class="form-control" name="q" id="q"
                                        placeholder="Search product ..." value="
                                        @if(isset($query))
                                            {{$query}}
                                        @endif">
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

                    <div class="header-right">
                        <div class="dropdown compare-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-display="static"
                                title="Compare Products" aria-label="Compare Products">
                                <div class="icon">
                                    <i class="icon-random"></i>
                                </div>
                                <p>Compare</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="compare-products">
                                    <li class="compare-product">
                                        <a href="#" class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="product.html">iPhone 14 Pro</a>
                                        </h4>
                                    </li>
                                    <li class="compare-product">
                                        <a href="#" class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="productIphone15.html">iPhone 15</a>
                                        </h4>
                                    </li>
                                </ul>

                                <div class="compare-actions">
                                    <a href="#" class="action-link">Clear All</a>
                                    <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i
                                            class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .compare-dropdown -->

                        <div class="wishlist">
                            <a href="wishlist.html" title="Wishlist">
                                <div class="icon">
                                    <i class="icon-heart-o"></i>
                                    <span class="wishlist-count badge">3</span>
                                </div>
                                <p>Wishlist</p>
                            </a>
                        </div><!-- End .compare-dropdown -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-display="static">
                                <div class="icon">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count">2</span>
                                </div>
                                <p>Cart</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Samsung Galaxy Z Flip 4</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $899.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/samsung/samsunggalaxyzflipxam4.webp"
                                                    alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Samsung Galaxy Z Flip 5</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $990.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/samsung/samsung-galaxy-z-flip5-tim-4.webp"
                                                    alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price" id="cart-total-price">$1599.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="{{ route('cart.index') }}" class="btn btn-primary">View Cart</a>
                                    <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                                
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <div class="dropdown category-dropdown">
                            {{-- <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                                Browse Categories <i class="icon-angle-down"></i>
                            </a> --}}

                           <!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="{{ route('public.index') }}" class="sf-with-ul" id="sf-with-ul-home">HOME</a>
                                </li>
                                <li>
                                    <a href="{{ route('public.product.index') }}" class="sf-with-ul">SHOP</a>

                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Smartphones</div>
                                                            <!-- End .menu-title -->
                                                            <ul>

                                                                @foreach ($category as $value)
                                                                    {{-- <li><a href="{{ URL::to('/category/'.$value->id) }}"><span>{{ $value->name }}<span ></span></span></a></li> --}}
                                                                    <li><a
                                                                            href="{{ route('category', ['slug' => $value->id]) }}"><span>{{ $value->name }}<span></span></span></a>
                                                                    </li>

                                                                    {{-- <li><a href="#">{{ $value-> name }}</a></li> --}}
                                                                @endforeach
                                                            </ul>


                                                        </div><!-- End .col-md-6 -->


                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html" class="banner banner-menu">
                                                        <img src="{{ asset('assets/images/menu/banner-1.jpg') }}" alt="Banner">

                                                        <div class="banner-content banner-content-top">
                                                            <div class="banner-title text-white">Last
                                                                <br>Chance<br><span><strong>Sale</strong></span>
                                                            </div>
                                                            <!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-md -->
                                </li>

                                <li>
                                    <a href="#" class="sf-with-ul">PAGES</a>

                                    <ul>
                                        <li>
                                            <a href="about.html" class="sf-with-ul" id="About">About</a>
                                        </li>
                                        <li>
                                            <a href="contact.html" class="sf-with-ul" id="Contact">Contact</a>
                                        </li>
                                        <li><a href="{{ route('publicLogin') }}">Login</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="coming-soon.html">Comming Soon</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}" class="sf-with-ul" id="sf-with-ul-blog">BLOG</a>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->

                    <div class="header-right">
                        <i class="la la-lightbulb-o"></i>
                        <p>Clearance<span class="highlight">&nbsp;Up to 30% Off</span></p>
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->

        @yield('content')

        <footer class="footer">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget widget-about">
                                <img src="{{ asset('assets/images/demos/demo-3/logo-footer.png') }}"
                                    class="footer-logo" alt="Footer Logo" width="170" height="25">

                                <div class="widget-call">
                                    <i class="icon-phone"></i>
                                    Got Question? Call us 24/7
                                    <a href="tel:#">+08494 862 622</a>
                                </div><!-- End .widget-call -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="{{ route('about') }}">About Techolic</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">How to shop on Techolic</a></li>
                                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Money-back guarantee!</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="{{ route('publicLogin') }}">Sign In</a></li>
                                    <li><a href="{{ route('publicRegister') }}">Sign Up</a></li>
	            					<li><a href="{{ route('cart.index') }}">View Cart</a></li>
	            					<li><a href="#">Help</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright © 2024 Techolic Store. All Rights Reserved.</p>
                    <!-- End .footer-copyright -->
                    <figure class="footer-payments">
                        <img src="{{ asset('assets/images/payments.png') }}" alt="Payment methods" width="272"
                            height="20">
                    </figure><!-- End .footer-payments -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                    placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab"
                        role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab"
                        role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel"
                    aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="index.html">Home</a>


                            </li>
                            <li>
                                <a href="{{ route('public.product.index') }}">Shop</a>
                                <ul>
                                    @foreach ($category as $value)
                                                                    {{-- <li><a href="{{ URL::to('/category/'.$value->id) }}"><span>{{ $value->name }}<span ></span></span></a></li> --}}
                                                                    <li><a
                                                                            href="{{ route('category', ['slug' => $value->id]) }}"><span>{{ $value->name }}<span></span></span></a>
                                                                    </li>

                                                                    {{-- <li><a href="#">{{ $value-> name }}</a></li> --}}
                                                                @endforeach
                                    {{-- <li><a href="productIphone15.html">iPhone 15 Pro Max</a></li> --}}

                                </ul>
                            </li>



                            <li>
                                <a href="#">PAGES</a>
                                <ul>
                                    <li>
                                        <a href="{{ route('about') }}">About</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>


                                    <li><a href="{{ route('publicLogin') }}">Sign In</a></li>
                                    <li><a href="{{ route('publicRegister') }}">Sign Up</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="{{ route('cart.index') }}">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}">Blog</a>
                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">

                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i
                        class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i
                        class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i
                        class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i
                        class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->




    <!-- Plugins JS File -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/superfish.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-input-spinner.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function() {
    var selectedVariantId;

    $('.color-link').on('click', function(e) {
        e.preventDefault();
        $('.color-link').removeClass('active');
        $(this).addClass('active');

        // Lấy ID của variant
        selectedVariantId = $(this).data('id');
        console.log('Selected color variant ID: ' + selectedVariantId);
    });

    $('#size').on('change', function() {
        // Lấy ID của variant
        selectedVariantId = $(this).val();
        console.log('Selected size variant ID: ' + selectedVariantId);
    });


});
</script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/demos/demo-3.js') }}"></script>
    <script src="{{ asset('assets/js/cart.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    @stack('js')
</body>


<!-- molla/index-3.html  22 Nov 2019 09:55:58 GMT -->

</html>
