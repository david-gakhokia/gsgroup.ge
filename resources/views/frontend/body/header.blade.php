            <div class="header__builder">

                <!-- logo -->
                <div class="logo-image">
                    <a href="{{ route('/') }}"><img src="{{ asset('uploads/settings/' . $setting->image) }}"
                            alt="logo"></a>
                </div>

                <!-- menu btn -->
                <a href="#" class="menu-btn full"><span></span></a>

                <!-- Menu Full Overlay -->
                <div class="menu-full-overlay">

                    <div class="menu-full-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 offset-1">
                                    <div class="menu-full">
                                        <ul class="menu-full">
                                            <li class="menu-item">
                                                <a class="splitting-text-anim-2" data-splitting="chars"
                                                    href="{{ url('/') }}">{{ __('Home') }}</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="splitting-text-anim-2" data-splitting="chars"
                                                    href="#0">{{ __('Projects') }}</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="splitting-text-anim-2" data-splitting="chars"
                                                    href="{{ url('contact') }}">{{ __('Contact') }}</a>
                                            </li>

                                            <li id="lang">
                                                <a href="?language=ka">
                                                    <p style="font-size: 17px;">{{ __('GEO') }} |</p>
                                                </a>
                                                <a href="?language=en">
                                                    <p style="font-size: 17px;"> {{ __('ENG') }}</p>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-social-links">
                        @foreach ($networks as $item)
                            <a href="{{ $item->link }}" target="blank" class="scrolla-element-anim-1" title="Instagram">
                            <i aria-hidden="true" class="{{ $item->icon }}"></i></a>
                        @endforeach
                    </div>
                </div>
                <!--// Menu Full Overlay -->

            </div>
