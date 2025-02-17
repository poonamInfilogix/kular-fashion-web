@extends('layouts.app')
@section('content')
    @push('head')
        <link rel="stylesheet" href="{{ asset('assets/css/order-confirmation.css') }}">
    @endpush

    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Track Order</li>
            </ol>
        </div>
    </nav>

    <div class="page-content">
        <div class="order-detail">
            <div class="container">
                <div class="row g-sm-4 g-3">
                    <div class="col-xxl-9 col-xl-8 col-lg-6">
                        <div class="row g-sm-4 g-3">
                            <div class="col-xl-4 col-sm-6 mb-2">
                                <div class="order-details-contain">
                                    <div class="order-tracking-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package text-content"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                    </div>
    
                                    <div class="order-details-name">
                                        <h6 class="text-content">Tracking Code</h6>
                                        <h4 class="theme-color">MH4285UY</h4>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-xl-4 col-sm-6 mb-2">
                                <div class="order-details-contain">
                                    <div class="order-tracking-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck text-content"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                                    </div>
    
                                    <div class="order-details-name">
                                        <h6 class="text-content">Service</h6>
                                        
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_ZHRZ9IJgKgxtInKKsHG9z2f2eVBgzIEeIg&s" alt="">
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-xl-4 col-sm-6 mb-2">
                                <div class="order-details-contain">
                                    <div class="order-tracking-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info text-content"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                    </div>
    
                                    <div class="order-details-name">
                                        <h6 class="text-content">Package Info</h6>
                                        <h4>Letter</h4>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-xl-4 col-sm-6">
                                <div class="order-details-contain">
                                    <div class="order-tracking-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-crosshair text-content"><circle cx="12" cy="12" r="10"></circle><line x1="22" y1="12" x2="18" y2="12"></line><line x1="6" y1="12" x2="2" y2="12"></line><line x1="12" y1="6" x2="12" y2="2"></line><line x1="12" y1="22" x2="12" y2="18"></line></svg>
                                    </div>
    
                                    <div class="order-details-name">
                                        <h6 class="text-content">From</h6>
                                        <h4>STR. Smardan 9, Bucuresti, romania.</h4>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-xl-4 col-sm-6">
                                <div class="order-details-contain">
                                    <div class="order-tracking-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin text-content"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    </div>
    
                                    <div class="order-details-name">
                                        <h6 class="text-content">Destination</h6>
                                        <h4>Flokagata 24, 105 Reykjavik, Iceland</h4>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-xl-4 col-sm-6">
                                <div class="order-details-contain">
                                    <div class="order-tracking-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar text-content"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                    </div>
    
                                    <div class="order-details-name">
                                        <h6 class="text-content">Estimated Time</h6>
                                        <h4>7 Frb, 05:05pm</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <ol class="stepper">
                                    <li>
                                        <div>
                                            <h5>Order Processing</h5>
                                            <h6>05:43 AM</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <h5>Pre-Production</h5>
                                            <h6>01:21 PM</h6>
                                        </div>
                                    </li>
                                    <li class="active">
                                        <div>
                                            <h5>Shipped</h5>
                                            <h6>Pending</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <h5>Delivered</h5>
                                            <h6>Pending</h6>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-xl-4 col-lg-6">
                        <h4>Purchased Items</h4>
                        <div class="products">
                            <div class="product product-sm">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/products/single/sidebar/1.jpg') }}" alt="Product image" class="product-image">
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
                                        <img src="{{ asset('assets/images/products/single/sidebar/2.jpg') }}" alt="Product image" class="product-image">
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
                                        <img src="{{ asset('assets/images/products/single/sidebar/4.jpg') }}" alt="Product image" class="product-image">
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
@endsection
