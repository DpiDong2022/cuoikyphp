@extends('layouts.base')
@section('content')
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="category.html">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <table class="table table-cart table-mobile">
                            <thead>
                                <tr>
                                    <th>Product</th>                                  
                                    <th>Storage</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody id="cart">
                                @foreach($invoiceDetails as $value )
                                <tr>
                                    <td class="product-col">
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{ $value->varient->product->image }}" alt="Product image">
                                                </a>
                                            </figure>

                                            <h3 class="product-title">
                                                <a href="#">{{ $value->varient->product -> name }}</a>
                                            </h3><!-- End .product-title -->
                                        </div><!-- End .product -->
                                    </td>
                                    <td class="price-col">{{ $value->varient->storage }}</td>
                                    <td class="price-col">{{ $value->varient->product-> price }}</td>
                                    <td class="quantity-col">
                                        <div class="cart-product-quantity">
                                            @php
                                                $quantity =  $value -> quantity ; // Số lượng sản phẩm, bạn cần thay đổi giá trị này theo số lượng người dùng chọn
                                            @endphp
                                            <input type="number" class="form-control" value="{{ $quantity }}" min="1" max="50" step="1" data-decimals="0" required>
                                        </div><!-- End .cart-product-quantity -->
                                    </td>
                                    <td class="total-col">${{ $value->varient->product-> price * $quantity }}</td>
                                    <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table><!-- End .table table-wishlist -->

                        <div class="cart-bottom">
                            <div class="cart-discount">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control" required placeholder="coupon code">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
                                        </div><!-- .End .input-group-append -->
                                    </div><!-- End .input-group -->
                                </form>
                            </div><!-- End .cart-discount -->

                            <a href="#" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i class="icon-refresh"></i></a>
                            <a href="#" class="btn btn-outline-dark-2"><span>REMOVE CART</span><i class="icon-remove"></i></a>
                        </div><!-- End .cart-bottom -->
                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3">
                        <div class="summary summary-cart">
                            <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                            <table class="table table-summary">
                                <tbody>
                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td id="summary-subtotal">{{ $total }}</td>
                                    </tr><!-- End .summary-subtotal -->
                                    <tr class="summary-shipping">
                                        <td>Shipping:</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
                                                <label class="custom-control-label" for="free-shipping">Free Shipping</label>
                                            </div><!-- End .custom-control -->
                                        </td>
                                        <td>$0.00</td>
                                    </tr><!-- End .summary-shipping-row -->

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="standart-shipping" name="shipping" class="custom-control-input">
                                                <label class="custom-control-label" for="standart-shipping">Standart:</label>
                                            </div><!-- End .custom-control -->
                                        </td>
                                        <td>$10.00</td>
                                    </tr><!-- End .summary-shipping-row -->

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
                                                <label class="custom-control-label" for="express-shipping">Express:</label>
                                            </div><!-- End .custom-control -->
                                        </td>
                                        <td>$20.00</td>
                                    </tr><!-- End .summary-shipping-row -->

                                    <tr class="summary-shipping-estimate">
                                        <td>Estimate for Your Country<br> <a href="dashboard.html">Change address</a></td>
                                        <td>&nbsp;</td>
                                    </tr><!-- End .summary-shipping-estimate -->

                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td id="summary-total">{{ $total }}</td>
                                    </tr><!-- End .summary-total -->
                                </tbody>
                            </table><!-- End .table table-summary -->

                            <a href="{{ route('checkout') }}" class="btn btn-outline-primary-2 btn-order btn-block" id="btn-checkout">PROCEED TO CHECKOUT</a>
                        </div><!-- End .summary -->

                        <a href="{{ route('public.product.index') }}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cart -->
    </div><!-- End .page-content -->
</main>
@endsection