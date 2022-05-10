@extends('frontend.layouts.app')

@section('title', __('Projects'))

@section('content')


    <div class="b-container">
        <h1 class="b-main-page-h1">@lang('projects.Projects')</h1>

        <div class="b-app-container">
            <div class="b-app-item" id="bx_1373509569_5641">
                <div class="b-photo">
                    <a href="https://nextgroup.ge/projects/wyndham-residence-batumi">
                        <img src="{{ asset('frontend/images/projects/1.jpg') }}" alt="WYNDHAM RESIDENCE BATUMI">
                        <span class="b-live">Live</span>
                        <span class="b-tags">
                            <span class="b-itag">190 @lang('Apartments')</span>

                            <span class="b-itag">48 @lang('Month installment')</span>
                        </span>
                    </a>
                </div>
                <div class="b-app-name">
                    <a href="https://nextgroup.ge/projects/wyndham-residence-batumi">WYNDHAM RESIDENCE BATUMI</a>
                </div>
                <div class="b-app-info">
                    <div class="b-ai-item">კერძო პლაჟი</div>
                    <div class="b-ai-item">15 წუთი ქალაქამდე</div>
                </div>
            </div>

            <div class="b-app-item b-app-item-2c" id="bx_1373509569_5638">
                <div class="b-photo">
                    <a href="#0">
                        <img src="{{ asset('frontend/images/projects/2.jpg') }}" alt="NEXT WHITE">
                        <span class="b-live">Live</span>
                        <span class="b-tags">
                            <span class="b-itag">67 @lang('Apartments')</span>
                            <span class="b-itag">24-@lang('Month installment')</span>
                        </span>
                    </a>
                </div>
                <div class="b-app-name"><a href="#0">NEXT WHITE</a></div>
                <div class="b-app-info">
                    <div class="b-ai-item">ახალი ბულვარი</div>
                    <div class="b-ai-item">პრემიალური აპარტამენტები</div>
                    <div class="b-ai-item">სრულყოფილი მომსახურება</div>
                </div>
            </div>
            <div class="b-app-item b-app-item-3c" id="bx_1373509569_5639">
                <div class="b-photo">
                    <a href="#0">
                        <img src="{{ asset('frontend/images/projects/3.jpg') }}" alt="NEXT GREEN">
                        <span class="b-live">Live</span>
                        <span class="b-tags">
                            <span class="b-itag">26 @lang('Apartments')</span>
                            <span class="b-itag">6-@lang('Month installment')</span>
                        </span>
                    </a>
                </div>
                <div class="b-app-name"><a href="#0">NEXT GREEN</a></div>
                <div class="b-app-info">
                    <div class="b-ai-item">ეკოლოგიური უბანი</div>
                    <div class="b-ai-item">200 მ. ზღვამდე</div>
                    <div class="b-ai-item">მშენებლობა სრულდება</div>
                </div>
            </div>
            <div class="b-app-item b-app-item-2c" id="bx_1373509569_5640">
                <div class="b-photo">
                    <a href="#0">
                        <img src="{{ asset('frontend/images/projects/4.jpg') }}" alt="NEXT APARTMENTS">
                        <span class="b-live">Live</span>
                        <span class="b-tags">
                            <span class="b-itag">328 @lang('Apartments')</span>
                            <span class="b-itag">18- @lang('Month installment')</span>
                        </span>
                    </a>
                </div>
                <div class="b-app-name"><a href="#0">NEXT APARTMENTS</a></div>
                <div class="b-app-info">
                    <div class="b-ai-item">ბათუმის ცენტრი</div>
                    <div class="b-ai-item">200 მ. ზღვამდე</div>
                </div>
            </div>
            <div class="b-app-item b-app-item-3c" id="bx_1373509569_5642">
                <div class="b-photo">
                    <a href="#0">
                        <img src="{{ asset('frontend/images/projects/5.jpg') }}" alt="NEXT ORANGE">
                        <span class="b-tags">
                        </span>
                    </a>
                </div>
                <div class="b-app-name"><a href="#0">NEXT ORANGE</a></div>
                <div class="b-app-info">
                    <div class="b-ai-item">დასრულებული პროექტი</div>
                </div>
            </div>
        </div>
    </div>

@endsection
