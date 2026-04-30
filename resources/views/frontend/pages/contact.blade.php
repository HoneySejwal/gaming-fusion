@extends('frontend.layouts.master')
@section('title','Gaming Fusion || Contact Us')
@section('main-content')  

	@php
		$settings = DB::table('settings')->get();
	@endphp
    <main>
        <section class="pageheader-section" >
		<div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">{{ __('common.contact') }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="{{route('home')}}">{{ __('common.home') }} <span class="ficon"> /  </span> </a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ __('common.contact') }}</li>
                    </ol>
                </nav>
            </div>
		</div>
	</section>
	<!-- ===========PageHeader Section Ends Here========== -->

    <!-- ===========Info Section Ends Here========== -->
    <div class="info-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
				<p>{{ __('common.get_in_touch') }}</p>
				<h2>{{ __('common.write_us') }}</h2>
			</div>
            <div class="section-wrapper">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact-item text-center">
                            <div class="contact-thumb mb-4">
                                <img src="assets/images/contact/icon/01.png" alt="contact-thumb">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">{{ __('common.address')}}</h6>
                                <p>{{ $misc['Company Address'] ?? __('common.company_address') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact-item text-center">
                            <div class="contact-thumb mb-4">
                                <img src="assets/images/about/icon-1.png" alt="contact-thumb">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">{{ __('common.company_info')}}</h6>
                                <p>{{ $misc['Company Name'] ?? __('common.company_name') }}</p>                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact-item text-center">
                            <div class="contact-thumb mb-4">
                                <img src="assets/images/contact/icon/03.png" alt="contact-thumb">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">{{ __('common.email')}}</h6>
                                <p>{{ $misc['Company Email'] ?? __('common.company_email') }}</p>                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- ===========Info Section Ends Here========== -->


	<!-- ===========Contact Section Ends Here========== -->
    <div class="contact-section">
        <div class="contact-top padding-top padding-bottom" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="contact-form-wrapper text-center">
                            <h2 class="mb-5">{{ __('common.write_us2')}}</h2>
                            <form  method="POST" action="{{ route ('contact.send') }}" id="contactForm" class="contact-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" id="name" name="name" required="required" placeholder="{{ __('common.name') }}">
                                    
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="{{ __('common.email') }}" id="email" name="email" required>
                                    
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="{{ __('common.phone') }}" id="phone" name="phone" required>
                                    
                                </div>
                                <div class="form-group">
                                    
                                    <input type="text" placeholder="{{ __('common.your_subject') }}" id="subject" name="subject" required>
                                </div>
                                <div class="form-group w-100">
                                    <textarea name="message" rows="8" id="message" placeholder="{{ __('common.enter_message') }}" required></textarea>
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
                                <div class="form-group w-100 text-center">
                                    <button name="submit" type="submit" id="submit" class="default-button colorbtn2"> {{ __('common.send_message')}} </button>
                                    
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    </main>

    
@endsection

@push('styles')
<style>
	.modal-dialog .modal-content .modal-header{
		position:initial;
		padding: 10px 20px;
		border-bottom: 1px solid #e9ecef;
	}
	.modal-dialog .modal-content .modal-body{
		height:100px;
		padding:10px 20px;
	}
	.modal-dialog .modal-content {
		width: 50%;
		border-radius: 0;
		margin: auto;
	}
    .error {
		color: #FF0000;
	}
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script>
    $(document).ready(function() {
        $("#contactForm").validate({
            rules: {
                name: "required",
                subject: "required",
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    minlength: 10
                },
                message: "required",
                captcha: "required",
            },
            messages: {
                name: "{{ __('common.name_required') }}",
                subject: "{{ __('common.subject_required') }}",
                email: "{{ __('common.email_required') }}",
                phone: {
                    required: "{{ __('common.phone_required') }}",
                    minlength: "{{ __('common.phone_min') }}"
                },
                message: "{{ __('common.message_required') }}",
                captcha: "{{ __('common.fill_it') }}"
            }
        });
    });
</script>

<script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/js/contact.js') }}"></script>
@endpush