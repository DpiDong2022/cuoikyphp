@extends('layouts.base')
@section('content')
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">F.A.Q<span>Pages</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <h2 class="title text-center mb-3">Shipping Information</h2><!-- End .title -->
            <div class="accordion accordion-rounded" id="accordion-1">
                <div class="card card-box card-sm bg-light">
                    <div class="card-header" id="heading-1">
                        <h2 class="card-title">
                            <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                How will my parcel be delivered?
                            </a>
                        </h2>
                    </div><!-- End .card-header -->
                    <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-1">
                        <div class="card-body">
                            Your parcel will be delivered through our trusted shipping partners, ensuring safe and timely delivery. You will receive a tracking number once your order is dispatched, allowing you to monitor its progress.
                        </div><!-- End .card-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .card -->

                <div class="card card-box card-sm bg-light">
                    <div class="card-header" id="heading-2">
                        <h2 class="card-title">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                Do I pay for delivery?
                            </a>
                        </h2>
                    </div><!-- End .card-header -->
                    <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-1">
                        <div class="card-body">
                            The shipping costs depend on your location and the selected shipping method. You can view the shipping charges during the checkout process before making your payment.
                        </div><!-- End .card-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .card -->

                <div class="card card-box card-sm bg-light">
                    <div class="card-header" id="heading-3">
                        <h2 class="card-title">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                Will I be charged customs fees?
                            </a>
                        </h2>
                    </div><!-- End .card-header -->
                    <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-1">
                        <div class="card-body">
                            Customs fees may apply depending on your country's regulations. Any applicable customs charges are the responsibility of the customer. We recommend checking with your local customs office for more information.					            </div><!-- End .card-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .card -->

                <div class="card card-box card-sm bg-light">
                    <div class="card-header" id="heading-4">
                        <h2 class="card-title">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                My item has become faulty
                            </a>
                        </h2>
                    </div><!-- End .card-header -->
                    <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-1">
                        <div class="card-body">
                            We apologize for any inconvenience. Please contact our customer support with your order details and a description of the issue. We will assist you in resolving the problem, whether through a replacement, repair, or refund.					            </div><!-- End .card-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .card -->
            </div><!-- End .accordion -->

            <h2 class="title text-center mb-3">Orders and Returns</h2><!-- End .title -->
            <div class="accordion accordion-rounded" id="accordion-2">
                <div class="card card-box card-sm bg-light">
                    <div class="card-header" id="heading2-1">
                        <h2 class="card-title">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse2-1" aria-expanded="false" aria-controls="collapse2-1">
                                Tracking my order
                            </a>
                        </h2>
                    </div><!-- End .card-header -->
                    <div id="collapse2-1" class="collapse" aria-labelledby="heading2-1" data-parent="#accordion-2">
                        <div class="card-body">
                            To track your order, log in to your account and navigate to the "Order History" section. There, you will find the tracking information for your parcel. You can also use the provided tracking number on the shipping carrier's website.					            </div><!-- End .card-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .card -->

                <div class="card card-box card-sm bg-light">
                    <div class="card-header" id="heading2-2">
                        <h2 class="card-title">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse2-2" aria-expanded="false" aria-controls="collapse2-2">
                                I haven’t received my order
                            </a>
                        </h2>
                    </div><!-- End .card-header -->
                    <div id="collapse2-2" class="collapse" aria-labelledby="heading2-2" data-parent="#accordion-2">
                        <div class="card-body">
                            If you haven't received your order within the specified delivery time, please check the tracking information first. If there are any concerns, contact our customer support with your order number, and we will investigate and assist you accordingly.					            </div><!-- End .card-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .card -->

                <div class="card card-box card-sm bg-light">
                    <div class="card-header" id="heading2-3">
                        <h2 class="card-title">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse2-3" aria-expanded="false" aria-controls="collapse2-3">
                                How can I return an item?
                            </a>
                        </h2>
                    </div><!-- End .card-header -->
                    <div id="collapse2-3" class="collapse" aria-labelledby="heading2-3" data-parent="#accordion-2">
                        <div class="card-body">
                            To return an item, visit our "Returns" page on the website. Follow the instructions to initiate the return process. Make sure to carefully read our return policy for eligibility and further details.					            </div><!-- End .card-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .card -->
            </div><!-- End .accordion -->

            <h2 class="title text-center mb-3">Payments</h2><!-- End .title -->
            <div class="accordion accordion-rounded" id="accordion-3">
                <div class="card card-box card-sm bg-light">
                    <div class="card-header" id="heading3-1">
                        <h2 class="card-title">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse3-1" aria-expanded="false" aria-controls="collapse3-1">
                                What payment types can I use?
                            </a>
                        </h2>
                    </div><!-- End .card-header -->
                    <div id="collapse3-1" class="collapse" aria-labelledby="heading3-1" data-parent="#accordion-3">
                        <div class="card-body">
                            We accept various payment methods, including credit/debit cards, PayPal, and other secure payment gateways. You can view the available payment options during the checkout process.					            </div><!-- End .card-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .card -->

                <div class="card card-box card-sm bg-light">
                    <div class="card-header" id="heading3-2">
                        <h2 class="card-title">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse3-2" aria-expanded="false" aria-controls="collapse3-2">
                                Can I pay by Gift Card?
                            </a>
                        </h2>
                    </div><!-- End .card-header -->
                    <div id="collapse3-2" class="collapse" aria-labelledby="heading3-2" data-parent="#accordion-3">
                        <div class="card-body">
                            Yes, you can use gift cards as a payment method during the checkout process. Enter the gift card code at the designated field to apply it to your order.					            </div><!-- End .card-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .card -->

                <div class="card card-box card-sm bg-light">
                    <div class="card-header" id="heading3-3">
                        <h2 class="card-title">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse3-3" aria-expanded="false" aria-controls="collapse3-3">
                                I can't make a payment
                            </a>
                        </h2>
                    </div><!-- End .card-header -->
                    <div id="collapse3-3" class="collapse" aria-labelledby="heading3-3" data-parent="#accordion-3">
                        <div class="card-body">
                            If you are experiencing payment issues, ensure that your payment information is entered correctly. If the problem persists, contact your payment provider or try an alternative payment method.					            </div><!-- End .card-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .card -->

                <div class="card card-box card-sm bg-light">
                    <div class="card-header" id="heading3-4">
                        <h2 class="card-title">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse3-4" aria-expanded="false" aria-controls="collapse3-4">
                                Has my payment gone through?
                            </a>
                        </h2>
                    </div><!-- End .card-header -->
                    <div id="collapse3-4" class="collapse" aria-labelledby="heading3-4" data-parent="#accordion-3">
                        <div class="card-body">
                            You will receive an email confirmation once your payment has been successfully processed. If you haven't received confirmation, check your spam folder or contact our customer support for assistance.					            </div><!-- End .card-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .card -->
            </div><!-- End .accordion -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->

    <div class="cta cta-display bg-image pt-4 pb-4" style="background-image: url(assets/images/backgrounds/cta/bg-7.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9 col-xl-7">
                    <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                        <div class="col">
                            <h3 class="cta-title text-white">If You Have More Questions</h3><!-- End .cta-title -->
                        </div><!-- End .col -->

                        <div class="col-auto">
                            <a href="contact.html" class="btn btn-outline-white"><span>CONTACT US</span><i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .col-auto -->
                    </div><!-- End .row no-gutters -->
                </div><!-- End .col-md-10 col-lg-9 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .cta -->
</main><!-- End .main -->
@endsection