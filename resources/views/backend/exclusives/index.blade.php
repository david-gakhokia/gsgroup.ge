@extends('backend.layouts.app')

@section('title', __('dashboard.exclusives'))

@section('content')



        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>@lang('dashboard.exclusives')</h4>
                    <h4 class="nav-item ml-auto">
                      <a href="{{ route ('exclusives.create')  }}" class="btn btn-icon icon-left btn-success rounded-pill">
                          <i class="fas fa-plus"></i> @lang('dashboard.Add')</a>
                      </h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-2">
                        <thead>
                          <tr>
                            <th>@lang('dashboard.Title')</th>
                            <th>@lang('dashboard.Image')</th>
                            <th>@lang('dashboard.Description')</th>
                            <th>@lang('dashboard.Icon')</th>
                            <th>@lang('dashboard.Status')</th>
                            <th>@lang('dashboard.Action')</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($exclusives as $item )
                            <tr>

                                <td>{{ $item->title }} </td>
                                <td>
                                    @if ($item->image)
                                        <img src="{{ asset('uploads/exclusives/'.$item->image) }}"  width="50">
                                    @else
                                        <img src="https://img.icons8.com/windows/36/000000/no-image.png"/>
                                    @endif
                                </td>
                                <td>{{ $item->description }} </td>

                                <td class="align-middle">
                                    <i class="{{ $item->icon }}"></i>
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
                                    {{-- <a href="{{ route('exclusives.show',$item->id) }}" class="btn btn-icon btn-info" data-toggle="tooltip" data-original-title="@lang('dashboard.View')">
                                        <i class="far fa-eye"></i>
                                    </a> --}}
                                    @can('client-edit')
                                    <a href="{{ route('exclusives.edit',$item->id) }}" class="btn btn-icon btn-primary" data-toggle="tooltip" data-original-title="@lang('dashboard.Edit')">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    @endcan
                                    @can('client-delete')
                                        <form action="{{ route('exclusives.destroy',$item->id) }}" method="POST" >
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

