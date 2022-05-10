@extends('backend.layouts.app')

@section('title', __('dashboard.Soc Networks'))

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
                    <h4>@lang('dashboard.Soc Networks')</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th>@lang('dashboard.Link')</th>
                                <th>@lang('dashboard.Icon')</th>
                                <th>@lang('dashboard.Image')</th>
                                <th>@lang('dashboard.Action')</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($networks as $index => $item)
                          <tr class="text-left">
                            <td><a href="{{ $item->link }}" target="_blank" rel="noopener noreferrer"><i class="fas fa-link"></i></a>&nbsp; {{ $item->link }}</td>
                            <td><i class="{{ $item->icon }} fa-3x"></i></td>
                            <td>
                                @if ($item->image)
                                    <img src="{{ asset('uploads/settings/'.$item->image) }}"  height="70" alt="{{ $item->name }}">
                                @else
                                    <img src="https://img.icons8.com/windows/100/000000/no-image.png"  height="70"/>
                                @endif
                            </td>
                            <td>

                                @can('setting-edit')
                                <a href="{{ route('network.edit',$item->id) }}" class="btn btn-icon btn-primary" data-toggle="tooltip" data-original-title="@lang('dashboard.Edit')">
                                    <i class="far fa-edit"></i>
                                </a>
                                @endcan

                                {{-- @can('table-delete') --}}
                                    <form action="{{ route('network.destroy',$item->id) }}" method="POST" >

                                    @csrf
                                    @method("DELETE")
                                        <button type="submit" class="btn btn-icon btn-danger"
                                                data-toggle="tooltip"
                                                data-original-title="{{__('dashboard.Delete')}}">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </form>
                                {{-- @endcan --}}
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
                        <form action="{{  route ('networks.store') }}" class="needs-validation" novalidate="" method="POST"  enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group">
                                <label>@lang('dashboard.Link')</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-globe"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="link" class="form-control marker" placeholder="https://facebook.com/diem.ge" required="">
                                    <div class="invalid-feedback">
                                        @lang('validation.Opss, This field is required')
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>@lang('dashboard.Icon')</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fab fa-facebook"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="icon" class="form-control marker" placeholder="fab fa-facebook">
                                    <div class="invalid-feedback">
                                        @lang('validation.Opss, This field is required')
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>@lang('dashboard.Image')</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-image"></i>
                                        </div>
                                    </div>
                                    <input type="file" name="image"  class="form-control file" >
                                </div>
                                <div class="invalid-feedback">
                                    {{__('Opss, Image is Required')}} ! !
                                </div>
                            </div>
                            <div class="form-group">
                                <p>@lang('dashboard.Frame')</p>
                                <div class="input-group">
                                    <textarea class="form-control" name="frame"></textarea>
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






