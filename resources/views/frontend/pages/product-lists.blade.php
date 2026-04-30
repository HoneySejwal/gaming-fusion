@extends('frontend.layouts.master')
@if(isset($category->title) && $category->title)
    @section('title', $category->title)
    @section('description', $category->summary)
@else
    @section('title', 'All Games List')
    @section('description', 'Games List')
@endif
@section('main-content')
    <main>
       <section class="pageheader-section">
		<div class="container">
            <div class="section-wrapper text-center text-uppercase">
                
                @foreach ($products as $product_detail)
                                        @endforeach 
                <h2 class="pageheader-title">
                   @if(app()->getLocale() == 'ja') {{ $products->first()->cat_info->title_jp ?? 'Shop' }} @else {{ $products->first()->cat_info->title }} @endif
 <!-- {{session('app_locale')=='ja' ? $product_detail->cat_info->title_jp : $product_detail->cat_info->title}}                 -->
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('common.home') }}<span class="ficon"> /  </span> </a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{session('app_locale')=='ja' ? $product_detail->cat_info->title_jp : $product_detail->cat_info->title}}
                      
                        </li>
                    </ol>
                </nav>
            </div>
		</div>
	</section>
	<!-- ===========PageHeader Section Ends Here========== -->



	<!-- ===========Shop Section Ends Here========== -->
    <div class="shop-page padding-top padding-bottom aside-bg">
        <div class="container">
            <div class="row justify-content-center pb-15">
                <div class="col-lg-12 col-12">
                    <article>
                        
                        <div class="shopimg-info pt-1 mb-5">
						  <div class="shop-uimg mx-auto">
         <img src="{{ env('WEBSITE_URL') . ($products->first()->cat_info->photo ?? 'assets/images/free-fire.jpg') }}" alt="Category Image" class="shadow img-fluid">
  </div>
<p class="p-4"> 
 {{session('app_locale')=='ja' ? $product_detail->cat_info->summary_jp : $product_detail->cat_info->summary}}                           
                            
                            </p>
                            
                            
                          
</div>
                        <div class="shop-product-wrap grid row justify-content-center g-4">
                        @if(count($products))
                            @foreach($products as $product)    
                        <div class="col-lg-4 col-md-6 col-12">
                                <div class="effect effect-two">
                                     @php 
                                            $photo=explode(',',$product->photo);
                                        @endphp
                      <img src="{{ asset($photo[0]) }}" alt="shop">
   <div class="tab-text">
    <form action="{{ route('single-add-to-cart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="quant[1]" class="qty-input" data-min="1" data-max="1000" value="1" id="quantity">
                                        <input type="hidden" name="slug" value="{{ $product->slug }}">
                                        <div class="product-action-link custom-wcart">
                                            <!-- <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                            <a href="#"><i class="icofont-heart"></i></a> -->
                                            <button type="submit" style="background:none;"><a>
                                               <i class="icofont-ui-cart text-white"></i></a></button>
                                        </div>
                                        </form>
     <h3><a href="{{route('product-detail', $product->slug)}}">
 {{session('app_locale')=='ja' ? $product_detail->cat_info->title_jp : $product_detail->cat_info->title}}                                            
                                          
                                            
                                            </a></h3>
     <p class="nprice"> {{ $product->getCurrencySymbol() }} 
                                         
    {{ Helper::getProductPriceByCurrency(session('currency'), $product) }}    </p>
</div>    
</div>                            
</div>
                            
                         @endforeach
                        @else
                            <h4 class="text-warning" style="margin:100px auto;">There are no products.</h4>
                        @endif 
                       
                        </div>
                        
                    </article>
                </div>
              
            </div>
            
        </div>
    </div> 
    </main>

@endsection
@push ('styles')

@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    {{-- <script>
        $('.cart').click(function(){
            var quantity=1;
            var pro_id=$(this).data('id');
            $.ajax({
                url:"{{route('add-to-cart')}}",
                type:"POST",
                data:{
                    _token:"{{csrf_token()}}",
                    quantity:quantity,
                    pro_id:pro_id
                },
                success:function(response){
                    console.log(response);
					if(typeof(response)!='object'){
						response=$.parseJSON(response);
					}
					if(response.status){
						swal('success',response.msg,'success').then(function(){
							document.location.href=document.location.href;
						});
					}
					else{
                        swal('error',response.msg,'error').then(function(){
							// document.location.href=document.location.href;
						}); 
                    }
                }
            })
        });
	</script> --}}
	<script>
        $(document).ready(function(){
            
            $(document).ready(function() {
  $('#sel1').change(function() {
    var catlink = $(this).val();
    if (catlink) {
      window.location.href = catlink;
    }
  });
});
            
        /*----------------------------------------------------*/
        /*  Jquery Ui slider js
        /*----------------------------------------------------*/
        if ($("#slider-range").length > 0) {
            const max_value = parseInt( $("#slider-range").data('max') ) || 500;
            const min_value = parseInt($("#slider-range").data('min')) || 0;
            const currency = $("#slider-range").data('currency') || '';
            let price_range = min_value+'-'+max_value;
            if($("#price_range").length > 0 && $("#price_range").val()){
                price_range = $("#price_range").val().trim();
            }
            
            let price = price_range.split('-');
            $("#slider-range").slider({
                range: true,
                min: min_value,
                max: max_value,
                values: price,
                slide: function (event, ui) {
                    $("#amount").val(currency + ui.values[0] + " -  "+currency+ ui.values[1]);
                    $("#price_range").val(ui.values[0] + "-" + ui.values[1]);
                }
            });
            }
        if ($("#amount").length > 0) {
            const m_currency = $("#slider-range").data('currency') || '';
            $("#amount").val(m_currency + $("#slider-range").slider("values", 0) +
                "  -  "+m_currency + $("#slider-range").slider("values", 1));
            }
        })
    </script>

@endpush