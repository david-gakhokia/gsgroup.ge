@extends('frontend.layouts.app')

@section('title', __('Contact'))

@section('content')

    <!-- Section Started Heading -->
    <div class="section section-inner started-heading">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <!-- titles -->
                    <div class="h-titles">
                        <div class="h-title splitting-text-anim-2 scroll-animate" data-splitting="chars"
                            data-animate="active">{{__('Contact Us')}}</div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Section Image Large -->
    <div class="section section-inner m-image-large scrolla-element-anim-1 scroll-animate" data-animate="active">
        <div class="image">
            <div class="img js-parallax" style="background-image: url({{ asset('frontend/assets/images/contact.jpg') }});"></div>
        </div>
    </div>

    <!-- Section Contacts Form -->
    <div class="section section-inner m-contacts-form">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                    <!-- titles -->
                    <div class="m-titles">
                        <div class="m-title scrolla-element-anim-1 scroll-animate" data-animate="active">{{ __('Contact form') }}</div>
                    </div>

                    <!-- contact form -->
                    <div class="contacts-form">
                        <form  method="post">
                        {{-- <form id="cform" method="post"> --}}
                            <div class="group">
                                <div class="value scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    <input type="text" name="name" placeholder="{{__('Name')}}">
                                </div>
                            </div>
                            <div class="group">
                                <div class="value scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    <input type="text" name="email" placeholder="{{__('E-mail')}}">
                                </div>
                            </div>
                            <div class="group full">
                                <div class="value scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    <textarea name="message" placeholder="{{ __('Message') }}"></textarea>
                                </div>
                            </div>
                            <div class="submit scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <a href="#" class="btn" onclick="$('#cform').submit(); return false;">
                                    {{ __('Send a Message') }}
                                </a>
                            </div>
                        </form>
                        <div class="alert-success" style="display: none;">
                            <p>Thanks, your message is sent successfully.</p>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                    <!-- titles -->
                    <div class="m-titles">
                        <h2 class="m-title scrolla-element-anim-1 scroll-animate" data-animate="active">{{__('Contact Info')}}</h2>
                    </div>

                    <!-- services -->
                    <div class="services-items row">

                        <div class="services-col col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="services-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <div class="icon">
                                    <i aria-hidden="true" class="fas fa-phone-alt"></i>
                                </div>
                                <div class="name">{{ __('Phone') }}</div>
                                <div class="text">{{ $setting->phone }}</div>
                            </div>
                        </div>

                        <div class="services-col col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="services-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <div class="icon">
                                    <i aria-hidden="true" class="fas fa-at"></i>
                                </div>
                                <div class="name">{{ __('E-mail') }}</div>
                                <div class="text">{{ $setting->email }}</div>
                            </div>
                        </div>

                        <div class="services-col col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="services-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <div class="icon">
                                    <i aria-hidden="true" class="fab fa-font-awesome-flag"></i>
                                </div>
                                <div class="name">{{ __('Address') }}:</div>
                                <div class="text">{{ $setting->address }}</div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
