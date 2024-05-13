<header class="header header-intro-clearance header-3">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <a href="tel:#"><i class="fa fa-phone"></i>Call: +0394 862 622</a>
            </div><!-- End .header-left -->

            <div class="header-right">

                <ul class="top-menu">
                    <li>
                        <a href="#">USD</a>
                        <ul>
                            <li>
                                <div class="header-dropdown">
                                    <a href="#">English<i class="ml-3 fa fa-caret-down"></i></a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Vietnamese</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div>
                            </li>
                            <li><a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a></li>
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

                <a href="\" class="logo">
                    <img src="{{URL('images\public\logo.png')}}" alt="Techolic Logo" width="170" height="24">
                </a>
            </div><!-- End .header-left -->

            <div class="header-center">
                <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper search-wrapper-wide">
                            <label for="q" class="sr-only">Search</label>
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                            <input type="search" class="form-control" name="q" id="q"
                                placeholder="Search product ..." required>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->
            </div>

            <div class="header-right">
                {{-- <div class="dropdown compare-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" data-display="static" title="Compare Products"
                        aria-label="Compare Products">
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
                                <h4 class="compare-product-title"><a href="product.html">iPhone 14 Pro</a></h4>
                            </li>
                            <li class="compare-product">
                                <a href="#" class="btn-remove" title="Remove Product"><i
                                        class="icon-close"></i></a>
                                <h4 class="compare-product-title"><a href="productIphone15.html">iPhone 15</a></h4>
                            </li>
                        </ul>

                        <div class="compare-actions">
                            <a href="#" class="action-link">Clear All</a>
                            <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i
                                    class="icon-long-arrow-right"></i></a>
                        </div>
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .compare-dropdown --> --}}

                <div class="wishlist">
                    <a href="wishlist.html" title="Wishlist">
                        <div class="icon">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                            <span class="wishlist-count badge">3</span>
                        </div>
                        <p>Wishlist</p>
                    </a>
                </div><!-- End .compare-dropdown -->

                <div class="dropdown cart-dropdown" style="position: relative;">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" data-display="static">
                        <div class="icon">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span class="cart-count">2</span>
                        </div>
                        <p>Cart</p>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" style="position: absolute; top:110px;">
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
                                        <img src="assets/images/samsung/samsunggalaxyzflipxam4.webp" alt="product">
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
                            <a href="/cart" class="btn btn-primary">View Cart</a>
                            <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i
                                    class="icon-long-arrow-right"></i></a>
                        </div><!-- End .dropdown-cart-total -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .cart-dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header">
        <div class="container">
            <div class="header-left">
                <div class="dropdown category-dropdown" style="position:relative">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                        Browse Categories <i style="font-size: 15px;" class="fa fa-caret-down"></i>
                    </a>

                    <div class="dropdown-menu" style="position:absolute; top:55px;">
                        <nav class="side-nav">
                            <ul class="menu-vertical sf-arrows">
                                <li class="item-lead"><a href="#">Daily offers</a></li>
                                <li class="item-lead"><a href="#">Gift Ideas</a></li>
                                <li><a href="#">Smartphones</a></li>
                                <li><a href="#">Laptops</a></li>
                                <li><a href="#">Consoles</a></li>
                                <li><a href="#">Storage</a></li>
                                <li><a href="#">Earphones and Headphones</a></li>
                                <li><a href="#">Phone Cases</a></li>
                                <li><a href="#">Controllers</a></li>
                                <li><a href="#">Mouses</a></li>
                                <li><a href="#">Keyboards</a></li>
                            </ul><!-- End .menu-vertical -->
                        </nav><!-- End .side-nav -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .category-dropdown -->
            </div><!-- End .header-left -->

            <div class="header-center">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container active">
                            <a href="\" class="sf-with-ul" id="sf-with-ul-home">HOME</a>
                        </li>
                        <li>
                            <a href="category.html" class="sf-with-ul">SHOP</a>

                            <div class="megamenu megamenu-md">
                                <div class="row no-gutters">
                                    <div class="col-md-8">
                                        <div class="menu-col">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="menu-title">Smartphones</div><!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="productIphone15.html"><span>iPhone 15 Pro Max<span
                                                                        class="tip tip-hot">Hot</span></span></a></li>
                                                        <li><a href="coming-soon.html"><span>Samsung Galaxy S24
                                                                    Ultra<span
                                                                        class="tip tip-new">New</span></span></a></li>
                                                        <li><a href="productSamsungGalaxyFold5.html">Samsung Galaxy Z
                                                                Fold 5</a></li>
                                                        <li><a href="category.html">Google Pixel Fold</a></li>
                                                        <li><a href="category.html">Google Pixel 8 Pro</a></li>
                                                    </ul>

                                                    <div class="menu-title">Earphones</div><!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="productAirPod.html"><span>Apple Airpod Pro (Gen
                                                                    2)<span class="tip tip-hot">Hot</span></span></a>
                                                        </li>
                                                        <li><a href="category.html">Galaxy Buds 2 Pro</a></li>
                                                    </ul>
                                                </div><!-- End .col-md-6 -->

                                                <div class="col-md-6">
                                                    <div class="menu-title">Smartwatches</div><!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="category.html">Apple Watch Series 9</a></li>
                                                        <li><a href="category.html"><span>Galaxy Watch Active 2<span
                                                                        class="tip tip-new">New</span></span></a></li>
                                                    </ul>
                                                    <div class="menu-title">Shop Pages</div><!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="dashboard.html">My Account</a></li>
                                                    </ul>
                                                </div><!-- End .col-md-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .col-md-8 -->

                                    <div class="col-md-4">
                                        <div class="banner banner-overlay">
                                            <a href="category.html" class="banner banner-menu">
                                                <img src="{{URL('images/public/menu/banner-1.jpg')}}" alt="Banner">

                                                <div class="banner-content banner-content-top">
                                                    <div class="banner-title text-white">Last
                                                        <br>Chance<br><span><strong>Sale</strong></span></div>
                                                    <!-- End .banner-title -->
                                                </div><!-- End .banner-content -->
                                            </a>
                                        </div><!-- End .banner banner-overlay -->
                                    </div><!-- End .col-md-4 -->
                                </div><!-- End .row -->
                            </div><!-- End .megamenu megamenu-md -->
                        </li>
                        <li>
                            <a href="category.html" class="sf-with-ul">POPULAR</a>
                            <div class="megamenu megamenu-sm">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="menu-col">
                                            <div class="menu-title">Products</div><!-- End .menu-title -->
                                            <ul>
                                                <li><a href="productIphone15.html">iPhone 15 Pro Max</a></li>
                                                <li><a href="#">iPhone 11</a></li>
                                                <li><a href="coming-soon.html"><span>Samsung Galaxy S24 Ultra<span
                                                                class="tip tip-new">New</span></span></a></li>
                                                <li><a href="#">Pixel 7a</a></li>
                                                <li><a href="#">Asus Zenfones 11</a></li>
                                                <li><a href="#">Macbook Pro M3</a></li>
                                                <li><a href="#">Asus Zephyrus M16 2024</a></li>
                                            </ul>
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="banner banner-overlay">
                                            <a href="category.html">
                                                <img src="{{URL('images\public\menu\banner-2.jpg')}}" alt="Banner2">

                                                <div class="banner-content banner-content-bottom">
                                                    <div class="banner-title text-white">New
                                                        Trends<br><span><strong>spring 2019</strong></span></div>
                                                    <!-- End .banner-title -->
                                                </div><!-- End .banner-content -->
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .megamenu megamenu-sm -->
                        </li>
                        <li>
                            <a href="#" class="sf-with-ul">ACCESSORIES</a>

                            <div class="megamenu megamenu-sm">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="menu-col">
                                            <div class="menu-title">Product Details</div><!-- End .menu-title -->
                                            <ul>
                                                <li><a href="productAirPod.html">Earphones</a></li>
                                                <li><a href="#">Consoles</a></li>
                                                <li><a href="#"><span>Headphones<span
                                                                class="tip tip-new">New</span></span></a></li>
                                                <li><a href="#">Cases</a></li>
                                                <li><a href="#">Screen Protector</a></li>
                                                <li><a href="#">Other Accessories</a></li>
                                            </ul>
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="banner banner-overlay">
                                            <a href="category.html">
                                                <img src="{{URL('images\public\menu\banner-2.jpg')}}" alt="Banner">

                                                <div class="banner-content banner-content-bottom">
                                                    <div class="banner-title text-white">New
                                                        Trends<br><span><strong>spring 2019</strong></span></div>
                                                    <!-- End .banner-title -->
                                                </div><!-- End .banner-content -->
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .megamenu megamenu-sm -->
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
                                <li><a href="login.html">Login</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                                <li><a href="coming-soon.html">Comming Soon</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.html" class="sf-with-ul" id="sf-with-ul-blog">BLOG</a>
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
