@extends('backend.layouts.app')

@section('title', __('dashboard.New user'))

@section('content')


<div class="row mt-sm-4">
    <div class="col-12 col-md-12 col-lg-12">
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
        <div class="card">
            <div class="padding-20">
                <div class="tab-content tab-bordered" id="myTab3Content">
                    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                        <div class="card-header">
                        <h4>@lang('dashboard.New user')</h4>
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
                                        შეიყვანეთ ელ.ფოსტა
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-12">
                                    <p>@lang('dashboard.Permission')</p>
                                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                    <div class="invalid-feedback">
                                        შეიყვანეთ პრივილეგია
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
                            <button class="btn btn-success"><i class="fas fa-save"></i> @lang('dashboard.Save')</button>
                            <a href="{{ route('users.index') }}" class="btn btn-info"><i class="fas fa-arrow-circle-left"></i> @lang('dashboard.Back')</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

</div>


@endsection

