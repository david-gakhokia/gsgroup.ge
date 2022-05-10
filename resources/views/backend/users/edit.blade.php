@extends('backend.layouts.app')

@section('title', __('dashboard.Edit'))

@section('content')


<div class="row mt-sm-4">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-12 col-md-12 col-lg-6">
        <div class="card">
            <div class="padding-20">
                <div class="tab-content tab-bordered" id="myTab3Content">

                    {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
                        <div class="card-header">
                        <h4>@lang('dashboard.Edit profile')</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-4 col-12">
                                    <p>@lang('dashboard.Name')</p>
                                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                    <div class="invalid-feedback">
                                        შეიყვანეთ სრული სახელი
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-12">
                                    <p>@lang('dashboard.Email')</p>
                                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                                    <div class="invalid-feedback">
                                        შეიყვანეთ სრული სახელი
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-12">
                                    <p>@lang('dashboard.Roles')</p>
                                    {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                                    <div class="invalid-feedback">
                                        შეიყვანეთ სრული სახელი
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                <p>@lang('dashboard.Password')</p>
                                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                                <div class="invalid-feedback">
                                    შეიყვანეთ პაროლი
                                </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                <p>@lang('dashboard.Confirm Password')</p>
                                {!! Form::password('password_confirmation', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                            </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-success"><i class="fas fa-save"></i> @lang('dashboard.Update')</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-12 col-lg-6">

      <div class="card">
        <div class="card-header">
          <h4>@lang('dashboard.Personal information')</h4>
        </div>
        <div class="card-body">
          <div class="py-4">
            <p class="clearfix">
              <span class="float-left">
                @lang('dashboard.Name')
              </span>
              <span class="float-right text-muted">
                {{ $user->name }}
              </span>
            </p>
            <p class="clearfix">
              <span class="float-left">
                @lang('dashboard.Email')
              </span>
              <span class="float-right text-muted">
                {{ $user->email }}
              </span>
            </p>
            <p class="clearfix">
              <span class="float-left">
                @lang('dashboard.Roles')
              </span>
              <span class="float-right text-muted">
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-light">{{ $v }}</label>
                    @endforeach
                @endif
              </span>
            </p>
          </div>
        </div>
        <div class="card-footer text-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"><i class="fas fa-arrow-circle-left"></i> @lang('dashboard.Back')</a>
        </div>
      </div>
    </div>
</div>


@endsection

