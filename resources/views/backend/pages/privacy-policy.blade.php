
@extends('backend.layouts.app')

@section('title', __('Privacy Policy'))

@section('content')
      <!-- Main Content -->
    <form method="POST"  enctype="multipart/form-data" action="{{ route('privacy-policy.store')}}"  class="needs-validation">
        @csrf
      <div class="row mt-sm-4">
        {{-- ძირითადი პარამეტრები --}}

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>@lang('Privacy Policy')</h4>

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

                        @foreach(config('translatable.locales') as $locale)
                        <div class="form-group col-md-4">
                            <label>@lang('dashboard.Title') ({{ strtoupper($locale) }})</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                </div>
                                <input type="text" name="{{ $locale }}[title]" @if($privacy_policy) value="{{ $privacy_policy->translate($locale)->title}}" @endif class="form-control marker">
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
                                <input type="text" name="{{ $locale }}[name]"  @if($privacy_policy) value="{{ $privacy_policy->translate($locale)->name}}" @endif  class="form-control marker">
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
                                <textarea class="form-control"   name="{{ $locale }}[description]">@if($privacy_policy){{$privacy_policy->translate($locale)->description}}@endif</textarea>
                                <div class="invalid-feedback">
                                    @lang('validation.Opss, This field is required')
                                </div>
                            </div>
                        </div>
                        @endforeach


                        

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
                                <input  @if($privacy_policy) value="{{$privacy_policy->logo}}" @endif type="file" name="logo"  class="custom-file-input"  >
                                <label class="custom-file-label" for="image">ლოგოს ატვირთვა</label>
                            </div>
                        </div>
                        <div class="w-100 d-sm-none"></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="author-box-center">
                        <img alt="image" src="@if($privacy_policy) {{ asset('/backend/images/privacy_policys/'.$privacy_policy->logo) }} @endif" width="150">
                        <div class="clearfix"></div>
                        <div class="author-box-name">
                        <p>ლოგო</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="author-box-description">
                            <div class="custom-file">
                                <input  @if($privacy_policy) value="{{$privacy_policy->logo}}" @endif type="file" name="logo"  class="custom-file-input"  >
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
