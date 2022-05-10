@extends('backend.layouts.app')

@section('title', __('dashboard.Clients'))

@section('content')


        <section class="section">
            @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show mb-2 " role="alert">
                    <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    <button type="button" class="close" users-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <ul class="breadcrumb breadcrumb-style ">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <h4 class="page-title m-b-0">@lang('dashboard.Clients')</h4>
                </li>
            </ul>
          <div class="section-body">
            <div class="card note">
              <div class="card-body">
                <div class="page-content note-has-grid">
                  <ul class="nav nav-pills p-3 mb-3 rounded-pill align-items-center">
                    <li class="nav-item">
                      <a href="javascript:void(0)"
                        class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2 active"
                        id="all-category">
                        <i data-feather="check-circle"></i><span class="d-md-block">@lang('dashboard.Add Client')</span>
                      </a>
                    </li>


                  </ul>
                  <div class="tab-content bg-transparent">
                    <div id="note-full-container" class="note-has-grid row">




                                <form action="{{ route('clients.store') }}" class="needs-validation" novalidate="" method="POST"  enctype="multipart/form-data" >
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-row">
                                            @foreach(config('translatable.locales') as $locale)
                                                <div class="form-group col-md-4">
                                                    <label>@lang('dashboard.Name') ({{ strtoupper($locale) }})</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-file-alt"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="{{ $locale }}[name]" value="{{ old($locale . '.name') }}" class="form-control marker" required="">
                                                        <div class="invalid-feedback">
                                                            {{__('Opss Name is Required')}} ! !
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label>@lang('dashboard.Image')</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-image"></i>
                                                            </div>
                                                        </div>
                                                        <input type="file" name="image"  class="form-control file" required>
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        {{__('Opss, Image is Required')}} ! !
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label>@lang('dashboard.Link')</label>
                                                    <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                        <i class="fas fa-globe"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text"  name="link" class="form-control phone-number" placeholder="მ.გ http://kerdzebi.ge" required="">
                                                        <div class="invalid-feedback">
                                                            {{__('Opss Price is Required')}} !
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="status">{{__('Select a Status')}}</label>
                                                    <select class="form-control" name="status">
                                                        <option class="badge badge-success badge-shadow" value="enable">
                                                            <i class="fas fa-check-circle"></i>{{ __('Show') }}
                                                        </option>

                                                        <option class="badge badge-danger badge-shadow" value="disabled">
                                                            <i class="fas fa-check-circle"></i>{{ __('Hide') }}
                                                        </option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        {{__('Opss , Status is Required')}} !
                                                    </div>
                                                </div>

                                            </div>
                                            @foreach(config('translatable.locales') as $locale)
                                                <div class="form-group col-md-12">
                                                    <div class="form-group mb-0">
                                                        <label>@lang('dashboard.Description') ({{ strtoupper($locale) }})</label>
                                                        <textarea class="form-control" name="{{ $locale }}[description]"></textarea>
                                                        <div class="invalid-feedback">
                                                            {{__('Opss , Description is Required')}} !
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>

                                    <div class="card-footer text-right">
                                        <button class="btn btn-success">
                                            <i class="fas fa-save"></i> @lang('dashboard.Save')
                                        </button>
                                        <a href="{{ route ('clients.index') }}" class="btn btn-info">
                                            <i class="fas fa-arrow-circle-left"></i> @lang('dashboard.Back')
                                        </a>
                                    </div>
                                </form>








                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>





@endsection

