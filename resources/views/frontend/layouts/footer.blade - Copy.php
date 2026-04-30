      <!-- GT Newsletter Section Start -->
        <section class="gt-newsletter-section fix mb-4">
            <div class="container">
                <div class="gt-newsletter-wrapper bg-cover position-relative" style="background-image: url(assets/img/home-1/cta/newsletter-bg.jpg);">
                    <div class="shape">
                        <img src="{{ asset('assets/img/home-1/cta/drive.png') }}" alt="img">
                    </div>
                    <h4 class="wow fadeInLeft" data-wow-delay=".3s">
                        Sign up today to get the latest <br>
                        inspiration & insights
                    </h4>
					<p class="success_message">Thank You for sucessfully subscribe </p>
                    <form class="wow fadeInRight" id="subscribe-form">
                        <div class="form-clt">
                            <!--<input type="email" name="email" id="email" placeholder="Your Email Address" required>-->
                            <input type="email" placeholder="Your Email Address" required>
                            <button type="submit" class="gt-theme-btn">subscribe now</button>
                            <!--<button type="submit" class="gt-theme-btn">-->
                            <!--    subscribe now-->
                            <!--</button>-->
                        </div>
                    </form>
                </div>
            </div>
        </section>
    <!-- GT Footer Section Start -->
        <footer class="gt-footer-section section-bg">
            <div class="container">
                <div class="gt-footer-widget-wrapper">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".2s">
                            <div class="gt-footer-widget-items">
                                <div class="gt-widget-head">
                                    <a href="{{ route('home') }}" class="gt-footer-logo">
                                        <img src="{{ asset('assets/img/logo/white-logo.svg') }}" alt="img">
                                    </a>
                                </div>
                                <div class="gt-footer-content">
                                    <p>
                                        Empowering gamers with premium digital content and services. Unlock your full potential with reliable, fast, and immersive gaming upgrades.
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="gt-footer-widget-items">
                                <div class="gt-widget-head">
                                    <h5>Our Studio</h5>
                                </div>
                                <ul class="gt-list-area">
                            <li>
                                <a href="{{ route('pages', 'about-us') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('pages', 'faqs') }}">FAQ's</a>
                            </li>
                            <li>
                                <a href="{{ route('pages', 'database') }}">Database</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 ps-lg-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="gt-footer-widget-items">
                                <div class="gt-widget-head">
                                    <h5>Utility Pages</h5>
                                </div>
                                <ul class="gt-list-area">
                            <li>
                                <a href="{{ route('pages', 'terms-conditions') }}">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="{{ route('pages', 'privacy-policy') }}">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="{{ route('pages', 'refund-policy') }}">Refund Policy</a>
                            </li>
                            <li>
                                <a href="{{ route('pages', 'delivery-policy') }}">Delivery Policy</a>
                            </li>
                        </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="gt-footer-widget-items">
                                <div class="gt-widget-head">
                                    <h5>Connect With Us</h5>
                                </div>
                                   
                                    <div class="gt-contact-item">
                                        <div class="gt-icon">
                                            <i class="fa-regular fa-envelope"></i>
                                        </div>
                                        <ul class="gt-list">
                                            <li><span>Mail Us</span></li>
                                            <li><a href="mailto:info@towa-xports.com">
                                                info@towa-xports.com
                                            </a></li>
                                        </ul>
                                    </div>
                                    <div class="gt-contact-item mb-0">
                                        <div class="gt-icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <ul class="gt-list">
                                            <li><span>Location:</span></li>
                                            <li>{{ __('common.company_address') }}</li>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom wow fadeInUp" data-wow-delay=".3s">
                    <div class="footer-wrapper">
                        <p>© Copyright {{ date('Y') }} {{ __('common.company_name') }}. All Rights Reserved.</p>
                        <ul class="gt-footer-list wow fadeInUp" data-wow-delay=".3s">
                    <li>
                       <img src="{{ asset('assets/img/payment/payment.png') }}" alt="payment">
                    </li>
                  
                </ul>
                    </div>
                </div>
            </div>
        </footer>
         
        <!--<< All JS Plugins >>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<!--<< Viewport Js >>-->
<script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
<!--<< Bootstrap Js >>-->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!--<< nice-selec Js >>-->
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<!--<< Waypoints Js >>-->
<script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
<!--<< Counterup Js >>-->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!--<< Swiper Slider Js >>-->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<!-- Jquery Validation -->
<script src="{{url('assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<!--<< MeanMenu Js >>-->
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<!--<< Magnific Popup Js >>-->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!--<< Wow Animation Js >>-->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!--<< Main.js >>-->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
$(document).ready(function () {
  $("#subscribe-form").on("submit", function (e) {
    e.preventDefault(); // Prevent page reload

    $(".success_message").addClass("show");

    // Fade out after 3 seconds and reset input
    setTimeout(function () {
      $(".success_message").removeClass("show");

      // Clear the input field
      $("#subscribe-form input[type='email']").val("");
    }, 3000);
  });
});
    setTimeout(function() {   
     $('.alert').slideUp();    
	}, 3000);
	</script>
    </body>

</html>