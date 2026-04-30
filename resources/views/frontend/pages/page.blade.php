@extends('frontend.layouts.master')

@section('title', $page_data->page_title)

@section('description','Policy')
@section('main-content')
<style>
    .page4 h2 {
        display: none;
    }
    .page4 h3 {
        margin-top:20px;
    }
    .page4 ul li {
        line-height:30px;
    }
</style>
<main>
         <section class="pageheader-section" style="background-image: url('{{ asset('assets/images/pageheader/bg.jpg') }}');">
		<div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">{{ $page_data->page_title }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('common.home') }} <span class="ficon"> /  </span> </a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $page_data->page_title }}</li>
                    </ol>
                </nav>
            </div>
		</div>
	</section>
    <div class="page4 p-4">
        <div class="container">
        {!! $page_data->page_desc !!}
        </div>
      </div>  
</main>
@endsection