@extends('backend.layouts.app')

@section('title', __('dashboard.Users'))

@section('content')

            <div class="row">
              <div class="col-12">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-2 " role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" users-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                <div class="card">
                  <div class="card-header">
                    <h4 class="text-left">@lang('dashboard.Users')</h4>
                    <a href="{{ route ('users.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> @lang('dashboard.Add')</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                        <thead>
                          <tr  >
                            <th>@lang('dashboard.User ID')</th>
                            <th>@lang('dashboard.Name')</th>
                            <th>@lang('dashboard.Email')</th>
                            <th>@lang('dashboard.Roles')</th>
                            <th>@lang('dashboard.Action')</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $key => $user)
                          <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $v)
                                    <label class="badge badge-success">{{ $v }}</label>
                                    @endforeach
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('users.show',$user->id) }}" class="btn btn-icon btn-info" users-toggle="tooltip" title="@lang('dashboard.View')">
                                    <i class="far fa-eye"></i>
                                </a>
                                @can('user-edit')
                                    <a href="{{ route('users.edit',$user->id) }}" class="btn btn-icon btn-primary" users-toggle="tooltip" title="@lang('dashboard.Edit')">
                                        <i class="far fa-edit"></i>
                                    </a>
                                @endcan
                                @can('user-delete')
                                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
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
