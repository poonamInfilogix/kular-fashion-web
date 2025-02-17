@extends('layouts.app')
@section('content')
    @push('head')
        <link rel="stylesheet" href="{{ asset('assets/css/checkout.css') }}">
    @endpush

    <style>
        .btn-link {
            color: #eeeef5 !important;
        }

        .checkout textarea.form-control {
            min-height: 79px !important;
        }
    </style>
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Checkout<span>Shop</span></h1>
        </div>
    </div>
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div>
    </nav>

    <div class="page-content">
        <div class="checkout">
            <div class="container">
                <div class="row">
                    <!-- Accordion Section -->
                    <div class="col-md-8">
                        <div id="checkoutAccordion">

                            <!-- Login / Register Section -->
                            <div class="card step my-2">
                                <div class="card-header" id="headingLogin">
                                    <h5 class="mb-0">
                                        <button class="btn" type="button" data-toggle="collapse"
                                            data-target="#collapseLogin" aria-expanded="true" aria-controls="collapseLogin">
                                            Login / Register
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseLogin" class="collapse show" aria-labelledby="headingLogin"
                                    data-parent="#checkoutAccordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <form action="#">
                                                    @csrf
                                                    <label for="email" class="form-label">Enter Email/Mobile
                                                        number</label>
                                                    <input type="email" class="form-control" id="email"
                                                        name="email">
                                                    <button type="submit" class="btn btn-primary"
                                                        id="continueButton">CONTINUE</button>
                                                </form>
                                                <p class="mt-3">By continuing, you agree to Flipkart’s <a
                                                        href="#">Terms of Use</a> and <a href="#">Privacy
                                                        Policy</a>.</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6>Advantages of our secure login</h6>
                                                <ul>
                                                    <li><input type="checkbox" checked> Easily Track Orders, Hassle free
                                                        Returns</li>
                                                    <li><input type="checkbox"> Get Relevant Alerts and Recommendations</li>
                                                    <li><input type="checkbox"> Wishlist, Reviews, Ratings and more.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Delivery Address Section -->
                            <div class="card step my-2">
                                <div class="card-header" id="headingDelivery">
                                    <h5 class="mb-0">
                                        <button class="btn collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseDelivery" aria-expanded="false"
                                            aria-controls="collapseDelivery">
                                            Delivery Address
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseDelivery" class="collapse" aria-labelledby="headingDelivery"
                                    data-parent="#checkoutAccordion">
                                    <div class="card-body">
                                        <form action="#">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        placeholder="Name" value="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="phone_number" class="form-label">Phone Number</label>
                                                    <input type="number" class="form-control" id="phone_number"
                                                        name="phone_number" placeholder="Phone Number" value="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="postcode" class="form-label">Postcode</label>
                                                    <input type="number" class="form-control" id="postcode"
                                                        name="postcode" placeholder="postcode" value="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="locality" class="form-label">Locality</label>
                                                    <input type="text" class="form-control" id="locality"
                                                        name="locality" placeholder="Locality">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="locality" class="form-label">Address</label>
                                                    <textarea class="form-control" id="locality" name="locality" placeholder="Enter your address"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="city" class="form-label">City/District/Town</label>
                                                    <input type="text" class="form-control" id="city"
                                                        name="city" placeholder="Enter City">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="locality" class="form-label">State</label>
                                                    <input type="text" class="form-control" id="locality"
                                                        name="locality" placeholder="Locality">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="landmark" class="form-label">Landmark (Optional)</label>
                                                    <input type="text" class="form-control" id="landmark"
                                                        name="landmark" placeholder="Enter Landmark">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="alternate-phone-number" class="form-label">Alternate
                                                        Phone(Optional)</label>
                                                    <input type="number" class="form-control" id="alternate-phonenumber"
                                                        name="alternate-phonenumber"
                                                        placeholder="Alternate Phone(Optional)">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" id="deliveryAddres_">Save
                                                Address</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Options Section -->
                            <div class="card step my-2">
                                <div class="card-header" id="headingPayment">
                                    <h5 class="mb-0">
                                        <button class="btn collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapsePayment" aria-expanded="false"
                                            aria-controls="collapsePayment">
                                            Payment Options
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapsePayment" class="collapse" aria-labelledby="headingPayment"
                                    data-parent="#checkoutAccordion">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment_method"
                                                    id="creditCard" value="credit_card" checked>
                                                <label class="form-check-label" for="creditCard">Credit Card</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment_method"
                                                    id="paypal" value="paypal">
                                                <label class="form-check-label" for="paypal">PayPal</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment_method"
                                                    id="bankTransfer" value="bank_transfer">
                                                <label class="form-check-label" for="bankTransfer">Bank
                                                    Transfer</label>
                                            </div>
                                            <!-- UPI Option -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment_method"
                                                    id="upi" value="upi">
                                                <label class="form-check-label" for="upi">UPI Payment (PhonePe,
                                                    Google Pay, etc.)</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div id="upiSection" style="display: none;">
                                                <div class="mb-3">
                                                    <label for="upiId" class="form-label">Enter your UPI ID</label>
                                                    <input type="text" class="form-control" id="upiId"
                                                        name="upi_id" placeholder="example@upi">
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-primary">Proceed to Payment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="order-summary">
                            <div class="order-summary-container">
                                <h4 class="mb-1">Order Summary</h4>
                                <div class="products">
                                    <div class="product product-sm">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/products/single/sidebar/1.jpg') }}"
                                                    alt="Product image" class="product-image">
                                            </a>
                                        </figure>

                                        <div class="product-body">
                                            <h5 class="product-title">Light brown studded Wide fit wedges </h5>
                                            <div class="product-price">
                                                <span class="new-price">$50.00</span>
                                                <span class="old-price">$110.00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product product-sm">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/products/single/sidebar/2.jpg') }}"
                                                    alt="Product image" class="product-image">
                                            </a>
                                        </figure>

                                        <div class="product-body">
                                            <h5 class="product-title"><a href="#">Yellow button front tea top</a>
                                            </h5>
                                            <div class="product-price">
                                                $56.00
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product product-sm">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/products/single/sidebar/4.jpg') }}"
                                                    alt="Product image" class="product-image">
                                            </a>
                                        </figure>

                                        <div class="product-body">
                                            <h5 class="product-title"><a href="#">Black soft RI weekend travel
                                                    bag</a></h5>
                                            <div class="product-price">
                                                $75.00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <x-include-plugins :plugins="['tabs']"></x-include-plugins>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#continueButton').click(function(event) {
                    event.preventDefault(); // Prevent the form from submitting
                    $('#collapseLogin').collapse('hide');
                    $('#collapseDelivery').collapse('show');
                });

                $('#deliveryAddres_').click(function(event) {
                    event.preventDefault(); // Prevent the form from submitting
                    $('#collapseDelivery').collapse('hide');
                    $('#collapsePayment').collapse('show');
                });
            });
        </script>
    @endpush
@endsection
