@extends('backend.layouts.app')

@section('title', __('dashboard.Edit'))

@section('content')


    <section class="section">
        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade show mb-2 " role="alert">
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

        <div class="section-body">
            <div class="card note">
                <div class="card-body">
                    <div class="page-content note-has-grid">
                        <ul class="nav nav-pills p-3 mb-3 rounded-pill align-items-center">
                            <li class="nav-item">
                                <a href="#0"
                                    class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2 active"
                                    id="all-category">
                                    <i data-feather="check-circle"></i><span
                                        class="d-md-block">@lang('dashboard.Edit')</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content bg-transparent">
                            <div id="note-full-container" class="note-has-grid row">
                                <form action="{{ route('lives.update', $live->id) }}" class="needs-validation"
                                    method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-row">
                                            @foreach (config('translatable.locales') as $locale)
                                                <div class="form-group col-md-4">
                                                    <label>@lang('dashboard.Name') ({{ strtoupper($locale) }})</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-file-alt"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="{{ $locale }}[name]"
                                                            value="{{ $live->translate($locale)->name }}"
                                                            placeholder="{{ $live->translate($locale)->name }}"
                                                            class="form-control marker" required="">

                                                        <div class="invalid-feedback">
                                                            {{ __('Opss Name is Required') }} ! !
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="row">


                                                <div class="form-group col-md-4">
                                                    <label>@lang('Link')</label>
                                                    <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                        <i class="fas fa-globe"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text"  name="link"  value="{{ $live->link }}" class="form-control phone-number" placeholder="მ.გ http://domain.com">
                                                        <div class="invalid-feedback">
                                                            {{__('Opss Price is Required')}} !
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label>@lang('dashboard.Image')</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-image"></i>
                                                            </div>
                                                        </div>
                                                        <input type="file" name="image" value="{{ $live->image }}"
                                                            class="form-control file">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        {{ __('Opss, Image is Required') }} ! !
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label>@lang('dashboard.Image')</label>
                                                    <img src="{{ asset('uploads/lives/' . $live->image) }}" width="100"
                                                        alt="{{ $live->name }}">
                                                    <div class="invalid-feedback">
                                                        {{ __('Opss, Image is Required') }} ! !
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-2">
                                                    <label for="status">@lang('dashboard.Select a Status')</label>
                                                    <select class="form-control" name="status">
                                                        @if ($live->status = 1)
                                                            <option class="badge badge-success badge-shadow" value="1" selected>
                                                                <i class="fas fa-check-circle"></i> @lang('dashboard.Active')
                                                            </option>
                                                            <option class="badge badge-danger badge-shadow" value="0">
                                                                <i class="fas fa-check-circle"></i> @lang('dashboard.Not active')
                                                            </option>
                                                        @else
                                                            <option class="badge badge-success badge-shadow" value="1"><i
                                                                    class="fas fa-check-circle"></i>
                                                                @lang('dashboard.Active')</option>
                                                            <option class="badge badge-danger badge-shadow" value="0"
                                                                selected><i class="fas fa-check-circle"></i>
                                                                @lang('dashboard.Not active')</option>
                                                        @endif
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        @lang('validation.Opss, This field is required')
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>@lang('Rank')</label>
                                                    <div class="input-group">

                                                        <input type="number" name="rank"  value="{{ $live->rank }}" class="form-control phone-number"
                                                            placeholder="">
                                                        <div class="invalid-feedback">
                                                            {{ __('Opss Price is Required') }} !
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="card-footer text-right">
                                        <button class="btn btn-success">
                                            <i class="fas fa-save"></i> @lang('dashboard.Update')
                                        </button>
                                        <a href="{{ route('lives.index') }}" class="btn btn-info">
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
