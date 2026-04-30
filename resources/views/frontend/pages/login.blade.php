@extends('frontend.layouts.master')

@section('title','Login Page')

@section('main-content')

    <main>
        <section class="pageheader-section">
		<div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">{{ __('common.log_in') }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="{{route('home')}}">{{ __('common.home') }}  <span class="ficon"> /  </span></a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ __('common.log_in') }}</li>
                    </ol>
                </nav>
            </div>
		</div>
	</section>
	<!-- ===========Banner Section Ends Here========== -->
     <!-- Login Section Section Starts Here -->
    <div class="login-section padding-top padding-bottom">
        <div class=" container">
            <div class="account-wrapper">
                <h3 class="title">{{ __('common.log_in') }}</h3>
                <form name="frmLogin" id="frmLogin" action="{{route('login.submit')}}" method="post" class="account-form">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="{{ __('common.email') }}" value="{{old('email')}}" required>
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}" required placeholder="{{ __('common.password') }}">
                        @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                            <!-- <div class="checkgroup">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">Remember Me</label>
                            </div> -->
                            <a href="{{route('forgetpwd.form')}}">{{ __('common.lost_password_text') }}?</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="d-block default-button colorbtn1"> {{ __('common.login') }} </button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">{{ __('common.dont_have_account') }} <a href="{{ route('register.form') }}"> {{ __('common.sign_up') }}</a></span>
               </div>
            </div>
        </div>
    </div>
    </main>



@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script>
    $(document).ready(function() {
        $("#frmLogin").validate({
			rules: {
				password: {
					required: true,
					minlength: 5
				},
				email: {
					required: true,
					email: true
				}
				
			},
			messages: {
				password: {
					required: "{{ __('common.password_required') }}",
					minlength: "{{ __('common.password_confirmation_min') }}"
				},
				email: "{{ __('common.email_required') }}"
			}
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