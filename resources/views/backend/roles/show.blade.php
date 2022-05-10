@extends('backend.layouts.app')

@section('title', __('dashboard.View Role'))

@section('content')


<div class="row mt-sm-4">

    <div class="col-12 col-md-12 col-lg-6">

      <div class="card">
        <div class="card-header">
          <h4>@lang('dashboard.View Role')</h4>
        </div>
        <div class="card-body">
          <div class="py-4">
            <p class="clearfix">
              <span class="float-left">
                @lang('dashboard.Name')
              </span>
              <span class="float-right text-muted">
                <label class="badge badge-info">{{ $role->name  }}</label>
              </span>
            </p>

            <p class="clearfix">
              <span class="float-left">
                @lang('dashboard.Roles')
              </span>
              <span class="float-right text-muted">
                    @if(!empty($rolePermissions))
                        @foreach($rolePermissions as $permission)
                            <label class="badge badge-success">{{ $permission->title }}</label>
                        @endforeach
                    @endif
              </span>
            </p>
          </div>
        </div>
        <div class="card-footer text-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}">
                <i class="fas fa-arrow-circle-left"></i> @lang('dashboard.Back')
            </a>
        </div>
      </div>
    </div>
</div>



@endsection

