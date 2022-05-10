@extends('backend.layouts.app')

@section('title', __('dashboard.Edit'))

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-left">@lang('dashboard.Edit')</h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('places.update',$place->id) }}" class="needs-validation"  method="POST"  enctype="multipart/form-data" >
                        @method('PUT')
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
                                            <input type="text" name="{{ $locale }}[name]" value="{{ $place->translate($locale)->name}}"
                                                placeholder="{{ $place->translate($locale)->name}}" class="form-control marker" required="">

                                            <div class="invalid-feedback">
                                                {{__('Opss Name is Required')}} ! !
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                @foreach(config('translatable.locales') as $locale)
                                    <div class="form-group col-md-4">
                                        <label>@lang('dashboard.Description') ({{ strtoupper($locale) }})</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-file-signature"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="{{ $locale }}[description]" value="{{ $place->translate($locale)->description}}"
                                                placeholder="{{ $place->translate($locale)->description}}" class="form-control marker">

                                            <div class="invalid-feedback">
                                                {{__('Opss Name is Required')}} ! !
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>@lang('dashboard.Image')</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-image"></i>
                                            </div>
                                        </div>
                                        <input type="file" name="image"   value="{{ $place->image }}" class="form-control file">
                                    </div>
                                    <div class="invalid-feedback">
                                        {{__('Opss, Image is Required')}} ! !
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <img src="{{ asset('uploads/places/'.$place->image) }}" width="250" alt="{{ $place->name }}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="status">@lang('dashboard.Select a Status')</label>
                                    <select class="form-control" name="status">
                                        <option class="badge badge-success badge-shadow" value="1">
                                            <i class="fas fa-check-circle"></i>@lang('dashboard.Active')
                                        </option>
                                        <option class="badge badge-danger badge-shadow" value="2">
                                            <i class="fas fa-check-circle"></i>@lang('dashboard.Not active')
                                        </option>
                                    </select>
                                    <div class="invalid-feedback">
                                        {{__('Opss , Status is Required')}} !
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-success">
                                <i class="fas fa-save"></i> @lang('dashboard.Update')
                            </button>
                            <a href="{{ route ('places.index') }}" class="btn btn-info">
                                <i class="fas fa-arrow-circle-left"></i> @lang('dashboard.Back')
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
