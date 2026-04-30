<!-- ================ footer Section start Here =============== -->
    <footer class="footer-section">
         <div class="footer-middle padding-top pb-3" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-lg-0">
                                <div class="fm-item-title mb-4">
                                <a href="{{route('home')}}">  
                                    <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"></a>
                                </div>
                                <div class="fm-item-content">
                                    <p class="mb-4">{{ __('common.trusted_by_gamers') }}</p>
									
                                </div>
                            </div>
                        </div>
                         <div class="col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner" style="display: -webkit-inline-box;">
                                <div class="lab-thumb">                                   
                                   <i class="icofont-company"></i>
                                </div>
                                <div class="lab-content" style="padding-top: 10px;">
                                    <span> {{ $misc['Company Name'] ?? __('common.company_name') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                         <div class="col-12 mt-20" style="padding-top:20px;">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner" style="display: -webkit-inline-box;">
                                <div class="lab-thumb">
                                      <i class="icofont-email"></i>
                                </div>
                                <div class="lab-content" style="padding-top: 10px;">
                                    <span>  {{ $misc['Company Email'] ?? __('common.company_email') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-20" style="padding-top:20px;">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner" style="display: -webkit-inline-box;">
                                <div class="lab-thumb">
                                 <i class="icofont-address-book"></i>
                                </div>
                                <div class="lab-content" style="width:80%;">
                                    <span > {{ $misc['Company Address'] ?? __('common.company_address') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 ">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-lg-0">
                                <div class="fm-item-title">
                                    <h3 >{{ __('common.quick_links') }}</h3>
                                </div>
                                <ul>
                                   <li><a href="{{ route('home') }}"> <i class="icofont-caret-right"></i> {{ __('common.home') }}</a></li> 
                                    <li><a href="{{ route('pages', 'about-us') }}"> <i class="icofont-caret-right"></i> {{ __('common.about') }}</a></li>
                                     <li><a href="{{ route('contact') }}"> <i class="icofont-caret-right"></i> {{ __('common.contact') }}</a></li>  
                                                        <li><a href="{{route('pages','privacy-policy')}}"> <i class="icofont-caret-right"></i>  {{ __('common.privacy_policy') }}</a></li>
                                            <li><a href="{{route('pages','terms-conditions')}}"> <i class="icofont-caret-right"></i> 
                                        {{ __('common.terms_policy') }}</a></li>
                                            <li><a href="{{route('pages','refund-policy')}}">  <i class="icofont-caret-right"></i> {{ __('common.refund_policy') }}</a>
                                            </li>
                                            <li><a href="{{route('pages','delivery-policy')}}"> 
                                                   <i class="icofont-caret-right"></i>  {{ __('common.delivery_policy') }}</a></li>          
                                  </ul>
                               
                            </div>
                        </div>
                    
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item-3 mb-lg-0">
                                <div class="fm-item-title">
                                    <h3>{{ __('common.newsletter') }}</h3>
                                </div>
                                <div class="fm-item-content">
                                    <p>{{ __('common.community_leaders') }}</p>
                                    <p class="success_message" style="color:#fff;">{{ __('common.subscribing') }} </p>
                                    <form id="news-form">
                                        <div class="form-group mb-2">
                <input type="email" class="form-control" name="email" placeholder="{{ __('common.enter_email') }}" required >
                                        </div>
										<button type="submit" class="default-button colorbtn1">{{ __('common.subscribe') }} <i class="icofont-circled-right"></i></button>
                                    </form>
                                </div>
                                <!--
                                <div class="fm-item-title">
                                    <h4 class="mt-3">We Accept</h4>
                                    <img src="https://www.playwithgreat.com/assets/img/payment/payment.png">
                                </div>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                        <div class="footer-bottom-content pt-5">
                            <p>©  {{ __('common.copyright') }} {{ date('Y') }}  <a href="{{route('home')}}">{{ $misc['Company Name'] ?? __('common.company_name') }}</a> | {{ __('common.all_right_reserved') }} <img src="https://www.playwithgreat.com/assets/img/payment/payment.png" style="float:right;"></p>
                        </div>
                    </div>
                </div>     
            </div>
        </div>       
    </footer>
    <style>
            .success_message {
            display: none;
            color: #000000;
            margin-top: 10px;
            }
            .success_message.show {
            display: block;
            }

        </style>
    <!-- ================ footer Section end Here =============== -->
	<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
	<script src="{{ asset('assets/js/circularProgressBar.min.js') }}"></script>
	<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
	<script src="{{ asset('assets/js/lightcase.js') }}"></script>
	<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/js/wow.min.js') }}"></script>
	<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
$(document).ready(function () {
  $("#news-form").on("submit", function (e) {
    e.preventDefault(); // Prevent page reload

    $(".success_message").addClass("show");

    // Fade out after 3 seconds and reset input
    setTimeout(function () {
      $(".success_message").removeClass("show");

      // Clear the input field
      $("#news-form input[type='email']").val("");
    }, 5000);
  });
});
    setTimeout(function() {   
     $('.alert').slideUp();    
	}, 5000);
	</script>
</body>
</html>