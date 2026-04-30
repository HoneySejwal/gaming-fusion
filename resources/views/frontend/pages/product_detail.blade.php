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
       <section class="pageheader-section" style="background-image: url('{{ asset('assets/images/pageheader/bg.jpg') }}');">
		<div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">{{$product_detail->title}}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="{{route('home')}}">{{ __('common.home') }} <span class="ficon"> /  </span> </a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{$product_detail->title}}</li>
                    </ol>
                </nav>
            </div>
		</div>
	</section>
    	<!-- ===========Shop Single Section Ends Here========== -->
    <div class="shop-single padding-top padding-bottom ">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-12 col-12">
                    <article>
                        <div class="product-details">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-12">
                                    @php 
                                        $photo=explode(',', $product_detail->photo);
                                    @endphp
                                    <div class="product-thumb text-center">
<img src="{{ env('WEBSITE_URL') .'/'. $photo[0] }}" alt="shop">
                                        </div>                                  
                                       
                                  
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="post-content">
                                        <h4 class="fw-bold">{{$product_detail->title}}</h4>
                                        <p class="rating" style="display:none;">
                                            @php
        										$rate = ceil($product_detail->getReview->avg('rate'))
        									@endphp
        									@for($i=1; $i<=5; $i++)
        										@if($rate>=$i)
        											<i class="icofont-star"></i>
        										@else 
        											<i class="icofont-star gt-color"></i>
        										@endif
        									@endfor
                                            
                                            ({{$product_detail['getReview']->count()}} reviews)
                                        </p>
                                      <div class="border-top border-bottom pt-3 pb-2 mb-3"> 
                                        <!--<h6>{{ __('common.product_description') }}  </h6>-->
                                        <p>{!! ($product_detail->summary) !!}</p>
</div>
                                        <h4 class="prduct-prce mb-4">{{ $product_detail->getCurrencySymbol() }} {{ Helper::getProductPriceByCurrency(session('currency'), $product_detail) }}</h4>
  <h3 class="" style="display:flex;">
        <input class="form-check-input" type="checkbox" id="addon" style="width:28px;margin-right:15px;margin-top: 2px;">
        {{ __('common.optional_training') }} &nbsp;&nbsp;<a href="#optn_tranadd" ><span > {{ __('common.read_more') }}</span></a>
                                 
                     
                     </h3>       
  <div class="gt-shop-details-content mb-4 text-center" style="padding: 10px 40px;">                      
                                
                                
                            <div class="slider-container mb-4">
    

      <div style="position: relative;" class="we pt-4">
        <h4 class="mb-5 chse_num we">{{ __('common.number_of_hours') }}</h4>
        <div class="p-4 position-relative">
            <input type="range" min="0" max="10" value="0" class="slider" id="product_slider">
              <span class="tooltip1" id="sliderTooltip">1</span>
           </div>   
        </div>
     
                                <p class="prce_snme pb-3  me-5 we"> <strong>{{ __('common.price') }}:</strong> <span class="color-base GGG me-4"> {{ $product_detail->getCurrencySymbol()  }} 
                        <span id="product_price">00</span>            
                                  </span>    
         </p>
          </div> 
         <form action="{{route('single-add-to-cart')}}" method="POST">
					                  @csrf
                                <input type="hidden" name="quant[1]" value="1" id="quantity">
                               <input type="hidden" name="slug" value="{{$product_detail->slug}}">
        <input type="hidden" name="hours" id="product_quantity" value="0">      
                                <div class="gt-button-wrapper ms-5">                                   
                                    <button type="submit" class="default-button colorbtn1"> {{ __('common.add_to_cart') }} </button>
                                </div>
                              </form>      
                           
        </div>                                      
                                        <!--
                                        <form action="{{route('single-add-to-cart')}}" method="POST">
					                    @csrf
                                        <input type="hidden" name="quant[1]" value="1" id="quantity">
                                        <input type="hidden" name="slug" value="{{$product_detail->slug}}">
                                        <button type="submit" class="default-button"><span>Add To Cart</span></button>
                                        </form>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review pt-5 pb-5">
                             <!--<ul class="review-nav lab-ul">
                                <li class="desc active" data-target="description-show">{{ __('common.description') }}</li>
                               <li class="rev " data-target="review-content-show">Reviews ({{$product_detail['getReview']->count() }})</li>
                            </ul>-->
                            <h2 class="text-center"> {{ __('common.description') }} </h2>
                            <div class="review-content description-show border shadow p-2 bg-white">
                                <div class="review-showing">
                                    <ul class="content lab-ul">
                                         @foreach($product_detail['getReview'] as $data)
                                        <li>
                                            <!-- <div class="post-thumb">
                                                <img src="assets/images/clients/01.jpg" alt="shop">
                                            </div> -->
                                            <div class="post-content">
                                                <div class="entry-meta">
                                                    <div class="posted-on">
                                                        {{$data->name}}
                                                        
                                                    </div>
                                                    <div class="rating">
                                                        @for($i=1; $i<=5; $i++)
                                                            @if($data->rate>=$i)
                                                                <i class="icofont-star"></i>
                                                            @else 
                                                                <i class="icofont-star gt-color"></i>
                                                            @endif
                                                        @endfor
                                                        
                                                    </div>
                                                </div>
                                                <div class="entry-content">
                                                    <p>{{$data->review}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div class="client-review">
                                        <div class="review-form">
                                            <div class="review-title">
                                                <h5>Add a Review</h5>
                                            </div>
                                            @auth
                                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
                                            <form action="{{ route('review.store', $product_detail->slug) }}" method="post" >
                                            @csrf
                                                <div class="col-md-4 col-12">
                                                    <div class="rating">
                                                        <span class="rating-title">Your Rating : </span>
                                                        <ul class="star-rating">
                                                            <i class="fas fa-star" data-value="1"></i>
                                                            <i class="fas fa-star" data-value="2"></i>
                                                            <i class="fas fa-star" data-value="3"></i>
                                                            <i class="fas fa-star" data-value="4"></i>
                                                            <i class="fas fa-star" data-value="5"></i>
                                                        </ul>
                                                        <input type="hidden" name="rate" id="rating-value" value="{{ old('rate') }}" required>
                                                        
                                                    </div>
                                                </div>
                                                <p></p>
                                                <div class="col-md-4 col-12">
                                                    <input type="text" name="name" id="name" placeholder="Full Name" required>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <input type="email" name="email" id="email" value="{{ old('email', Auth::user()->email ?? '') }}" placeholder="Email Address" required>
                                                </div>
                                                
                                                <div class="col-md-12 col-12">
                                                    <textarea name="review" id="review" rows="5" placeholder="Type Here Message" required>{{ old('review') }}</textarea>
                                                </div>
                                                <div class="col-12">
                                                    <button class="default-button" type="submit"><span>Submit Review</span></button>
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
                                <div class="description description-show" style="text-align: justify;
    line-height: 30px;">
                                    <p >{!! ($product_detail->description) !!}</p>
                                    <div class="post-item">
                                        <div class="post-thumb">
                                           
                                        </div>
                                        <div class="post-content">
                                            <ul class="lab-ul">
            {!! ($product_detail->extra_description) !!}
                                            </ul>
                                        </div>
                                    </div>
                                     <div id="optn_tranadd"> 
       @if(session('app_locale') == 'ja') 
  <div class="gt-shop-details-content training-addon-section">
  <h3>私たちはあなたのアカウントを後押ししながら、見て、学び、改善</h3>
  <p>
    あなたのブーストサービスへのオプションのアドオンとして提供される私たちの排他的なライブコーチングの経験で次のレベルにあなたのゲー
  </p>
  <p>
    上記のスライダーを使用して時間数を選択することで、あなただけの定期的なブーストを取得していない—あなたは彼らがリアルタイムですべての決定、戦略、およびメカニックをご案内しながら、あなたは私たちのプロのプレーヤーがライブあなたのアカウントを後押し見ることができるパーソナライズされたトレーニングセッションのロックを解除しています。
  </p>
  <p>
    このサービスは、自分のアカウントにランクを上げたいだけでなく、途中でゲームプレイを改善する方法を理解したいプレイヤーに最適です。
  </p>

  <h5 class="mt-4mb-4">トレーニングアドオンには何が含まれていますか？ </h5>
  <ul>
    <li>
      <strong>ライブ観戦アクセス：</strong>画面共有（購入後に利用可能なプラットフォームオプション）を介して、割り当てられたブースタープレイをライブで見ることが これにより、リプレイも編集もなく、純粋でプロフェッショナルなレベルの実行だけで、ゲームプレイを観察できます。
    </li>
    <li>
      <strong>リアルタイムの指示＆解説：</strong>ブースターが再生されると、彼らは彼らの戦略を説明し、重要な決定を呼び出し、彼らの思考プロセスを共有します。 あなたは、彼らが特定の演劇を作る、彼らが行う方法を回転させる、または特定の瞬間に能力/アイテムを使用する理由を正確に学びます。
    </li>
    <li>
      <strong>インタラクティブな学習体験：</strong>質問がありますか？ 明確化したいですか？ セッション中は、好みに応じて、ボイスチャットまたはテキストのいずれかを介してライブで対話できます。 これは没入型コーチング環境にあなたのセッションをオンにします。
    </li>
    <li>
      <strong>スキル開発の焦点：</strong>あなたはポジショニング、意思決定、ゲームセンス、照準、動き、またはメタ戦略を習得しようとしているかどうか-この経験は、より高い
    </li>
  </ul>

  <h5 class="mt-4mb-4">価格設定の仕組み</h5>
  <p>
    このトレーニングアドオンは、上記のスライダーで示されているように、時間あたり<strong></strong>の価格です。 コアブースティングパッケージから<strong>別途料金</strong>で、観察したい時間と訓練したい時間に基づいて時間数を選択することができます。
  </p>

 <h5 class="mt-4mb-4">重要な注意事項</h5>
  <ul>
    <li>
      トレーニングセッションは、あなたのブーストが完了している間に<strong>行われます</strong>ので、あなたのアカウントがリアルタイムで成長を見ることから利益
    </li>
    <li>
      すべてのセッションは<strong>プライベートで安全</strong>です。 第三者は関与していません—あなたとあなたの割り当てられたブースターだけです。
    </li>
   <li>
      このサービスは<strong>完全にオプション</strong>です。 ライブトレーニングなしでブーストのみが必要な場合は、スライダーをスキップして通常どおり続行できます。
    </li>
  </ul>

 <h5 class="mt-4mb-4">アカウントをレベルアップしながらスキルをレベルアップする準備はできていますか？</h5>
  <p>
    上のスライダーを使用してトレーニング時間数を選択し、プロプレーヤーからエリートレベルの洞察をアンロックします。
  </p>
</div>                                       @else  
    <div class="gt-shop-details-content training-addon-section" >
  <h3>Watch, Learn, and Improve While We Boost Your Account</h3>
  <p>
    Take your gaming skills to the next level with our exclusive live coaching experience, offered as an optional add-on to your boosting service.
  </p>
  <p>
    By selecting the number of hours using the slider above, you're not just getting a regular boost — you're unlocking a personalized training session where you can watch our professional player boost your account live, while they guide you through every decision, strategy, and mechanic in real time.
  </p>
  <p>
    This service is perfect for players who not only want their account to climb ranks but also want to understand how to improve their gameplay along the way.
  </p>

  <h5 class="mt-4 mb-4"> What’s Included in the Training Add-On? </h5>
  <ul>
    <li>
      <strong> Live Spectating Access:</strong> You’ll be able to watch your assigned booster play live via screen share (platform options available after purchase). This lets you observe their gameplay as it happens — no replays, no edits — just pure, professional-level execution.
    </li>
    <li>
      <strong> Real-Time Instruction & Commentary:</strong> As the booster plays, they’ll explain their strategies, call out key decisions, and share their thought process. You’ll learn exactly why they make certain plays, rotate the way they do, or use abilities/items at specific moments.
    </li>
    <li>
      <strong> Interactive Learning Experience:</strong> Got questions? Want clarification? You can interact live during the session, either through voice chat or text, depending on your preference. This turns your session into an immersive coaching environment.
    </li>
    <li>
      <strong> Skill Development Focus:</strong> Whether you're trying to master positioning, decision-making, game sense, aiming, movement, or meta strategies — this experience is tailored to teach you what truly works at higher ranks.
    </li>
  </ul>

  <h5 class="mt-4 mb-4"> How Pricing Works </h5>
  <p>
    This training add-on is priced <strong>per hour</strong>, as shown above with the slider. It is <strong>charged separately</strong> from the core boosting package, and you can choose the number of hours based on how long you'd like to observe and train.
  </p>

 <h5 class="mt-4 mb-4"> Important Notes</h5>
  <ul>
    <li>
      The training session is conducted <strong>while your boost is being completed</strong>, so you’ll benefit from seeing your account grow in real time.
    </li>
    <li>
      All sessions are <strong>private and secure</strong>. No third parties involved — just you and your assigned booster.
    </li>
    <li>
      This service is <strong>completely optional</strong>. If you only want the boost without live training, you can skip the slider and proceed as usual.
    </li>
  </ul>

 <h5 class="mt-4 mb-4"> Ready to level up your skills while leveling up your account?</h5>
  <p>
    Use the slider above to select the number of training hours and unlock elite-level insights from pro players.
  </p>
</div>

                                       
@endif                                         

  </div>   
                                </div>
                                
                            </div>
                        </div>
                    </article>
                </div>
               
            </div>
        </div>
    </div>
    </main>

@endsection
@push('styles')
	
@endpush
@push('scripts')
    <script>
           var currency = "{{ session('currency') }}";
         document.addEventListener('DOMContentLoaded', function () {
        const slider = document.getElementById("product_slider");
      const tooltip = document.getElementById("sliderTooltip");
      const priceDisplay = document.getElementById("product_price");
      const quantityInput = document.getElementById("product_quantity");

      //const productPrice = 12;
 const productPrice =   '<?php
                                    if(session('currency') == 'HKD') {
                                        print 257;
                                    }
                            elseif(session('currency') == 'JPY') {
                                        echo 5000;
                                    }
                            else {
                                       echo 35;
                                    }
                               ?>';
      function updateTooltip() {
        const value = parseInt(slider.value);
        const totalPrice = value * productPrice;
        //priceDisplay.textContent = totalPrice.toFixed(2);
          
           if (currency === 'JPY') {
        priceDisplay.textContent = totalPrice.toFixed(0);  
    } else {
        priceDisplay.textContent = totalPrice.toFixed(2);
    }
          
        quantityInput.value = value;
        tooltip.textContent = value;

        const sliderWidth = slider.offsetWidth;
        const min = parseInt(slider.min);
        const max = parseInt(slider.max);
        const percent = (value - min) / (max - min);
        const thumbOffset = percent * sliderWidth;

        tooltip.style.left = `${thumbOffset}px`;
      }

      slider.addEventListener("input", updateTooltip);
      updateTooltip(); 
    });
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
        $('.we').hide(); 
        $('#addon').change(function() {
    if ($(this).is(':checked')) {
      $('.we').slideDown(); 
    } else {
      $('.we').slideUp();
    }
  });
    </script>
@endpush