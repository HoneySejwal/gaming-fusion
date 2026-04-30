@extends('frontend.layouts.master')

@section('title','About Us')

@section('main-content')
<section class="pageheader-section" style="background-image: url('{{ asset('assets/images/pageheader/bg.jpg') }}');">
		<div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">{{ __('common.about') }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('common.home') }} <span class="ficon"> /  </span> </a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ __('common.about') }}</li>
                    </ol>
                </nav>
            </div>
		</div>
	</section>

<section class="about-section pt-5 pb-5">
		<div class="container">
            <div class="section-header text-center mb-4">
<p>{{ __('common.about_subheader') }}</p>
<h2>{{ __('common.about_title') }}</h2>
</div>
			<div class="section-wrapper padding-top">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-image">
							<img src="storage/photos/products/200.webp" class="about-vimg" alt="about-image">
						</div>
					</div>
					<div class="col-lg-6 col-md-10">
<div class="about-wrapper">
<div class="about-content">
<p>{{ __('common.about_text') }}
</p>
<ul class="about-list">
<li class="about-item d-flex flex-wrap">
<div class="about-item-thumb">
<img src="assets/images/about/icon-1.png" alt="{{ __('common.about_icon_1_alt') }}">
</div>
<div class="about-item-content">
<h5>{{ __('common.feature_1_title') }}</h5>
<p>{{ __('common.feature_1_text') }}</p>
</div>
</li>
<li class="about-item d-flex flex-wrap">
<div class="about-item-thumb">
<img src="assets/images/about/icon-2.png" alt="{{ __('common.about_icon_2_alt') }}">
</div>
<div class="about-item-content">
<h5>{{ __('common.feature_2_title') }}</h5>
<p>{{ __('common.feature_2_text') }}</p>
</div>
</li>
<li class="about-item d-flex flex-wrap">
<div class="about-item-thumb">
<img src="assets/images/about/icon-3.png" alt="{{ __('common.about_icon_3_alt') }}">
</div>
<div class="about-item-content">
<h5>{{ __('common.feature_3_title') }}</h5>
<p>{{ __('common.feature_3_text') }}</p>
</div>
</li>
</ul>
</div>
</div>
</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ===========About Section Ends Here========== -->

      <!-- Features In start -->
    <section id="features-section" class="pt-5 pb-5">        
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-header text-center">
                            <h2 class="title">{{ __('common.features_title') }}</h2>
                            <p class="">{{ __('common.features_subtitle') }}</p>
                        </div>
                    </div>
                </div>
                <div class="row pm-none">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="assets/images/features-icon-1.png" alt="image">
                            </div>
                            <h5>{{ __('common.feature_1_title') }}</h5>
                            <p>{{ __('common.feature_1_text') }}</p>
                        </div>            

                    </div>
                  
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="assets/images/features-icon-3.png" alt="image">
                            </div>
                            <h5>{{ __('common.feature_2_title') }}</h5>
                            <p>{{ __('common.feature_2_text') }}</p>
                        </div>                      
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="assets/images/features-icon-4.png" alt="image">
                            </div>
                            <h5>{{ __('common.feature_3_title') }}</h5>
                            <p>{{ __('common.feature_3_text') }}</p>
                        </div>
                          
                    </div>
                     <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="assets/images/features-icon-5.png" alt="image">
                            </div>
                            <h5>{{ __('common.feature_4_title') }}</h5>
                            <p>{{ __('common.feature_4_text') }}</p>
                        </div>                    
                    </div>                   
                </div>
            </div>      
    </section>
    <!-- Features In end -->
     	<!-- ===========CTA Section start Here========== -->
	<section class="cta-section padding-bottom ">
		<div class="container  ">
			<div class="cta-wrapper">
				<div class="cta-item position-relative px-4 px-sm-5 pt-4 pt-sm-5 pt-lg-0" style="background-image: url(assets/images/cta/bg-2.jpg);">
					<div class="row align-items-center position-relative">
						<div class="col-lg-6 offset-lg-3">
							<div class="cta-content ">
								<p class="text-uppercase ls-2">{{ __('common.cta_subheader') }}</p>
<h2 class="mb-3">{{ __('common.cta_title_start') }} <span class="text-uppercase">{{ __('common.cta_title_highlight') }}</span> {{ __('common.cta_title_end') }}</h2>
<p class="mb-4">{{ __('common.cta_text') }}</p>
<a href="{{ route('register.form') }}" class="default-button"><span>{{ __('common.cta_button') }} <i class="icofont-circled-right"></i></span></a>
							</div>
						</div>
                        <!--<div class="col-lg-6">
							<div class="cta-thumb text-end">
								<img src="{{ asset('assets/images/cta/02.png') }}" class="move4" alt="CTA image">
							</div>
						</div>-->
					</div>
				</div>
			</div>
		</div>
	</section>



@endsection
