@extends('backend.layouts.app')

@section('title', __('dashboard.Permissions'))

@section('content')

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-header">
                            <h4 class="text-right">@lang('dashboard.Permissions')</h4>
                            <span class="float-right text-muted">
                                @can('permission-create')
                                    <a href="{{ route('permissions.create') }}" class="btn btn-icon icon-right btn-primary"><i class="fas fa-plus"></i> @lang('dashboard.Add')</a>
                                @endcan
                            </span>
                        </div>
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show mb-2 " permission="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="close" permissions-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr class="text-left" >
                                            <th>#</th>
                                            <th>@lang('dashboard.Title')</th>
                                            <th>@lang('dashboard.Permissions')</th>
                                            <th>@lang('dashboard.Action')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($permissions as $key => $permission)
                                    <tr >
                                        <td>{{ $permission->id }}</td>
                                        <td >{{ $permission->title }}</td>
                                        <td class="badge badge-success" >{{ $permission->name }}</td>
                                        <td>
                                            <a href="{{ route('permissions.show',$permission->id) }}" class="btn btn-icon btn-info" users-toggle="tooltip" title="@lang('dashboard.View')">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            @can('permission-edit')
                                            <a href="{{ route('permissions.edit',$permission->id) }}" class="btn btn-icon btn-primary" users-toggle="tooltip" title="@lang('dashboard.Edit')">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            @endcan
                                            @can('permission-delete')
                                                {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
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
