@extends('backend.layouts.app')

@section('title', __('dashboard.New Role'))


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
                <h4>@lang('dashboard.New Role')</h4>
                </div>
                <div class="card-body">
                @auth
                    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                        @csrf
                        <div class="form-group">
                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            @foreach($permission as $value)
                                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }} {{ $value->title }}</label><br/>
                            @endforeach
                        </div>

                        <div class="card-footer text-right">
                            <button class="btn btn-success"><i class="fas fa-save"></i> @lang('dashboard.Save')</button>
                            <a href="{{ url('admin/roles') }}" class="btn btn-info"><i class="fas fa-arrow-circle-left"></i> @lang('dashboard.Back')</a>
                        </div>
                    {!! Form::close() !!}
                @endauth
                </div>
            </div>
        </div>

    </div>



@endsection
