@extends('backend.layouts.app')

@section('title', __('dashboard.Messages'))

@section('content')


        <section class="section">
            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show mb-2 " role="alert">

            <p><strong>@lang('validation.Opps')</strong> @lang('validation.Something went wrong, please check below errors') </p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>@lang('dashboard.Add New')</h4>
                  </div>
                <form action="{{ route('messages.store') }}" class="needs-validation" novalidate="" method="POST"  enctype="multipart/form-data" >
                    @csrf
                  <div class="card-body">
                    @foreach(config('translatable.locales') as $locale)
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Name') ({{ strtoupper($locale) }})</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="{{ $locale }}[name]" value="{{ old($locale . '.name') }}" class="form-control" required >
                            <div class="invalid-feedback">
                                @lang('validation.Opss, This field is required')
                            </div>
                      </div>
                    </div>
                    @endforeach

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Start Time')</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="datetime-local" name="start_time" class="form-control inputtags"  required>
                            <div class="invalid-feedback">
                                @lang('validation.Opss, This field is required')
                            </div>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.End Time')</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="datetime-local" name="end_time" class="form-control inputtags" required>
                            <div class="invalid-feedback">
                                @lang('validation.Opss, This field is required')
                            </div>
                      </div>
                    </div>



                    @foreach(config('translatable.locales') as $locale)
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Description') ({{ strtoupper($locale) }})</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea name="{{ $locale }}[description]" value="{{ old($locale . '.description') }}" class="summernote-simple">{{ old($locale . '.name') }}</textarea>
                            <div class="invalid-feedback">
                                @lang('validation.Opss, This field is required')
                            </div>
                      </div>
                    </div>
                    @endforeach


                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Image')</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" name="image" id="image-upload" />
                        </div>
                      </div>
                    </div>
{{--
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Icon')</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="icon" class="form-control inputtags">
                      </div>
                    </div> --}}

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Icon')</label>
                      <div class="col-sm-12 col-md-7">

                        <label class="selectgroup-item">
                          <input type="radio" name="icon" value="code-branch" class="selectgroup-input-radio" checked="">
                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" title="{{__('dashboard.Update')}}">
                                <i class="fas fa-code-branch"></i>
                            </span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="icon" value="cloud-download-alt" class="selectgroup-input-radio">
                          <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" title="{{__('dashboard.Backup')}}" ><i class="fas fa-cloud-download-alt"></i></span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="icon" value="chevron-circle-down" class="selectgroup-input-radio">
                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" title="{{__('dashboard.Testing')}}" >
                                <i class="fas fa-chevron-circle-down"></i>
                            </span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="icon" value="code" class="selectgroup-input-radio">
                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" title="{{__('dashboard.Edit')}}" >
                                <i class="fas fa-code"></i>
                            </span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="icon" value="cogs" class="selectgroup-input-radio">
                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" title="{{__('dashboard.Technical issue')}}" >
                                <i class="fas fa-cogs"></i>
                            </span>
                        </label>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Link')</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="link" class="form-control inputtags">
                      </div>
                    </div>


                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Select a Status')</label>
                      <div class="col-sm-12 col-md-7">
                        <select  name="status" class="form-control selectric">
                          <option value="1">Publish</option>
                          <option value="2">Draft</option>
                          <option value="0">Pending</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">@lang('dashboard.Save')</button>
                      </div>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        @endsection


