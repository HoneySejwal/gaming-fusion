@extends('frontend.layouts.master')

@section('title','Payment Success')

@section('main-content')

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
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">  {{ __('common.order_status') }} </h1>
                    </div>
                    <ul class="gt-breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <i class="fa-solid fa-house"></i>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">{{ __('common.home') }} :</a>
                        </li>
                        <li class="color">{{ __('common.order_status') }}</li>
                    </ul>
                </div>
            </div>
        </div>



	<!-- Order Success -->
	<section class="cart-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12 order-cont-wrap" style="margin-top: 100px; margin-bottom: 100px;">
                    <h2>{{ __('common.order_successful') }}</h2>
                    <h4 class="order-invoice-number">{{ __('common.invoice_number') }}<span> {{ $transaction_id }}<span></h4>
                    <h3>{{ __('common.thank_you_order') }}</h3>
                    <h5>{{ __('common.order_confirmation') }} {{ $transaction_id }}</h5>
                    <p>{{ __('common.team_contact') }}</p>
                    <h5>{{ __('common.need_assistance') }}</h5>
                    <p>{{ __('common.reach_out_for_help') }}.</p>
                </div>
            </div>
        </div>
	</section>
	<!-- End Order Success -->
@endsection