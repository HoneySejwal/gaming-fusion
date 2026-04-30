@extends('frontend.layouts.master')

@section('title','Payment Failed')

@section('main-content')

        <section class="pageheader-section">
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

	<!-- About Us -->
	<section class="cart-area pt-100 pb-100" style="color: #000 !important;">
        <div class="container">
            <div class="row">
                <div class="col-12 order-cont-wrap mt-5 mb-5">
                <h2 class="order-failed">{{ __('common.payment_unsuccessful') }}</h2>
                                <h3>{{ __('common.payment_error') }}</h3>
                                <p>{{ __('common.payment_failure_message') }}</p>
                                <h5>{{ __('common.what_you_can_do') }}</h5>
                                <ul>
                                <li>{{ __('common.check_payment_details') }}</li>
                                <li>{{ __('common.contact_bank') }}</li>
                                <li>{{ __('common.try_different_payment') }}</li>
                                </ul>
                                <h5>{{ __('common.need_assistance') }}</h5>
                                <p>{{ __('common.reach_out') }}. {{ __('common.we_are_here') }}</p>
                </div>
            </div>
        </div>
	</section>
	<!-- End About Us -->

@endsection