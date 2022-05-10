@extends('backend.layouts.app')

@section('title', __('dashboard.Calls'))

@section('content')

            <div class="row">

              <div class="col-12">
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
                        <p>ეს ველი სავალდებულოა:</p>
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
                <div class="card">
                  <div class="card-header">
                    <h4 class="text-left">@lang('dashboard.Calls')</h4>
                    {{-- <a href="{{ route ('reservations.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> @lang('dashboard.Add')</a> --}}
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>

                            <th>#</th>
                            <th> @lang('dashboard.Name')</th>
                            <th> @lang('dashboard.Phone')</th>
                            <th> @lang('dashboard.Date')</th>
                            {{-- <th> @lang('dashboard.Status')</th> --}}
                            <th> @lang('dashboard.Action')</th>

                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($reservations as $index => $item)
                          <tr class="text-left">
                            <td>#{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td><a href="tel:{{ $item->phone }}" target="_blank" rel="noopener noreferrer"><i class="fas fa-phone"></i> </a>{{ $item->phone }}</td>
                            <td>{{ $item->created_at }} <i class="far fa-calendar"></i> </td>
                            {{-- <td>
                                  @if($item->status == 1)
                                  <div class="badge badge-info badge-shadow" data-toggle="tooltip" title="" data-original-title="@lang('dashboard.Pending')">
                                    <i class="fas fa-bell"></i>
                                  </div>
                                  @elseif ($item->status == 2)
                                  <div class="badge badge-success badge-shadow">
                                    <i class="fas fa-check-circle" data-toggle="tooltip" title="" data-original-title="@lang('dashboard.Accepted')" ></i>
                                  </div>
                                  @else
                                  <div class="badge badge-danger badge-shadow">
                                    <i class="fas fa-exclamation-triangle" data-toggle="tooltip" title="" data-original-title="@lang('dashboard.Canceled')"></i>
                                  </div>
                                  @endif
                            </td> --}}
                            <td>
                                {{-- <a href="{{ route ('reservations.edit', $item->id) }}" class="btn btn-icon btn-primary" data-toggle="tooltip" data-original-title="@lang('dashboard.Edit')">
                                    <i class="far fa-edit"></i>
                                </a> --}}


                                            @can('reservation-delete')
                                                {!! Form::open(['method' => 'DELETE','route' => ['reservations.destroy', $item->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('X', ['class' => 'btn btn-danger']) !!}
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
