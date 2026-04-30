@extends('frontend.layouts.master')

@section('title','Towa-Xports || Database')

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
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">our database</h1>
                    </div>
                    <ul class="gt-breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <i class="fa-solid fa-house"></i>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">
                                {{ __('common.home') }} :
                            </a>
                        </li>
                        <li class="color">
                            Database
                        </li>
                    </ul>
                </div>
            </div>
        </div>

  <section class="gt-shop-section section-padding fix">
        <div class="container">
            <div class="row g-4">
                       @php
                  $products = Helper::getRandomProduct(320);
                          @endphp
                          
                           @if(count($products))
         @foreach($products as $product)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="gt-news-card-item">  
                        <div class="gt-shop-card-item mt-0"> 
                          @php 
                                        $photo=explode(',',$product->photo);
                                    @endphp                       
                           <div class="gt-shop-image">
                            <!-- <img src="{{ asset($photo[0]) }}" alt="img" class="lazyload"> -->
                            <ul class="gt-shop-icon d-grid justify-content-center align-items-center">
                                
                                <form action="{{ route('single-add-to-cart') }}" method="POST">
                                @csrf
                                <input type="hidden" name="quant[1]" class="qty-input" data-min="1" data-max="1000" value="1" id="quantity">
                                <input type="hidden" name="slug" value="{{ $product->slug }}">
                              <li>
                                <button type="submit" data-bs-toggle="popover"  data-bs-trigger="hover"  data-bs-placement="left" data-bs-content="Add To Cart">
                                  <i class="far fa-shopping-cart"></i>
                                </button>
                              </li>
                              </form>
                            </ul>
                        </div>
                       <div class="gt-news-content text-center">
                            <h5>
                                <a href="{{route('product-detail', $product->slug)}}">
                                    {{$product->title}}
                                </a>
                            </h5>
                            <p>{{ Str::limit($product->summary,120) }}</p>
                            <p class="srvce-prce mt-3">{{ $product->getCurrencySymbol() }} {{ Helper::getProductPriceByCurrency(session('currency'), $product) }}</p>
                            <a href="{{route('product-detail', $product->slug)}}" class="icon"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                      </div>              
                    </div>  
                  </div>
                  @endforeach
                    @else
                        <h4 class="text-warning" style="margin:100px auto;">There are no products.</h4>
                    @endif 
                      
                  
</div>
</div>
<!-- end row section -->
</section>
    </main>

@endsection