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
                    <h4>@lang('dashboard.Tables')</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th>@lang('dashboard.Number')</th>
                                <th>@lang('dashboard.Sections')</th>
                                <th>@lang('dashboard.Status')</th>
                                <th>QR კოდი</th>
                                <th>@lang('dashboard.Action')</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($tables as $index => $item)
                          <tr class="text-left">
                            <td>#{{ $item->name }}</td>
                            <td>
                                {{ $item->place ? $item->place->name : __('dashboard.Empty') }}
                            </td>
                            <td>
                                @if($item->status == 1)
                                    <div class="badge badge-success badge-shadow">
                                        <i class="far fa-eye"></i> @lang('dashboard.Active')
                                    </div>
                                        @else
                                    <div class="badge badge-danger badge-shadow">
                                        <i class="far fa-eye-slash"></i> @lang('dashboard.Not active')
                                    </div>
                                @endif
                            </td>
                            <td> <a href="{{ route('tables.show',$item->id) }}" ><i class="fas fa-qrcode fa-2x"></i> QR </a></td>
                            <td>
                                {{-- @can('table-list')
                                <a href="{{ route('tables.show',$item->id) }}" class="btn btn-icon btn-info"  data-toggle="tooltip" data-original-title="@lang('dashboard.View')">
                                    <i class="far fa-eye"></i>
                                </a>
                                @endcan --}}
                                @can('table-edit')
                                <a href="{{ route('tables.edit',$item->id) }}" class="btn btn-icon btn-primary" data-toggle="tooltip" data-original-title="@lang('dashboard.Edit')">
                                    <i class="far fa-edit"></i>
                                </a>
                                @endcan
                                @can('table-delete')
                                    <form action="{{ route('tables.destroy',$item->id) }}" method="POST" >
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
                        <form action="{{  route ('tables.store') }}" class="needs-validation" novalidate="" method="POST"  enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group">
                                <p>@lang('dashboard.Table Number')</p>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-file-signature"></i>
                                        </div>
                                    </div>
                                    <input type="number" name="name" value="{{ old('name') }}" class="form-control marker" placeholder="@lang('dashboard.Table Number')" required="">
                                    <div class="invalid-feedback">
                                        @lang('validation.Opss, This field is required')
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <p>@lang('dashboard.Places')</p>
                                <select class="form-control" name="place_id"  required="">
                                        <option value="" disabled selected >@lang('dashboard.Places')</option>

                                    @foreach ($places as $place)
                                        <option value="{{ $place->id }}">{{ $place->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    @lang('validation.Opss, This field is required')
                                </div>
                            </div>

                            <div class="form-group">
                                <p>@lang('dashboard.Select a Status')</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="1" name="status" value="1" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="1">@lang('dashboard.Active')</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="2" name="status" value="0" class="custom-control-input">
                                    <label class="custom-control-label" for="2">@lang('dashboard.Not active')</label>
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

