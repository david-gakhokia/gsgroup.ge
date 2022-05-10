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
    <div class="row">
        <div class="col-12 col-md-6 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4>@lang('dashboard.Tokens')</h4>
                </div>
                <div class="card-body">
                    @if (count($tokens) > 0)
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th>@lang('dashboard.Name')</th>
                                <th>@lang('dashboard.Last Used')</th>
                                <th>@lang('dashboard.Action')</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($tokens as $token)
                        <tr class="text-left">
                            <td>{{ $token->name }}</td>
                            <td>{{$token->last_used_at ? $token->last_used_at->diffForHumans() : ''}}</td>
                            <td>

                                @can('table-edit')
                                <a href="#" class="btn btn-icon btn-primary" data-toggle="tooltip" data-original-title="@lang('dashboard.Edit')">
                                    <i class="far fa-edit"></i>
                                </a>
                                @endcan
                                @can('table-delete')
                                    <form action="{{ route('token.destroy', ['token' => $token->id]) }}" method="POST" >
                                    @csrf
                                    @method("DELETE")
                                        <button type="submit" class="btn btn-icon btn-danger"
                                                data-toggle="tooltip"
                                                data-original-title="{{__('dashboard.Delete')}}">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                    @else
                        <p class="text-center">@lang('alerts.You don not have personal access tokens yet')</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4>@lang('dashboard.Add')</h4>
                </div>
                <div class="card-body">
                    @auth
                        <form action="{{ route('token.create') }}" class="needs-validation" novalidate="" method="POST"  enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-file-signature"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="name" id="tokenName" value="{{ old('name') }}" class="form-control marker" placeholder="@lang('dashboard.Name')" required="">
                                    <div class="invalid-feedback">
                                        @lang('validation.Opss, This field is required')
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> @lang('dashboard.Save') </button>
                            </div>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>

@endsection

