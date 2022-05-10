
@extends('backend.layouts.app')

@section('title', 'Settings')

@section('content')
      <!-- Main Content -->
    <form method="POST"  enctype="multipart/form-data" action="{{ route('setting.store')}}"  class="needs-validation">
        @csrf
      <div class="row mt-sm-4">
        {{-- ძირითადი პარამეტრები --}}

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>@lang('dashboard.Settings')</h4>

                <div class="text-right">
                    <h4>
                        @if($errors)
                            @foreach($errors->all() as $error)
                            <p class="text-danger">{{$error}}</p>
                            @endforeach
                        @endif

                        @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                        @endif
                    </h4>
                </div>
              </div>
                <div class="card-body">
                    <div class="form-row">

                        <div class="form-group col-md-3">
                            <label>@lang('dashboard.Logo')</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </div>
                                <input type="file" name="logo" id="logo" class="form-control file">
                            </div>
                            <div class="invalid-feedback">
                                @lang('validation.Opss, This field is required')
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>@lang('dashboard.Logo')</label>
                            <div class="input-group">
                                @if ($setting->logo)
                                    <img src="{{ asset('uploads/settings/'.$setting->logo) }}"  height="100" alt="{{ $setting->logo }}">
                                @else
                                    <img src="https://img.icons8.com/windows/100/000000/no-image.png"  height="150"/>
                                @endif
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>@lang('dashboard.Image')</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </div>
                                <input type="file" name="image" id="image" class="form-control file">
                            </div>
                            <div class="invalid-feedback">
                                @lang('validation.Opss, This field is required')
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>@lang('dashboard.Image')</label>
                            <div class="input-group">
                                @if ($setting->image)
                                    <img src="{{ asset('uploads/settings/'.$setting->image) }}"  height="150" alt="{{ $setting->name }}">
                                @else
                                    <img src="https://img.icons8.com/windows/100/000000/no-image.png"  height="150"/>
                                @endif
                            </div>
                        </div>



                        @foreach(config('translatable.locales') as $locale)
                        <div class="form-group col-md-4">
                            <label>@lang('dashboard.Title') ({{ strtoupper($locale) }})</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                </div>
                                <input type="text" name="{{ $locale }}[title]" @if($setting) value="{{ $setting->translate($locale)->title}}" @endif class="form-control marker">
                                <div class="invalid-feedback">
                                    @lang('validation.Opss, This field is required')
                                </div>
                            </div>
                        </div>
                        @endforeach

                        @foreach(config('translatable.locales') as $locale)
                        <div class="form-group col-md-4">
                            <label>@lang('dashboard.Name') ({{ strtoupper($locale) }})</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                </div>
                                <input type="text" name="{{ $locale }}[name]"  @if($setting) value="{{ $setting->translate($locale)->name}}" @endif  class="form-control marker">
                                <div class="invalid-feedback">
                                    @lang('validation.Opss, This field is required')
                                </div>
                            </div>
                        </div>
                        @endforeach

                        @foreach(config('translatable.locales') as $locale)
                        <div class="form-group col-md-12">
                            <div class="form-group mb-0">
                                <label>@lang('dashboard.Description') ({{ strtoupper($locale) }})</label>
                                <textarea class="form-control"   name="{{ $locale }}[description]">@if($setting){{$setting->translate($locale)->description}}@endif</textarea>
                                <div class="invalid-feedback">
                                    @lang('validation.Opss, This field is required')
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach(config('translatable.locales') as $locale)
                        <div class="form-group col-md-4">
                            <label>@lang('dashboard.Address') ({{ strtoupper($locale) }})</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                </div>
                                <input type="text" name="{{ $locale }}[address]" @if($setting) value="{{ $setting->translate($locale)->address}}" @endif class="form-control marker">
                            </div>
                        </div>
                        @endforeach

                        <div class="form-group col-md-6">
                            <label>@lang('dashboard.Phone')</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <input type="text" name="phone"  @if($setting) value="{{$setting->phone}}" @endif  class="form-control marker">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>@lang('dashboard.Email')</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                                <input type="text" name="email" @if($setting) value="{{$setting->email}}" @endif class="form-control marker">
                            </div>
                        </div>

                        @foreach(config('translatable.locales') as $locale)
                        <div class="form-group col-md-3">
                            <label style="color: rgba(5, 233, 43, 0.637)" >@lang('dashboard.Start Time') ({{ strtoupper($locale) }})</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                <input type="text" name="{{ $locale }}[start_time_text]" @if($setting) value="{{ $setting->translate($locale)->start_time_text}}" @endif class="form-control marker" >
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label style="color: rgba(233, 77, 77, 0.699)" >@lang('dashboard.End Time') ({{ strtoupper($locale) }})</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-user-clock"></i>
                                    </div>
                                </div>
                                <input type="text" name="{{ $locale }}[end_time_text]" @if($setting) value="{{ $setting->translate($locale)->end_time_text}}" @endif class="form-control marker">
                            </div>
                        </div>
                        @endforeach
                        <div class="form-group col-md-6">
                            <label>@lang('dashboard.Working Hours')</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                <input type="time" name="start_time"  @if($setting) value="{{$setting->start_time}}" @endif  class="form-control">
                                <input type="time" name="end_time"  @if($setting) value="{{$setting->end_time}}" @endif    class="form-control">
                                <div class="invalid-feedback">
                                    @lang('validation.Opss, This field is required')
                                </div>
                            </div>
                        </div>

                    </div>

              </div>
              <div class="card-footer text-right">
                <button class="btn btn-success mr-1" type="submit"><i class="fas fa-save"></i> @lang('dashboard.Save')</button>
                {{-- <button class="btn btn-secondary" type="reset"><i class="fas fa-circle-notch"></i> @lang('dashboard.Back')</button> --}}
              </div>
            </div>
        </div>
        {{-- ძირითადი პარამეტრები --}}

        {{-- <div class="col-12 col-md-12 col-lg-6">

            <div class="card author-box">
                <div class="card-body">
                    <div class="author-box-center">
                        <img alt="image" src="" width="150">
                        <div class="clearfix"></div>
                        <div class="author-box-name">
                        <p>ლოგო</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="author-box-description">
                            <div class="custom-file">
                                <input  @if($setting) value="{{$setting->logo}}" @endif type="file" name="logo"  class="custom-file-input"  >
                                <label class="custom-file-label" for="image">ლოგოს ატვირთვა</label>
                            </div>
                        </div>
                        <div class="w-100 d-sm-none"></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="author-box-center">
                        <img alt="image" src="@if($setting) {{ asset('/backend/images/settings/'.$setting->logo) }} @endif" width="150">
                        <div class="clearfix"></div>
                        <div class="author-box-name">
                        <p>ლოგო</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="author-box-description">
                            <div class="custom-file">
                                <input  @if($setting) value="{{$setting->logo}}" @endif type="file" name="logo"  class="custom-file-input"  >
                                <label class="custom-file-label" for="image">ლოგოს ატვირთვა</label>
                            </div>
                        </div>
                        <div class="w-100 d-sm-none"></div>
                    </div>
                </div>
            </div>



            <div class="card">
                <div class="card-header">
                  <h4>სოციალური ქსელები</h4>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Facebook URL">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Instagram URL">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Linkedin URL">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text-right">
                                <button class="btn btn-success"><i class="fas fa-save"></i> შენახვა</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>

        </div> --}}

      </div>
    </form>
      <!-- Main Content -->

@endsection
