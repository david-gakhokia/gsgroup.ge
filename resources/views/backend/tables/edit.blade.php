@extends('backend.layouts.app')

@section('title', __('dashboard.Table Edit'))

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
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>@lang('dashboard.Edit')</h4>
                </div>
                <div class="card-body">
                    @auth
                        <form action="{{ route ('tables.update',$table->id) }}" class="needs-validation" novalidate="" method="POST"  enctype="multipart/form-data" >
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <input type="number" name="name" class="form-control" value="{{ $table->name }}" placeholder="@lang('dashboard.Table Number')" required>
                            </div>

                            <div class="form-group">
                                <label for="place_id">@lang('dashboard.Places')</label>
                                <select class="form-control" name="place_id">
                                    @foreach ($places as $place)
                                        <option value="{{ $place->id }}" {{ $place->id === $table->place_id ? 'selected' : '' }} > {{ $place->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>@lang('dashboard.Select a Status')</label>
                                <select name="status" class="form-control" required="">

                                    @if ($table->status == 1)
                                        <option value="1"  selected >@lang('dashboard.Active')</option>
                                        <option value="0">@lang('dashboard.Not active')</option>
                                    @else
                                        <option value="1" >@lang('dashboard.Active')</option>
                                        <option value="0" selected >@lang('dashboard.Not active')</option>
                                    @endif
                                </select>
            
                            </div>

                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> @lang('dashboard.Update')</button>

                                <a href="{{ route ('tables.index')}}" class="btn btn-icon icon-left btn-secondary"><i class="fas fa-backward"></i> @lang('dashboard.Back') </a>
                            </div>
                        </form>
                    @endauth
                </div>
            </div>
        </div>


    </div>

@endsection

