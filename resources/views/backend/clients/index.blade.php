@extends('backend.layouts.app')

@section('title', __('dashboard.Clients'))

@section('content')



        <section class="section">
            <ul class="breadcrumb breadcrumb-style ">
                <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">
                    <i data-feather="home"></i></a>
                </li>
                <li class="breadcrumb-item">
                <h4 class="page-title m-b-0">@lang('dashboard.Clients')</h4>
                </li>
            </ul>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>@lang('dashboard.Clients')</h4>
                    <h4 class="nav-item ml-auto">
                      <a href="{{ route ('clients.create')  }}" class="btn btn-icon icon-left btn-success rounded-pill">
                          <i class="fas fa-plus"></i> @lang('dashboard.Add')</a>
                      </h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-2">
                        <thead>
                          <tr>

                            <th>@lang('dashboard.Name')</th>
                            <th>@lang('dashboard.Link')</th>
                            <th>@lang('dashboard.Logo')</th>
                            <th>@lang('dashboard.Date')</th>
                            <th>@lang('dashboard.Status')</th>
                            <th>@lang('dashboard.Action')</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $item )
                            <tr>

                                <td>{{ $item->name }} </td>
                                <td class="align-middle">
                                    <a href="{{ $item->link }}" target="_blank">{{ $item->link }}</a>
                                </td>
                                <td>
                                <img src="{{ asset('uploads/clients/'.$item->image) }}" width="50" alt="{{ $item->title }}">
                                </td>
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}} </td>
                                <td>
                                    <div class="badge badge-info badge-shadow">{{ $item->status }}</div>
                                </td>
                                <td>
                                    {{-- <a href="{{ route('clients.show',$item->id) }}" class="btn btn-icon btn-info" data-toggle="tooltip" data-original-title="@lang('dashboard.View')">
                                        <i class="far fa-eye"></i>
                                    </a> --}}
                                    @can('client-edit')
                                    <a href="{{ route('clients.edit',$item->id) }}" class="btn btn-icon btn-primary" data-toggle="tooltip" data-original-title="@lang('dashboard.Edit')">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    @endcan
                                    @can('client-delete')
                                        <form action="{{ route('clients.destroy',$item->id) }}" method="POST" >
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

