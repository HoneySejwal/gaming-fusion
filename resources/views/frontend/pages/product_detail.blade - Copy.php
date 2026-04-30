@extends('frontend.layouts.master')

@section('meta')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="online shop, purchase, cart, ecommerce site, best online shopping">
	<meta name="description" content="{{$product_detail->summary}}">
	<meta property="og:url" content="{{route('product-detail',$product_detail->slug)}}">
	<meta property="og:type" content="article">
	<meta property="og:title" content="{{$product_detail->title}}">
	<meta property="og:image" content="{{ asset($product_detail->photo) }}">
	<meta property="og:description" content="{{$product_detail->description}}">
@endsection
@section('title', $product_detail->title)
@section('description', $product_detail->summary)
@section('main-content')

	<main>
       <!-- GT Breadcrunb Section Start -->
        <div class="gt-breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/img/breadcrumb.png') }}');">
            <div class="gt-left-shape">
                <img src="{{ asset('assets/img/shape-1.png') }}" alt="img">
            </div>
            <div class="gt-right-shape">
                <img src="{{ asset('assets/img/shape-2.png') }}" alt="img">
            </div>
            <div class="gt-blur-shape">
                <img src="{{ asset('assets/img/breadcrumb-shape.png') }}" alt="img">
            </div>
            <div class="container">
                <div class="gt-page-heading">
                    <div class="gt-breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Game Detail</h1>
                    </div>
                    <ul class="gt-breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <i class="fa-solid fa-house"></i>
                        </li>
                        <li>
                            <a href="{{route('home')}}">
                                {{ __('common.home') }} :
                            </a>
                        </li>
                        <li class="color">
                            Game Detail
                        </li>
                    </ul>
                </div>
            </div>
        </div>

         <!-- GT Shop Section Start -->
       <section class="gt-shop-details-section section-padding fix">
            <div class="container">
                <div class="shop-details-wrapper">
                    <div class="row g-4">
                        
                        <div class="col-lg-12 col-12">
                            <div class="gt-shop-details-content"> 
                                <div class="d-flex align-items-center">                              
                                <h4>
                                    {{$product_detail->title}}
                                </h4>
                                <div class="star ms-3">
                                 @php
        										$rate = ceil($product_detail->getReview->avg('rate'))
        									@endphp
        									@for($i=1; $i<=5; $i++)
        										@if($rate>=$i)
        											<i class="fa-solid fa-star"></i>
        										@else 
        											<i class="fa-solid fa-star gt-color"></i>
        										@endif
        									@endfor
                                    <span>({{$product_detail['getReview']->count()}} {{ __('common.reviews') }})</span>
                                </div> 
                               </div>                              
                                   <p>{!! ($product_detail->summary) !!}</p>
                                     <div class="d-flex align-items-center"> 
                                <div class="gt-price-item mt-4 mb-4">
                                    <h6>
                                         price <span>: {{ $product_detail->getCurrencySymbol() }} {{ Helper::getProductPriceByCurrency(session('currency'), $product_detail) }}</span>
                                    </h6>                                 
                                </div>
                                
                                <form action="{{route('single-add-to-cart')}}" method="POST">
					                  @csrf
                                <input type="hidden" name="quant[1]" value="1" id="quantity">
                               <input type="hidden" name="slug" value="{{$product_detail->slug}}">
                                <div class="gt-button-wrapper ms-5">                                   
                                    <button type="submit" class="gt-theme-btn">{{ __('common.add_to_cart') }}</button>
                                </div>
                              </form>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="gt-shop-tab-area">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#Description" data-bs-toggle="tab" class="nav-link active">
                                    Description
                                </a>
                            </li>
                          
                            <li class="nav-item">
                                <a href="#Reviews" data-bs-toggle="tab" class="nav-link">
                                    customers review ( {{$product_detail['getReview']->count() }} )
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="Description" class="tab-pane fade show active">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="gt-description-content">
                                            <!-- <h5>about gaming chair</h5> -->
                                            <p>
                                             {!! ($product_detail->description) !!}
                                            </p>
                                            <hr/>
											 
                                             <p>
                                             {!! ($product_detail->extra_description) !!}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="gt-thumb">
                                            <!-- <img src="{{ asset('assets/img/details-1.jpg') }}" alt="img"> -->
                                        </div> 
                                    </div>
                                </div>
                            </div>                          
                            <div id="Reviews" class="tab-pane fade">
                                <div class="th-coustumer-riview">
                                    <h5>Reviews ({{$product_detail['getReview']->count()}})</h5>
                                    <p>
                                        Get specific details about this product from customers who own it.
                                    </p>
                                    @foreach($product_detail['getReview'] as $data)
                                    <div class="th-review-item">
                                        <div class="star">
                                          @for($i=1; $i<=5; $i++)
                                          @if($data->rate>=$i)
                                             <i class="fa-solid fa-star"></i>
                                          @else 
                                             <i class="fa-solid fa-star gt-color"></i>
                                          @endif
                                       @endfor
                                        </div>
                                        <p>
                                            {{$data->review}}
                                        </p>
                                        <div class="th-client-info">
                                            <div class="th-info-text">
                                                <h6>by <span>: {{$data->name}}</span></h6>
                                                <!-- <span>on 11 Apr 2025</span> -->
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                    <div class="gt-comment-form-wrap mt-5">
                                        <h4>Add a review</h4>
                                        <p>Get specific details about this product from customers who own it.</p>
                                        @auth
                                       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

                                       <form action="{{ route('review.store', $product_detail->slug) }}" method="post" >
                                       @csrf
                                       <ul class="star-rating">
                                          <i class="fas fa-star" data-value="1"></i>
                                          <i class="fas fa-star" data-value="2"></i>
                                          <i class="fas fa-star" data-value="3"></i>
                                          <i class="fas fa-star" data-value="4"></i>
                                          <i class="fas fa-star" data-value="5"></i>
                                       </ul>
                                       <input type="hidden" name="rate" id="rating-value" value="{{ old('rate') }}">
                                            <div class="row g-4">
                                                <div class="col-lg-6">
                                                    <div class="form-clt">
                                                        <span>Your Name</span>
                                                        
                                                         <input type="text" name="name" id="name" placeholder="{{ __('common.your_name') }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-clt">
                                                        <span>Your Email</span>
                                                        <input type="email" name="email" id="email" value="{{ old('email', Auth::user()->email ?? '') }}" placeholder="{{ __('common.email_address') }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-clt">
                                                        <span>write message</span>
                                                        <textarea name="review" id="review" placeholder="{{ __('common.leave_a_review') }}">{{ old('review') }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    
                                                    <button type="submit" class="gt-theme-btn">{{ __('common.leave_a_review') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                        <style>
                                            .star-rating {
                                                list-style: none;
                                                padding: 0;
                                                margin: 0;
                                                display: flex;
                                                gap: 5px;
                                            }

                                            .star-rating span {
                                                color: #ccc;
                                                cursor: pointer;
                                                font-size: 24px;
                                                transition: color 0.2s;
                                            }

                                            .star-rating .selected {
                                                color: #ffc107;
                                            }
                                        </style>
                                          <script>
                                          document.addEventListener("DOMContentLoaded", function () {
                                                const stars = document.querySelectorAll(".star-rating .fa-star");
                                                const ratingInput = document.getElementById("rating-value");

                                                stars.forEach(s => s.classList.remove("selected"));

                                                stars.forEach(star => {
                                                   star.addEventListener("click", function () {
                                                      let value = this.getAttribute("data-value");
                                                      ratingInput.value = value;

                                                      stars.forEach(s => s.classList.remove("selected"));

                                                      for (let i = 0; i < value; i++) {
                                                            stars[i].classList.add("selected");
                                                      }
                                                   });
                                                });
                                          });
                                       </script>
                                       
                                       @else
                                     {{ __('common.add_a_review') }} ?   <a href="{{route('login.form')}}">{{ __('common.login') }}</a>
                                         @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </section>

       <!-- GT Shop Section Start -->
       <!-- <section class="gt-shop-accesories-section section-padding fix pt-0">
        <div class="array-buttons">
            <button class="array-prev"><i class="fa-solid fa-arrow-down"></i></button>
            <button class="array-next"><i class="fa-solid fa-arrow-up"></i></button>
        </div>
        <div class="container">
            <div class="gt-section-title-2 text-center">
                <h6 class="wow fadeInUp">gaming Accessories</h6>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Similar products
                </h2>
            </div>
            <div class="swiper gt-shop-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="gt-shop-card-item gt-style-2">
                            <span>25% off</span>
                            <div class="gt-shop-image">
                                <img src="assets/img/home-1/shop/shop-5.png" alt="img">
                                <ul class="gt-shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="far fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    <i class="far fa-eye"></i>
                                    </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="gt-shop-content">
                                <h5>
                                    <a href="shop-details-2.html">
                                        lighting keyboard with
                                        mouse pad
                                    </a>
                                </h5>
                                <p>$185.10 </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gt-shop-card-item gt-style-2">
                            <span>25% off</span>
                            <div class="gt-shop-image">
                                <img src="assets/img/home-1/shop/shop-6.png" alt="img">
                                <ul class="gt-shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="far fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    <i class="far fa-eye"></i>
                                    </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="gt-shop-content">
                                <h5>
                                    <a href="shop-details-2.html">
                                        Virtual Reality Glasses
                                        & Controllers
                                    </a>
                                </h5>
                                <p>$185.10</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gt-shop-card-item gt-style-2">
                            <span>25% off</span>
                            <div class="gt-shop-image">
                                <img src="assets/img/home-1/shop/shop-7.png" alt="img">
                                <ul class="gt-shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="far fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    <i class="far fa-eye"></i>
                                    </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="gt-shop-content">
                                <h5>
                                    <a href="shop-details-2.html">
                                        Virtual Reality Glasses
                                        & Controllers
                                    </a>
                                </h5>
                                <p>$185.10</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gt-shop-card-item gt-style-2">                           
                            <div class="gt-shop-image">
                                <img src="assets/img/home-1/shop/shop-8.png" alt="img">
                                <ul class="gt-shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="far fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    <i class="far fa-eye"></i>
                                    </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="gt-shop-content">
                                <h5>
                                    <a href="shop-details-2.html">
                                        Virtual Reality Glasses
                                        & Controllers
                                    </a>
                                </h5>
                                <p>$185.10</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </section> -->
    </main>

@endsection
@push('styles')
	
@endpush
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const stars = document.querySelectorAll(".star-rating span");
            const ratingInput = document.getElementById("rating-value");

            stars.forEach(s => s.classList.remove("selected"));

            stars.forEach(star => {
                star.addEventListener("click", function () {
                    let value = this.getAttribute("data-value");
                    ratingInput.value = value;

                    stars.forEach(s => s.classList.remove("selected"));

                    for (let i = 0; i < value; i++) {
                        stars[i].classList.add("selected");
                    }
                });
            });
        });
    </script>
@endpush