@extends('backend.layouts.app')

@section('title', __('dashboard.Messages'))

@section('content')

        <section class="section">
          <div class="section-body">
            <h2 class="section-title">@lang('dashboard.Messages')</h2>
            <h4 class="nav-item ml-auto">
                <a href="{{ route ('messages.create')  }}" class="btn btn-icon icon-left btn-success rounded-pill">
                    <i class="fas fa-plus"></i> @lang('dashboard.Add')
                </a>
            </h4>
            <div class="row">
              <div class="col-12">
                <div class="activities">
                @foreach ($all_message as  $item)
                  <div class="activity">
                    <div class="activity-icon bg-primary text-white">
                      <i class="fas fa-{{ $item->icon }}"></i>
                    </div>
                    <div class="activity-detail">
                      <div class="mb-2">
                        <span class="text-job">{{ $item->start_time }}</span>
                        <span class="bullet"></span>
                        <a class="text-job" href="{{ route ('products.show',$item->id) }}">{{ $item->name }}</a>
                        <div class="float-right dropdown">
                          <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                          <div class="dropdown-menu">
                            <a href="{{ route ('messages.show',$item->id) }}" class="dropdown-item has-icon"><i class="fas fa-eye"></i> {{__('dashboard.View')}}</a>
                            <a href="{{ route ('messages.edit',$item->id) }}" class="dropdown-item has-icon"><i class="fas fa-edit"></i> {{__('dashboard.Edit')}}</a>
                            <form action="{{ route('messages.destroy',$item->id) }}" method="POST" >
                            @csrf
                            @method("DELETE")
                                <button type="submit" class="dropdown-item has-icon text-danger">
                                    <i class="fas fa-trash-alt"></i>{{__('dashboard.Delete')}}
                                </button>
                            </form>
                          </div>
                        </div>
                      </div>
                      {{-- <p>{!!  $item->description !!} </p> --}}
                      <p>{!! Str::limit($item->description,  $limit = 200, $end = '...') !!}</p>

                    </div>
                  </div>
                @endforeach
                </div>
              </div>
            </div>
          </div>
        </section>

@endsection
