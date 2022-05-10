@extends('backend.layouts.app')

@section('title', __('dashboard.Tables'))

@section('content')
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mb-2 " role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>@lang('dashboard.Token')</h4>
                </div>
                <div class="card-body">
                    <div class="py-4">
                        <p class="clearfix">
                            <span class="float-left">
                                {{$tokenName}}
                            </span>
                            <span class="float-right text-muted">
                                <label class="badge badge-light">{{$token}}</label>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a class="btn btn-primary" href="{{ route('tokens') }}">
                        <i class="fas fa-arrow-circle-left"></i> @lang('dashboard.Back')
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
