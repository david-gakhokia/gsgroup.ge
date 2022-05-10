@extends('backend.layouts.app')

@section('title', 'Update Reservation')

@section('content')
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mb-2 " role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show mb-2 " role="alert">
        <strong>@lang('validation.Opps')</strong> @lang('validation.Something went wrong, please check below errors')<br><br>
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
                  <h4>{{__('dashboard.Update')}} </h4>
                </div>
                <form action="{{ route('reservations.update', $reservation->id) }}" class="needs-validation"  method="POST"  enctype="multipart/form-data" >
                    @method('PUT')
                    @csrf

                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>{{__('dashboard.Name')}}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="name"  value="{{ $reservation->name }}" class="form-control marker">
                                    <div class="invalid-feedback">
                                        @lang('validation.Opss, This field is required')
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{__('dashboard.Email')}}</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="far fa-envelope-open"></i>
                                    </div>
                                </div>
                                <input type="email" name="email" value="{{ $reservation->email }}" class="form-control marker">
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label>{{__('dashboard.Phone')}}</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <input type="phone" name="phone" value="{{ $reservation->phone }}" class="form-control marker">
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label>{{__('dashboard.Date')}}</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="fas fa-calendar-check"></i>
                                    </div>
                                </div>
                                <input type="date" name="date"  value="{{ $reservation->date }}" class="form-control marker">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>{{__('dashboard.Time')}}</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="far fa-clock"></i>
                                    </div>
                                </div>
                                <input type="time" name="time" value="{{ $reservation->time }}" class="form-control marker">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>{{__('dashboard.Person')}}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                    <input type="number" name="person" value="{{ $reservation->person }}" class="form-control marker">
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="table_id">{{__('dashboard.Select a table')}}</label>
                                <select class="form-control" name="table_id">
                                    <option  disabled>{{__('dashboard.Select a table')}}</option>
                                    @foreach ($tables as $item)
                                        <option value="{{ $item->id }}" {{ $item->id   == $reservation->table_id  ? 'selected': '' }}  > #{{ $item->name }} - {{ $item->place->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="status">{{__('dashboard.Select a Status')}}</label>
                                <select class="form-control" name="status">
                                    <option class="badge badge-Light badge-shadow"  disabled >

                                        @if ($reservation->status   == 1)
                                            {{ __('dashboard.Pending') }}
                                        @elseif ($reservation->status == 2)
                                            {{ __('dashboard.Accepted') }}
                                        @else
                                            {{ __('dashboard.Canceled') }}
                                        @endif
                                    </option>

                                    <option class="badge badge-info badge-shadow" value="1">
                                        <i class="fas fa-check-circle"></i>
                                        {{ __('dashboard.Pending') }}
                                    </option>

                                    <option class="badge badge-success badge-shadow" value="2">
                                        <i class="fas fa-check-circle"></i>
                                        {{ __('dashboard.Accepted') }}
                                    </option>

                                    <option class="badge badge-danger badge-shadow" value="0">
                                        <i class="fas fa-check-circle"></i>
                                        {{ __('dashboard.Canceled') }}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-success">
                            <i class="fas fa-save"></i> @lang('dashboard.Update')
                        </button>
                        <a href="{{ route('reservations.index') }}" class="btn btn-info"><i class="fas fa-arrow-circle-left"></i> @lang('dashboard.Back')</a>
                    </div>
                </form>
            </div>
        </div>

    </div>



@endsection
