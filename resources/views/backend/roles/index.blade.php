@extends('backend.layouts.app')

@section('title', __('dashboard.Roles'))

@section('content')

            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">

                        <div class="card-header">
                            <h4 class="text-right">@lang('dashboard.Roles')</h4>
                            <span class="float-right text-muted">
                                @can('role-create')
                                    <a href="{{ route('roles.create') }}" class="btn btn-icon icon-right btn-primary"><i class="fas fa-plus"></i> @lang('dashboard.Add')</a>
                                @endcan
                            </span>
                        </div>
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show mb-2 " role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr class="text-center" >
                                            <th>#</th>
                                            <th>@lang('dashboard.Permissions')</th>
                                            <th>@lang('dashboard.View')</th>
                                            <th>@lang('dashboard.Edit')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($roles as $key => $role)
                                    <tr class="text-center">
                                        <td>{{ $role->id }}</td>
                                        <td class="badge badge-success" >{{ $role->name }}</td>
                                        <td>
                                            <a href="{{ route('roles.show',$role->id) }}" class="btn btn-icon btn-info" users-toggle="tooltip" title="@lang('dashboard.View')">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </td>
                                        <td>
                                            @can('role-edit')
                                            <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-icon btn-primary" users-toggle="tooltip" title="@lang('dashboard.Edit')">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            @endcan
                                            @can('role-delete')
                                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
