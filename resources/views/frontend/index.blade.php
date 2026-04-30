@extends('frontend.layouts.master')
@section('main-content')
<main>
     <div class="banner__slider overflow-hidden">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="banner" style="background-image: url(assets/images/banner/home-2/hero-large.webp);">
                    <div class="container">
                        <div class="row g-0">
                            <div class="col-lg-6 col-12">
                                <div class="banner__content">
                                    <h1>{{ __('common.banner_title_top') }}</h1>
                                    <h2>{{ __('common.banner_title_bottom') }}</h2>
                                    <p>{{ __('common.banner_text') }}</p>
                                    <a href="{{ route('register.form') }}" class="default-button colorbtn1"> {{ __('common.join_us_today') }} <i class="icofont-play-alt-1"></i> </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                               <img src="assets/images/hero-sublarge.webp" class="bner-yimg" alt=banner-image"">
                             </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <section class="about-section">
<div class="container">
<div class="row">
<div class="col-lg-5 col-xl-5 col-12">
   <div class="img-box7">
    <div class="img-1">
        <img src="storage/photos/category/41.webp" alt="thumb" />
      
    </div>
    <div class="img-2"><img src="storage/photos/category/20.webp" alt="thumb" /></div>
    <div class="img-3"><img src="storage/photos/category/15.webp" alt="thumb" /></div>
</div>

</div>
<div class="col-lg-7 col-xl-7 col-12 ">
<div class="about-wrapper">
<div class="section-header">
<p>{{ __('common.about_subheader') }}</p>
<h2>{{ __('common.about_title') }}</h2>
</div>
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
</section>
     <section class="categ-section pt-5 pb-5 position-relative">
        <div class="cloos pulse">
        <img alt="game-icon" src="assets/images/team-badge-8.png">
      </div>
<div class="container">
<div class="section-header text-dark">
<p>{{ __('common.collection_subheader') }}</p>
<h2>{{ __('common.collection_title') }}</h2>
</div>
<div class="section-wrapper">

<div class="row mb-4">
@php
                        $category_lists = Helper::productCategoryList('all')->sortBy('id')->take(9);
                    @endphp
                    @foreach($category_lists as $category)
<div class="col-lg-4 col-sm-6 col-12">
 <div class="effect effect-two">
  <img src="{{ env('WEBSITE_URL') . $category->photo }}" class="img-fluid" alt="{{ __('common.game_category_alt') }}">
   <div class="tab-text">   
     <h4>{{ $category->title }}</h4>
    <p class="description"> {{ $category->summary }} </p>
     <a href="<?=url('product-cat'.'/'.$category->slug)?>" class="default-button colorbtn1"> View More
 </a>
</div>    
</div>
</div>
@endforeach
</div>
</div>
</div>
</section>
     

  
<section class="cta-section pt-5">
<div class="cta-wrapper item-layer">
<div class="cta-item px-4 px-sm-5 pt-4 pt-sm-5 pt-lg-0" style="background-image: url(assets/images/cta/bg-2.jpg);">
<div class="row justify-content-center align-items-center">
<div class="col-lg-6 col-sm-12">
<div class="cta-content text-center position-relative">
<p class="text-uppercase ls-2">{{ __('common.cta_subheader') }}</p>
<h3 class="mb-3">{{ __('common.cta_title_start') }} <span class="text-uppercase">{{ __('common.cta_title_highlight') }}</span> {{ __('common.cta_title_end') }}</h3>
<p class="mb-4">{{ __('common.cta_text') }}</p>
<a href="{{ route('register.form') }}" class="default-button colorbtn1"><span>{{ __('common.cta_button') }} <i class="icofont-circled-right"></i></span></a>
</div>
</div>
<!--<div class="col-lg-6">
<div class="cta-thumb text-end">
<img src="assets/images/cta/02.png" class="move4" alt="{{ __('common.cta_image_alt') }}">
</div>
</div>-->
</div>
</div>
</div>
</section> 
<section class="shop-page shp-wpge pb-5 position-relative">
     <div class="cloos pulse1">
        <img alt="game-icon" src="assets/images/team-badge-4.png">
      </div>
<div class="container">
<div class="section-header text-dark">
<p>{{ __('common.product_subheader') }}</p>
<h2>{{ __('common.product_title') }}
</h2>
</div>
<div class="section-wrapper">
   
    <div class="shop-product-wrap player-slider">
        <div class="swiper-wrapper">
            @php
                $products = \App\Models\Product::orderBy('id', 'desc')->take(10)->get();
            @endphp
            @foreach($products as $product)
                <div class="swiper-slide">
                 <div class="effect effect-two">
                    @php 
                                $photo = explode(',', $product->photo);
                            @endphp
  <img src="{{ asset($photo[0]) }}" alt="{{ __('common.product_alt') }}">
   <div class="tab-text">    
     <h3>{{ $product->title }}</h3>
     <p class="description"> {{ $product->description }}       </p>
</div>
<div class="cart-ybtn"> 
             <form action="{{ route('single-add-to-cart') }}" method="POST">
                                @csrf
                                <input type="hidden" name="quant[1]" class="qty-input" data-min="1" data-max="1000" value="1" id="quantity">
                                <input type="hidden" name="slug" value="{{ $product->slug }}">
                                <div class="product-action-link custom-wcart">                                  
                                    <button type="submit" style="background: none;">
                                        <a href="#" style="pointer-events:none;"><i class="icofont-ui-cart"></i></a>
                                    </button>
                                </div>
                            </form>
</div>                         
</div>
                 <!-- <div class="product-item">
                        <div class="product-thumb">
                            
                            <div class="pro-thumb">
                                <img >
                                <div class="product-prce">
                                    <p>{{ $product->getCurrencySymbol() }} {{ Helper::getProductPriceByCurrency(session('currency'), $product) }}</p>
                                </div>
                            </div>
                           
                        </div>
                        <div class="product-content">
                            <h5><a href="{{ route('product-detail', $product->slug) }}">{{ $product->title }}</a></h5>
                        </div>
                    </div>-->
                </div>
            @endforeach
        </div>
    </div>
</div>
</div>
</section>

</main>
@endsection
