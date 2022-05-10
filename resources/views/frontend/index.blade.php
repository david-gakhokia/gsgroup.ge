@extends('frontend.layouts.app')

{{-- @section('title', __('Home')) --}}

@section('content')


            <!-- Section  Heading -->
            <div class="section section-inner started-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <!-- titles -->
                            <div class="h-titles">
                                <div class="h-title splitting-text-anim-2 scroll-animate" data-splitting="chars"
                                    data-animate="active">{{ $setting->title }}</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--// Section Heading -->


            <!-- Section Image -->
            <div class="section section-inner m-image-large scrolla-element-anim-1 scroll-animate"
                data-animate="active">
                <div class="image">
                    <div class="img js-parallax"
                        style="background-image: url({{ asset('frontend/assets/images/main_pic.png') }});"></div>
                </div>
            </div>
            <!--// Section Image -->


            <!-- Section About -->
            <div class="section section-inner section-description scrolla-element-anim-1 scroll-animate"
                data-animate="active">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h1>{{ $setting->name }}</h1>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            {{ $setting->description }}
                        </div>

                    </div>
                </div>
            </div>
            <!--// Section Image -->


            <!-- Section Services -->
            <div class="section section-inner m-services">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-12">

                            <!-- titles -->
                            <div class="m-titles">
                                <h2 class="m-title scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    @lang('Our Services')</h2>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <!-- services -->
                            <div class="services-items row">

                                @foreach ($services as $item)
                                    <div class="services-col col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <div class="services-item scrolla-element-anim-1 scroll-animate"
                                            data-animate="active">
                                            <div class="icon">
                                                <i aria-hidden="true" class="{{ $item->icon }}"></i>
                                            </div>
                                            <div class="name">{{ $item->title }}</div>
                                            {{-- <div class="text">{{ $item->description }}</div> --}}
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Section Services -->


            <!-- Section Visions -->
            <div class="section section-inner m-description">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-12">
                            <div class="m-titles">
                                <div class="m-title scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    @lang('Why GSG')</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="description-list-items">
                                @foreach ($visions as $item)
                                    <div class="description-list-item scrolla-element-anim-1 scroll-animate"
                                        data-animate="active">
                                        <div class="desc">
                                            <div class="name">
                                                <span class="number">{{ $item->title }}</span>
                                                {{ $item->description }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Section Visions -->


            <!-- Section Video -->
            <div class="section section-inner m-video-large">
                <div class="video scrolla-element-anim-1 scroll-animate" data-animate="active">
                    <div class="img js-parallax"
                        style="background-image: url({{ asset('frontend/assets/images/blog1.jpg') }});"></div>
                    <iframe class="js-video-iframe"
                        data-src="https://www.youtube.com/embed/Gu6z6kIukgg?showinfo=0&rel=0&autoplay=1"></iframe>
                    <div class="play"></div>
                </div>
            </div>
            <!--// Section Video -->


            <!-- Section Services -->
            <div class="section section-inner m-team">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-12">

                            <!-- titles -->
                            <div class="m-titles">
                                <h2 class="m-title scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    @lang('Our Projects')</h2>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="team-items row">
                                @foreach ($projects as $item)
                                    <div class="team-col col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                        <div class="team-item scrolla-element-anim-1 scroll-animate"
                                            data-animate="active">
                                            <div class="image">
                                                <div class="img">
                                                    @if ($item->image)
                                                        <img src="{{ asset('uploads/projects/' . $item->image) }}"
                                                            alt="">
                                                    @else
                                                        <img
                                                            src="https://st3.depositphotos.com/23594922/31822/v/600/depositphotos_318221368-stock-illustration-missing-picture-page-for-website.jpg" />
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="desc">
                                                <div class="category">{{ $item->title }}</div>
                                                <div class="name">{{ $item->description }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Section Services -->



            <!-- Section Clients -->
            <div class="section section-inner m-partners">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-12">

                            <!-- titles -->
                            <div class="m-titles">
                                <h2 class="m-title scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    @lang('Our Clients')</h2>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <!-- partners -->
                            <div class="partners-box">
                                <div class="partners-items row">
                                    @foreach ($clients as $item)
                                        <div class="partners-col col-xs-12 col-sm-6 col-md-3 col-lg-3 scrolla-element-anim-1 scroll-animate"
                                            data-animate="active">
                                            <div class="partners-item">
                                                <div class="image">
                                                    <a target="_blank" href="{{ $item->link }}"><img
                                                            src="{{ asset('uploads/clients/' . $item->image) }}"
                                                            alt="{{ $item->name }}"></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Section Clients -->


@endsection
