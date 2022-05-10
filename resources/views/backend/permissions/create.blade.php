@extends('backend.layouts.app')

@section('title', __('dashboard.New Permission'))


@section('content')
    @if(session('success'))
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
                <h4>@lang('dashboard.New Permission')</h4>
                </div>
                <div class="card-body">
                @auth
                    {!! Form::open(array('route' => 'permissions.store','method'=>'POST')) !!}
                        @csrf
                        <div class="form-group">
                            <p>@lang('dashboard.Title')</p>
                            {!! Form::text('title', null, array('placeholder' => 'title','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <p>@lang('dashboard.Name')</p>
                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                        </div>


                        <div class="card-footer text-right">
                            <button class="btn btn-success"><i class="fas fa-save"></i> @lang('dashboard.Save')</button>
                            <a href="{{ route('permissions.index') }}" class="btn btn-info"><i class="fas fa-arrow-circle-left"></i> @lang('dashboard.Back')</a>
                        </div>
                    {!! Form::close() !!}
                @endauth
                </div>
            </div>
        </div>

    </div>



@endsection
