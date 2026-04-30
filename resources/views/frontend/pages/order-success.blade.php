@extends('frontend.layouts.master')

@section('title','Payment Success')
@php
use App\Models\Order;
$order = Order::where('trans_id', $transaction_id)->first();
@endphp
@section('main-content')

    <section class="pageheader-section" >
		<div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">{{ __('common.order_status') }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('common.home') }} <span class="ficon"> /  </span> </a></li>
                      <li class="breadcrumb-item active" aria-current="page"> {{ __('common.order_status') }} </li>
                    </ol>
                </nav>
            </div>
		</div>
	</section>

	<!-- Order Success -->
	<section class="cart-area pt-5 pb-5" >
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 offset-xl-3 order-cont-wrap p-4 text-center" >
                    <h2>{{ __('common.order_successful') }}</h2>
                    <h4 class="order-invoice-number">{{ __('common.invoice_number') }}<span> {{ $transaction_id }}</span></h4>
                    <h3>{{ __('common.thank_you_order') }}</h3>
                    <h5>{{ __('common.order_confirmation') }} {{ $transaction_id }}</h5>
                    <a class="default-button colorbtn2" href="{{route('user.order.show',$order->id)}}" style="">{{ __('common.view_more') }}</a> 
                </div>
                @if($email_status=='inactive')
<p class="invce-taglne mt-3 mb-3" style="padding: 3px;font-size:18px;font-weight: 600;">{{ __('common.high_traffic') }} <a href="{{route('order.pdf',$order->id)}}" class="text-dark"><i class="icofont-download"></i></a></p>
                    @endif
            </div>
        </div>
	</section>
	<!-- End Order Success -->
@endsection