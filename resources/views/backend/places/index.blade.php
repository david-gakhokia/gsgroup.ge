@extends('backend.layouts.app')

@section('title', __('dashboard.Place'))


@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible fade show mb-2 " role="alert">
        <strong>@lang('validation.Opps')</strong> @lang('validation.Something went wrong, please check below errors')<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        <button type="button" class="close" users-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <div class="row">



        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>@lang('dashboard.Places')</h4>
                </div>

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>

                            <th>@lang('dashboard.Name')</th>
                            <th>@lang('dashboard.Description')</th>
                            <th>@lang('dashboard.Image')</th>
                            <th>@lang('dashboard.Status')</th>
                            <th>@lang('dashboard.Action')</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($places as $item)
                          <tr class="text-center">
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                @if ($item->image)
                                    <img src="{{ asset('uploads/places/'.$item->image) }}" width="50" alt="{{ $item->name }}">
                                @else
                                    <img src="https://img.icons8.com/windows/36/000000/no-image.png"/>
                                @endif

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
                            <td>
                            @can('place-edit')
                            <a href="{{ route('places.edit',$item->id) }}" class="btn btn-icon btn-primary" data-toggle="tooltip" data-original-title="@lang('dashboard.Edit')">
                                <i class="far fa-edit"></i>
                            </a>
                            @endcan
                            @can('place-delete')
                                <form action="{{ route('places.destroy',$item->id) }}" method="POST" >
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


        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>@lang('dashboard.Add New')</h4>
                </div>

                @auth
                <form action="{{  route ('places.store') }}" class="needs-validation" novalidate="" method="POST"  enctype="multipart/form-data" >
                    @csrf
                    <div class="card-body">
                        <div class="form-row">
                            @foreach(config('translatable.locales') as $locale)
                            <div class="form-group col-md-6">
                                <label>@lang('dashboard.Name') ({{ strtoupper($locale) }})</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-file-alt"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="{{ $locale }}[name]" value="{{ old($locale . '.name') }}" class="form-control marker" required="">
                                    <div class="invalid-feedback">
                                        {{__('Opss Name is Required')}} ! !
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label>@lang('dashboard.Description') ({{ strtoupper($locale) }})</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-file-signature"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="{{ $locale }}[description]" value="{{ old($locale . '.description') }}" class="form-control marker" required="">
                                    <div class="invalid-feedback">
                                        {{__('Opss Description is Required')}} ! !
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="form-group col-md-6">
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

                            <div class="form-group col-md-6">
                                <label for="status">@lang('dashboard.Select a Status')</label>
                                <select class="form-control" name="status">
                                    <option class="badge badge-success badge-shadow" value="1">
                                        <i class="fas fa-check-circle"></i>@lang('dashboard.Active')
                                    </option>

                                    <option class="badge badge-danger badge-shadow" value="0">
                                        <i class="fas fa-check-circle"></i>@lang('dashboard.Not active')
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    {{__('Opss , Status is Required')}} !
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-success">
                                <i class="fas fa-save"></i> @lang('dashboard.Save')
                            </button>
                            <a href="{{ route ('clients.index') }}" class="btn btn-info">
                                <i class="fas fa-arrow-circle-left"></i> @lang('dashboard.Back')
                            </a>
                        </div>
                    </div>
                </form>
                @endauth

            </div>
        </div>


    </div>

@endsection

