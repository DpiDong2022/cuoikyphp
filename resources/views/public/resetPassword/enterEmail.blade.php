@extends('layouts.base')
@section('content')

    <body>
        <div class="page-wrapper">
            <main class="main">
                <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
                        </ol>
                    </div><!-- End .container -->
                </nav><!-- End .breadcrumb-nav -->

                <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17"
                    style="background-image: url('assets/images/phones.jpg');">
                    <div class="container">
                        <div class="form-box">
                            <div class="form-tab">
                                <ul class="nav nav-pills nav-fill" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2"
                                            role="tab" aria-controls="register-2" aria-selected="true">Reset password</a>
                                    </li>
                                </ul>
                                @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif
                                @if (session('errors'))
                                    @foreach (session('errors') as $item)
                                        <div class="alert alert-danger">{{ $item }}</div>
                                    @endforeach
                                @endif
                                <div class="tab-content">

                                    <div class="tab-pane fade show active" id="register-2" role="tabpanel"
                                        aria-labelledby="register-tab-2">
                                        <form action="{{route('reset.sendToken')}}" method = "POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="register-email-2">Your email address *</label>
                                                <input type="email" class="form-control" id="register-email-2"
                                                    name="email" value ="phungdaidong1114@gmail.com" required>
                                            </div><!-- End .form-group -->
                                            <div class="form-footer">
                                                <button type="submit" class="btn btn-outline-primary-2">
                                                    <span>CONTINUE</span>
                                                    <i class="icon-long-arrow-right"></i>
                                                </button>

                                                {{-- <div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="register-policy-2" required>
												<label class="custom-control-label" for="register-policy-2">I agree to the <a href="#">privacy policy</a> *</label>
											</div><!-- End .custom-checkbox --> --}}
                                            </div><!-- End .form-footer -->
                                        </form>
                                    </div><!-- .End .tab-pane -->
                                </div><!-- End .tab-content -->
                            </div><!-- End .form-tab -->
                        </div><!-- End .form-box -->
                    </div><!-- End .container -->
                </div><!-- End .login-page section-bg -->
            </main><!-- End .main -->

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

                <nav class="mobile-nav">
                    <ul class="mobile-menu">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">
                            <a href="category.html">Shop</a>
                            <ul>
                                <li><a href="productIphone15.html">iPhone 15 Pro Max</a></li>
                                <li><a href="#">Pixel 7a</a></li>
                                <li><a href="productMacbookPro14.html">Macbook Air M3</a></li>
                                <li><a href="#">Asus Zenfones 11</a></li>
                                <li><a href="#"><span>iPhone 11<span class="tip tip-hot">Hot</span></span></a></li>
                                <li><a href="#">Asus ROG Phone 5</a></li>
                                <li><a href="productSamsungGalaxyFold5.html">Samsung Galaxy Z Fold 5</a></li>
                                <li><a href="#"><span>Samsung Galaxy s24 Ultra<span
                                                class="tip tip-new">New</span></span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="category.html" class="sf-with-ul">ACCESSORIES</a>
                            <ul>
                                <li><a href="category.html">Smartphones</a></li>
                                <li><a href="#"><span>Tablets<span class="tip tip-new">New</span></span></a></li>
                                <li><a href="#">Earphones and Headphones</a></li>
                                <li><a href="#">Phone Cases</a></li>
                                <li><a href="#">Screen Protector</a></li>
                                <li><a href="#">Controllers</a></li>
                                <li><a href="#">Consoles</a></li>
                                <li><a href="#">Keyboards</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">PAGES</a>
                            <ul>
                                <li>
                                    <a href="about.html">About</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>

                        </li>
                    </ul>
                </nav><!-- End .mobile-nav -->

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

        <!-- Sign in / Register Modal -->
        <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="icon-close"></i></span>
                        </button>

                        <div class="form-box">
                            <div class="form-tab">
                                <ul class="nav nav-pills nav-fill" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin"
                                            role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register"
                                            role="tab" aria-controls="register" aria-selected="false">Register</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="tab-content-5">
                                    <div class="tab-pane fade show active" id="signin" role="tabpanel"
                                        aria-labelledby="signin-tab">
                                        <form action="#">
                                            <div class="form-group">
                                                <label for="singin-email">Username or email address *</label>
                                                <input type="text" class="form-control" id="singin-email"
                                                    name="singin-email" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="singin-password">Password *</label>
                                                <input type="password" class="form-control" id="singin-password"
                                                    name="singin-password" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-footer">
                                                <button type="submit" class="btn btn-outline-primary-2">
                                                    <span>LOG IN</span>
                                                    <i class="icon-long-arrow-right"></i>
                                                </button>

                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="signin-remember">
                                                    <label class="custom-control-label" for="signin-remember">Remember
                                                        Me</label>
                                                </div><!-- End .custom-checkbox -->

                                                <a href="#" class="forgot-link">Forgot Your Password?</a>
                                            </div><!-- End .form-footer -->
                                        </form>
                                        <div class="form-choice">
                                            <p class="text-center">or sign in with</p>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-login btn-g">
                                                        <i class="icon-google"></i>
                                                        Login With Google
                                                    </a>
                                                </div><!-- End .col-6 -->
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-login btn-f">
                                                        <i class="icon-facebook-f"></i>
                                                        Login With Facebook
                                                    </a>
                                                </div><!-- End .col-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .form-choice -->
                                    </div><!-- .End .tab-pane -->
                                    <div class="tab-pane fade" id="register" role="tabpanel"
                                        aria-labelledby="register-tab">
                                        <form action="#">
                                            <div class="form-group">
                                                <label for="register-email">Your email address *</label>
                                                <input type="email" class="form-control" id="register-email"
                                                    name="register-email" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="register-password">Password *</label>
                                                <input type="password" class="form-control" id="register-password"
                                                    name="register-password" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-footer">
                                                <button type="submit" class="btn btn-outline-primary-2">
                                                    <span>CONTINUE</span>
                                                    <i class="icon-long-arrow-right"></i>
                                                </button>

                                                {{-- <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox --> --}}
                                            </div><!-- End .form-footer -->
                                        </form>
                                        <div class="form-choice">
                                            <p class="text-center">or sign in with</p>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-login btn-g">
                                                        <i class="icon-google"></i>
                                                        Login With Google
                                                    </a>
                                                </div><!-- End .col-6 -->
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-login  btn-f">
                                                        <i class="icon-facebook-f"></i>
                                                        Login With Facebook
                                                    </a>
                                                </div><!-- End .col-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .form-choice -->
                                    </div><!-- .End .tab-pane -->
                                </div><!-- End .tab-content -->
                            </div><!-- End .form-tab -->
                        </div><!-- End .form-box -->
                    </div><!-- End .modal-body -->
                </div><!-- End .modal-content -->
            </div><!-- End .modal-dialog -->
        </div><!-- End .modal -->

    </body>
@endsection
