@extends('backend.layouts.app')

@section('title', __('dashboard.Add New'))

@section('content')

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

    <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                  <h4>@lang('dashboard.Add New')</h4>
                </div>
                <form action="{{ route('reservations.store') }}" class="needs-validation" novalidate="" method="POST"  enctype="multipart/form-data" >
                        @csrf
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>@lang('dashboard.Name')</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="name" class="form-control marker">
                                    <div class="invalid-feedback">
                                        @lang('validation.Opss, This field is required')
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>@lang('dashboard.Email')</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="far fa-envelope-open"></i>
                                        </div>
                                    </div>
                                    <input type="email" name="email" class="form-control marker">
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label>@lang('dashboard.Phone')</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <input type="phone" name="phone" class="form-control marker">
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label>@lang('dashboard.Date')</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="fas fa-calendar-check"></i>
                                    </div>
                                </div>
                                <input type="date" name="date" class="form-control marker">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>@lang('dashboard.Time')</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="far fa-clock"></i>
                                    </div>
                                </div>
                                <input type="time" name="time" class="form-control marker">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>@lang('dashboard.Person')</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                    <input type="number" name="person"  min="1"  max="15" class="form-control marker">
                                    <div class="invalid-feedback">
                                        შეიყვანეთ მინიმუმ 1 და მაქსიმუმ 15 პერსონა!
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                            </div>


                            <div class="form-group col-md-4">
                                <label for="status">@lang('dashboard.Select a Status')</label>
                                <select class="form-control" name="status">
                                    <option class="badge badge-Light badge-shadow" disabled>@lang('dashboard.Select a Status')</option>

                                    <option class="badge badge-info badge-shadow" value="1">
                                            <i class="fas fa-check-circle"></i>@lang('dashboard.Pending')
                                    </option>

                                    <option class="badge badge-success badge-shadow" value="2">
                                        <i class="fas fa-check-circle"></i>@lang('dashboard.Accepted')
                                    </option>

                                    <option class="badge badge-danger badge-shadow" value="0">
                                        <i class="fas fa-check-circle"></i>@lang('dashboard.Canceled')
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button  type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> @lang('dashboard.Save')
                        </button>
                        <a href="{{ route('reservations.index') }}" class="btn btn-info"><i class="fas fa-arrow-circle-left"></i> @lang('dashboard.Back')</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
