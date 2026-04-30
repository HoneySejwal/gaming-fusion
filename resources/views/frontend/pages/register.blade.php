@extends('frontend.layouts.master')

@section('title','Register Page')

@section('main-content')

    <main>
        <section class="pageheader-section">
		<div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">{{ __('common.registeration') }} </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('common.home') }}<span class="ficon"> /  </span> </a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ __('common.registeration') }}</li>
                    </ol>
                </nav>
            </div>
		</div>
	</section>
    <div class="login-section padding-top padding-bottom">
        <div class=" container">
            <div class="account-wrapper">
                <h3 class="title">{{ __('common.register_subtext') }}</h3>
                <form name="frmRegister" id="frmRegister" action="{{route('register.submit')}}" method="post" class="account-form">
                            @csrf
                    <div class="form-group">
                        <input type="text" name="name" id="name" required placeholder="{{ __('common.name') }}">
                        @error('name')
                            <span class="text-danger" id="name-error">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" required placeholder="{{ __('common.email') }}">
                        @error('email')
                            <span class="text-danger" id="email-error">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password" required placeholder="{{ __('common.password') }}">
                        @error('password')
                            <span class="text-danger" id="password-error">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="{{ __('common.confirm_password') }}" >
                    </div>
                    <div class="form-group w-100 row">
      <div class="col-md-8">          
<input type="text" id="captcha" name="captcha" autocomplete="off" class="" placeholder="{{ __('common.fill_captcha') }}" required>
                
    @error('captcha')
    <span class="text-danger" id="captcha-error">{{ __('common.captcha_error') }}</span>
    @enderror 
          </div> 
      <div class="col-md-4">                                   
   @captcha 
          </div> 
</div>
                      
                  <div class="d-flex">  
                    <input class="form-check-input" name="terms" type="checkbox" value="" id="agre-condtn" required>
                    <label for="agre-condtn" class="ps-2"> {{ __('common.terms_agreement') }} <a href="{{ route('pages', 'terms-conditions') }}" class="fw-bold ps-2">{{ __('common.terms_policy') }}</a></label>
</div>
                    <div class="form-group mt-4 mb-4">
                        <button type="submit" class="d-block default-button colorbtn1"> {{ __('common.register') }} </button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">{{ __('common.existing_account') }} ? <a href="{{ route('login.form') }}" class="colorbtn1 default-button">{{ __('common.log_in') }}</a></span>                  
                </div>
            </div>
        </div>
    </div>
    </main>



@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $("#frmRegister").validate({
            rules: {
                password: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                terms:"required",
                 captcha: "required",
            },
            messages: {
                password: {
                    required: "{{ __('common.password_required') }}",
                    minlength: "{{ __('common.password_min') }}"
                },
                email: "{{ __('common.email_required') }}",
                terms: "{{ __('common.terms_required') }}" ,
                 captcha: "{{ __('common.fill_it') }}"
                // Add this for terms error message
               
            },
        });
    });
</script>
@endpush
@push('styles')
<style>
    .shop.login .form .btn{
        margin-right:0;
    }
    .btn-facebook{
        background:#39579A;
    }
    .btn-facebook:hover{
        background:#073088 !important;
    }
    .btn-github{
        background:#444444;
        color:white;
    }
    .btn-github:hover{
        background:black !important;
    }
    .btn-google{
        background:#ea4335;
        color:white;
    }
    .btn-google:hover{
        background:rgb(243, 26, 26) !important;
    }
</style>
@endpush