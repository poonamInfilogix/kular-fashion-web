<footer class="footer footer-2">
    <div class="footer-middle">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-3">
                    <div class="widget widget-about">
                        <img src="{{ asset('assets/images/logo.png') }}" class="footer-logo bg-white" alt="Footer Logo" width="200" height="100">
                        <p>Delivering timeless style and trusted quality since 1977. From Derry to the world, we bring you premium clothing and exceptional service.</p>
                        
                        <div class="widget-about-info">
                            <div class="row">
                                {{-- <div class="col-sm-6 col-md-4">
                                    <span class="widget-about-title">Got Question? Call us 24/7</span>
                                    <a href="tel:123456789">+0123 456 789</a>
                                </div> --}}
                                <div class="col-sm-6 col-md-8">
                                    <span class="widget-about-title">Payment Method</span>
                                    <figure class="footer-payments">
                                        <img src="{{ asset('assets/images/payments.png') }}" alt="Payment methods" width="272" height="20">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title">Useful links</h4>

                        <ul class="widget-list">
                            <li><a href="{{ route('about.index')}}">About</a></li>
                            <li><a href="#">How to shop</a></li>
                            <li><a href="{{ route('faq')}}">FAQ</a></li>
                            <li><a href="{{ route('contact.index')}}">Contact us</a></li>
                            <li><a href="#">Log in</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title">Customer Service</h4>

                        <ul class="widget-list">
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back guarantee!</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title">My Account</h4>

                        <ul class="widget-list">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="{{ route('cart.index')}}">View Cart</a></li>
                            <li><a href="{{ route('wishlist')}}">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="widget widget-newsletter">
                        <h4 class="widget-title">Sign up to newsletter</h4>

                        <p>Stay Updated with the Latest Insights, Tips, and Exclusive Offers – Delivered Straight to Your Inbox!</p>
                        
                        <form action="#">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                <div class="input-group-append">
                                    <button class="btn btn-dark" type="submit"><i class="icon-long-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container-fluid">
            <p class="footer-copyright">Copyright © 2025 Kular Fashion. All Rights Reserved.</p>
            <ul class="footer-menu">
                <li><a href="#">Terms Of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>

            <div class="social-icons social-icons-color">
                <span class="social-label">Social Media</span>
                <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
            </div>
        </div>
    </div>
</footer>