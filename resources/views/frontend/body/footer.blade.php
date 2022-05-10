            <div class="footer__builder">
                <div class="container align-center">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="h-titles">
                                <div class="h-subtitle scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    {{-- @lang('Address') --}}
                                    &nbsp;
                                </div>
                                <div class="h-text scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    <div class="readmore">
                                        <a href="{{ route('contact') }}" class="btn-link">{{ __('Join us')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="h-titles">
                                <div class="h-subtitle scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    @lang('Social Networks'):
                                </div>
                            </div>
                            <div class="social-links footer-social-links">
                                @foreach ($networks as $item)
                                    <a target="_blank" href="{{ $item->link }}"
                                        class="scrolla-element-anim-1 scroll-animate" data-animate="active">
                                        <i aria-hidden="true" class="{{ $item->icon }}"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="h-titles">
                                <div class="h-subtitle scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    @lang('Contact Info'):
                                </div>
                                <div class="h-text scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    <p>{{ $setting->email }}<br>{{ $setting->phone }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="copyright-text scrolla-element-anim-1 scroll-animate" data-animate="active">
                                Copyright © {{ date('Y') }} | <a href="https://diem.ge" target="_blank" rel="noopener noreferrer">DMG</a> <sup>®</sup>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
