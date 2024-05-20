@extends('layouts.base')
@section('content')
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Blog About Technology<span>Blog</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Blog</a></li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <nav class="blog-nav">
                <ul class="menu-cat entry-filter justify-content-center">
                    <li class="active"><a href="#" data-filter="*">All Blog Posts<span>9</span></a></li>
                    <li><a href="#" data-filter=".lifestyle">Smartphone<span>3</span></a></li>
                    <li><a href="#" data-filter=".shopping">Laptop<span>1</span></a></li>
                    <li><a href="#" data-filter=".fashion">Technology<span>2</span></a></li>
                    <li><a href="#" data-filter=".travel">Trending<span>4</span></a></li>
                </ul><!-- End .blog-menu -->
            </nav><!-- End .blog-nav -->

            <div class="entry-container" data-layout="fitRows">
                <div class="rowBlog" id="rootBlog">
                    <div class="entry-item lifestyle shopping col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media">
                                <a href="single-blog.html">
                                    <img src="assets/images/laptop/macbookpro2021.webp" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">Dec 22, 2023</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">2 Comments</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title">
                                    <a href="single-blog.html">Compare Macbook Pro 2022 vs Macbook Pro 2023</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in <a href="#">Macbook</a>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item lifestyle col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media entry-video">
                                <a href="single-blog.html">
                                    <img src="assets/images/samsung/samsungfold5post.webp" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">Nov 21, 2023</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">16 Comments</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title">
                                    <a href="#">Samsung Galaxy Z Fold 5</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in <a href="#">Smartphone</a>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item lifestyle fashion col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media entry-gallery">
                                <a href="#">
                                    <img src="assets/images/samsung/71xbuszbeal.webp" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">Nov 24, 2023</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">3 Comments</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title">
                                    <a href="#">What new in Samsung Galaxy Z Fold 5 2023</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in <a href="#">Trending</a>,
                                    <a href="#">Samsung</a>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item travel col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media">
                                <a href="#">
                                    <img src="assets/images/samsung/s23-ultra-xanh.webp" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">Nov 15, 2023</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">4 Comments</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title">
                                    <a href="#">Is it worthwhile to experience the S23 Ultra ?</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in <a href="#">Trending</a>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item travel hobbies col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media">
                                <a href="#">
                                    <img src="assets/images/smartwatch/apple-watch-ultra-2-49mm-4g_1_.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">Nov 11, 2023</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">5 Comments</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title">
                                    <a href="#">New features of Apple Watch Ultra 2.</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in <a href="#">Trending</a>,
                                    <br><a href="#">Apple</a>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item hobbies col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media">
                                <a href="#">
                                    <img src="assets/images/smartwatch/1_568.webp" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">Nov 10, 2022</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">4 Comments</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title">
                                    <a href="#">Samsung Galaxy Watch SE and what I don't like</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in <a href="#">Smartwatch</a>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item travel col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media entry-gallery">
                                <a href="#">
                                    <img src="assets/images/laptop/dellXPS13_12.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">Nov 11, 2023</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">3 Comments</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title">
                                    <a href="#">Dell XPS 13 borderless 4K screen, 8th generation Intel Core chip</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in <a href="#">Trending</a>,
                                    <a href="#">Laptop</a>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item fashion col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media">
                                <a href="#">
                                    <img src="assets/images/laptop/dellXPS13_11.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">Jan 01, 2024</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">0 Comments</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title">
                                    <a href="#">Laptop Dell XPS 13 and new features</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in <a href="#">Laptop</a>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->

                    <div class="entry-item travel col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media">
                                <a href="#">
                                    <img src="assets/images/tablet/camIpad.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">Nov 07, 2023</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">5 Comments</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title">
                                    <a href="#">Center Stage is still a great feature</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in <a href="#">Trending</a>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->
                </div><!-- End .entry-container -->
            </div>
            
                

            <div class="mb-3"></div><!-- End .mb-3 -->

            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                            <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                        </a>
                    </li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item">
                        <a class="page-link page-link-next" href="#" aria-label="Next">
                            Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection