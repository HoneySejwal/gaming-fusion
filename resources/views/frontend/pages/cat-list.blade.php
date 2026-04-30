@extends('frontend.layouts.master')

@section("title", "Category List")

@section('main-content')
@php
    $products = $products ?? collect(); // Use empty collection if $products is undefined
@endphp
    <main>
        <section class="pageheader-section" style="background-image: url(assets/images/pageheader/bg.jpg);">
		<div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">{{ Request::route('slug') }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">Home <span class="ficon"> /  </span> </a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ Request::route('slug') }}</li>
                    </ol>
                </nav>
            </div>
		</div>
	</section>
	<!-- ===========PageHeader Section Ends Here========== -->
    <div class="shop-page padding-top padding-bottom aside-bg">
        <div class="container">
            <div class="row justify-content-center pb-15">
                <div class="col-lg-12 col-12">
                    <article>
                        <div class="shop-title d-flex flex-wrap justify-content-between">
                            <p>Showing 01 - 12 of 139 Results</p>                           
                        </div>
                        <div class="shop-product-wrap grid row justify-content-center g-4">
                    @php
                    $routeSlug = Request::route('slug');
                    $filteredCategories = collect();

                    if ($routeSlug === "PC") {
                        $catname = 2;
                        $filteredCategories = Helper::productCategoryList('All')->where('catgenres', $catname)->sortBy('id');
                    } elseif ($routeSlug === "Android") {
                        $catname = 1;
                        $filteredCategories = Helper::productCategoryList('All')->where('catgenres', $catname)->sortBy('id');
                    }
                @endphp

                @if($filteredCategories->count())
                    @foreach($filteredCategories as $cat_info)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src="{{ env('WEBSITE_URL') . $cat_info->photo }}" alt="shop">
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="{{ route('product-cat', $cat_info->slug) }}">{{ $cat_info->title }}</a></h5>
                                    <p>
                                        <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                        <i class="icofont-star"></i><i class="icofont-star"></i>
                                    </p>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h4 class="text-warning text-center" style="margin:100px auto;">There are no products...</h4>
                @endif

                </div>
                        
                    </article>
                </div>
                
            </div>
            
        </div>
    </div>
    </main>

@endsection