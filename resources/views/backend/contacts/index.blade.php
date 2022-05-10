@extends('backend.layouts.app')

@section('title', __('dashboard.Contacts'))

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
                    <h4 class="text-left">@lang('dashboard.Contacts')</h4>
                    <a href="{{ route ('contacts.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> @lang('dashboard.Add')</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>@lang('dashboard.Phone')</th>
                            <th>@lang('dashboard.Email')</th>
                            <th>@lang('dashboard.Address')</th>
                            <th>@lang('dashboard.Image')</th>
                            <th>@lang('dashboard.Status')</th>
                            <th>@lang('dashboard.Action')</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($contacts as $index => $item)
                            <tr class="text-left">
                                <td><a href="tel:{{ $item->phone }}" target="_blank" rel="noopener noreferrer"><i class="fas fa-phone"></i> </a>{{ $item->phone }}</td>
                                <td><a href="mailto:{{ $item->email }}" target="_blank" rel="noopener noreferrer"><i class="far fa-envelope-open"></i> </a>{{ $item->email }}</td>
                                <td><a href="mailto:{{ $item->address }}" target="_blank" rel="noopener noreferrer"><i class="far fa-map"></i> </a>{!! $item->address !!}</td>
                                <td>
                                    @if ($item->image)
                                        <img src="{{ asset('uploads/contacts/'.$item->image) }}"  alt="{{ $item->name }}">
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
                                @can('contact-edit')
                                <a href="{{ route('contacts.edit',$item->id) }}" class="btn btn-icon btn-primary" data-toggle="tooltip" data-original-title="{{__('dashboard.Edit')}}">
                                    <i class="far fa-edit"></i>
                                </a>
                                @endcan
                                @can('contact-delete')
                                    <form action="{{ route('contacts.destroy',$item->id) }}" method="POST" >
                                    @csrf
                                    @method("DELETE")
                                        <button type="submit" class="btn btn-icon btn-danger" data-toggle="tooltip" data-original-title="{{__('dashboard.Delete')}}">
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

@endsection
