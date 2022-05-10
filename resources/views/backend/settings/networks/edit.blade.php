@extends('backend.layouts.app')

@section('title', __('dashboard.Soc Networks'))

@section('content')


    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-2 " role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4>@lang('dashboard.Add')</h4>
                </div>
                <div class="card-body">
                    @auth

                        <form action="{{  route ('networks.update', $network->id) }}" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>@lang('dashboard.Link')</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-globe"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="link" value="{{ $network->link }}" class="form-control marker"
                                        placeholder="https://facebook.com/diem.ge" required="">
                                    <div class="invalid-feedback">
                                        @lang('validation.Opss, This field is required')
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>@lang('dashboard.Icon')</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fab fa-facebook"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="icon" value="{{ $network->icon }}" class="form-control marker"
                                        placeholder="fab fa-facebook">
                                    <div class="invalid-feedback">
                                        @lang('validation.Opss, This field is required')
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>@lang('dashboard.Image')</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-image"></i>
                                        </div>
                                    </div>
                                    <input type="file" name="image" class="form-control file">
                                </div>
                                <div class="invalid-feedback">
                                    {{ __('Opss, Image is Required') }} ! !
                                </div>
                            </div>
                            <div class="form-group">
                                <label>@lang('dashboard.Image')</label>
                                <div class="input-group">
                                    <img src="{{ asset('uploads/settings/' . $network->image) }}" height="70"
                                        alt="{{ $network->name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <p>@lang('dashboard.Frame')</p>
                                <div class="input-group">
                                    <textarea class="form-control" name="frame">{{ $network->frame }}</textarea>
                                    <div class="invalid-feedback">
                                        @lang('validation.Opss, This field is required')
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>
                                    @lang('dashboard.Update') </button>
                            </div>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>

@endsection
