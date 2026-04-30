@extends('frontend.layouts.master')

@section('title','Towa-Xports || Register Page')

@section('main-content')

    <main>
        <div class="login-page">
        <div class="row">
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-xxl-8 offset-xxl-2 col-xl-10 offset-xl-1 col-md-8 offset-md-2">
                        <div class="gt-comment-form-wrap text-block text-center position-relative">
                             <!-- <a class="login-logo" href="index.php">
                                <img alt="logo" src="assets/img/logo/white-logo.svg">
                              </a> -->
                            <h3 class="mb-5">Create an account</h3>                          
                            <form name="frmRegister" id="frmRegister" action="{{route('register.submit')}}" method="post" class="form-validator">
                            @csrf
                                <div class="row mb-3">
                                    <div class="form-clt mb-3">
                                    <input type="text" name="name" id="name" class="form-control" required placeholder="Name">
                                    @error('name')
                                        <span class="text-danger" id="name-error">{{$message}}</span>
                                    @enderror
                                </div>
                                </div>
                                <div class="form-clt mb-3">
                                    <input type="email" name="email" id="email" class="form-control" required placeholder="Email">
                                    @error('email')
                                        <span class="text-danger" id="email-error">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-clt mb-3">
                                    <input type="password" name="password" class="form-control" id="password" required placeholder="Password">
                                    @error('password')
                                        <span class="text-danger" id="password-error">{{$message}}</span>
                                    @enderror
                                </div>
                                  <div class="checkout-single-bg mb-4 ">
                                       <div class="input-single input-check payment-save">
                                            <input class="form-check-input" name="terms" type="checkbox" value="" id="agre-condtn" required>
                                            <label for="agre-condtn"> I agree to the terms of service <a href="{{ route('pages', 'terms-conditions') }}">Terms & Condition</a>  </a></label>
                                        </div>
</div>
                                <button type="submit" class="gt-theme-btn w-100 mb-5">Create Account</button>
                            </form>
                            <h6>Already have an account? <a href="{{ route('login.form') }}" class="color-primary">Log in</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="img-block">
                    <img src="{{ asset('assets/img/signup.webp') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- 404 Area End  -->


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
            },
            messages: {
                password: {
                    required: "{{ __('common.password_required') }}",
                    minlength: "{{ __('common.password_min') }}"
                },
                email: "{{ __('common.email_required') }}",
                terms: "{{ __('common.terms_required') }}"  // Add this for terms error message
               
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