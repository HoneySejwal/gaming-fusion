@extends('frontend.layouts.master')
@section('title','Cart Page')
@section('main-content')
	<main>
    <!-- Page Header Section -->
    <section class="pageheader-section" >
        <div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">{{ __('common.cart') }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">
                                {{ __('common.home') }} <span class="ficon"> / </span>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('common.cart') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Cart Section -->
    <div class="shop-cart padding-top padding-bottom">
        <div class="container">
            <div class="row m-0 section-wrapper">
                <div class="col-md-9 col-12">
                    <div class="cart-top table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cat-product">{{ __('common.product') }}</th>
                                    <th class="cat-price">{{ __('common.price') }}</th>
                                    <!--<th class="cat-quantity">{{ __('common.quantity') }}</th>-->
                                    <th class="cat-toprice">{{ __('common.total') }}</th>
                                    <th class="cat-edit">{{ __('common.remove') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(Helper::cartCount())
                                    @foreach(Helper::getAllProductFromCart() as $key => $cart)
   @php $photo = explode(',', $cart->product['photo']);
$product_detail= App\Models\Product::getProductBySlug($cart->product->slug); 
                    
$m=Helper::getProductPriceByCurrency(session('currency'), $cart->product);
                                
                    if(session('currency') == 'HKD') {
        $a=$cart['price']-$product_detail->price_hk;
        $hours=$a/257; $basic=$product_detail->price_hk; 
        $perhour=257;                        
                                    }
                                    elseif(session('currency') == 'JPY') {
        $a=$cart['price']-$product_detail->price_jp;
            $hours=$a/5000; $basic=$product_detail->price_jp;
            $perhour=5000;                    
                                    }
                                   elseif(session('currency') == 'USD') {
        $a=$cart['price']-$product_detail->price;
            $hours=$a/35; $basic=$product_detail->price; 
            $perhour=35;                    
                                    }                             
                         
                        
                        @endphp                             
                                
                                        <tr>
                                            <td class="product-item cat-product">
                                                <div class="p-thumb">
                                                    
                                                    <a href="#"><img src="{{ asset($photo[0]) }}" alt="{{ $cart->product['title'] }}"></a>
                                                </div>
                                                <div class="p-content">
                                                    <a href="#">{{ $cart->product['title'] }}</a>
@if($a>0)                   
    <div class="car-hours-group"><h5>{{$hours}} {{ __('common.hours') }}</h5> <a href="{{ route('trainingdelete', $cart->id) }}"><i class="icofont-close"></i></a>  
            <p class="text-white mb-0">{{ Helper::getCurrencySymbol(session('currency')) }} {{number_format($basic, session('currency')=='JPY' ? 0 : 2)}} + ( {{$hours}} X {{ Helper::getCurrencySymbol(session('currency')) }}  {{number_format($perhour, session('currency')=='JPY' ? 0 : 2)}} )</p>  </div>
@endif                                                      
                                                </div>
                                            </td>
                                            <td class="cat-price" >
                                                {{ Helper::getCurrencySymbol(session('currency')) }} 
 {{number_format($cart['price'], session('currency')=='JPY' ? 0 : 2)}}                                                    
                                             
                                            </td>
                                            <!--
                                            <td class="cat-quantity" >
                                                <div class="cart-plus-minus">
                                                    <div class="dec qtybutton">-</div>
                                                    <input class="cart-plus-minus-box" type="text" value="{{ $cart->quantity }}" disabled>
                                                    <div class="inc qtybutton">+</div>
                                                </div>
                                            </td>
                                            -->
                                            <td class="cat-toprice" >
                                                {{ Helper::getCurrencySymbol(session('currency')) }} 
 {{number_format($cart['amount'], session('currency')=='JPY' ? 0 : 2)}}                                                    
                                               
                                            </td>
                                            <td class="cat-edit">
                                                <a href="{{ route('cart-delete', $cart->id) }}">
                                                    <img src="{{ asset('assets/images/shop/del.png') }}" alt="delete">
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            {{ __('common.no_cart_available') }}
                                            <a href="{{ route('product-lists') }}" style="color:blue;">
                                                {{ __('common.continue_shopping') }}
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Cart Totals -->
                <div class="col-lg-3 col-12">
                    <div class="cart-bottom mb-4">
                        <div class="shiping-box mb-4">
                            <div class="cart-overview">
                                <h3>{{ __('common.cart_total') }}</h3>
                                <ul class="codex">
                                    <li>
                                        <span class="pull-left">{{ __('common.subtotal') }}</span>
                                        <p class="pull-right">
                                            {{ Helper::getCurrencySymbol(session('currency')) }} 
          {{number_format(Helper::totalCartPrice(), session('currency')=='JPY' ? 0 : 2)}}                                      
                                            
                                        </p>
                                    </li>
                                    <li>
                                        <span class="pull-left">{{ __('common.total') }}</span>
                                        <p class="pull-right">
                                            {{ Helper::getCurrencySymbol(session('currency')) }} 
  {{number_format(Helper::totalCartPrice(), session('currency')=='JPY' ? 0 : 2)}}                                              
                                           
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('checkout') }}" class="default-button colorbtn2 m-2">
                        <span>{{ __('common.checkout') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
@push('styles')
	
@endpush
@push('scripts')
	<!--<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') );
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0;
				// alert(coupon);
				$('#order_total_price span').text('$'+(subtotal + cost-coupon).toFixed(2));
			});

		});
	</script>-->

@endpush
