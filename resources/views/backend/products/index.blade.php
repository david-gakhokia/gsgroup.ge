@extends('backend.layouts.app')

@section('title', __('dashboard.Products'))

@section('content')

    <section class="section">
        <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">
                <i data-feather="home"></i></a>
            </li>
            <li class="breadcrumb-item">
            <h4 class="page-title m-b-0">@lang('dashboard.Products')</h4>
            </li>
        </ul>


        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>@lang('dashboard.Products')</h4>
                        <h4 class="nav-item ml-auto">
                        <a href="{{ route ('products.create')  }}" class="btn btn-icon icon-left btn-success rounded-pill">
                            <i class="fas fa-plus"></i> @lang('dashboard.Add')</a>
                        </h4>
                    </div>

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
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th class="text-left">
                              #
                            </th>
                            <th>{{ __('dashboard.Name') }}</th>
                            <th>{{ __('dashboard.Description') }}</th>
                            <th>{{ __('dashboard.Image') }}</th>
                            <th>{{ __('dashboard.Category') }}</th>
                            <th>{{ __('dashboard.Price') }}</th>
                            <th>{{ __('dashboard.Status') }}</th>
                            <th>{{ __('dashboard.Action') }}</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($products as $index => $item)
                          <tr class="text-left">
                            <td>
                             {{$index+1}}
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                @if ($item->image)
                                    <img src="{{ asset('uploads/products/'.$item->image) }}"  height="70" alt="{{ $item->name }}">
                                @else
                                    <img src="https://img.icons8.com/windows/100/000000/no-image.png"  height="70"/>
                                @endif
                            </td>
                            <td>{{ $item->category ? $item->category->name : 'Uncategorized' }}</td>
                            <td>{{ $item->price }} ₾</td>
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
                                <a href="{{ route ('products.edit',$item->id) }}" class="btn btn-icon btn-primary" data-toggle="tooltip" title="{{__('dashboard.Edit')}}">
                                    <i class="far fa-edit"></i>
                                </a>

                                @can('product-delete')
                                    <form action="{{ route('products.destroy',$item->id) }}" method="POST" >
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
            </div>
        </div>
    </section>

@endsection
