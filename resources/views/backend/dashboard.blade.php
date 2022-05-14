@extends('backend.layouts.app')

@section('title', __('dashboard.Dashboard'))

@section('content')
<div class="row">

    @can('post-list')
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <a href="{{ route('products.index') }}">
            <div class="card card-statistic-1">
                <div class="card-icon l-bg-purple">
                <i class="fas fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                <div class="padding-20">
                    <div class="text-right">
                    <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> {{ $posts->count() }}
                    </h3>
                    <span class="text-muted">@lang('dashboard.News')</span>
                    </div>
                </div>
                </div>
            </div>
        </a>
    </div>
    @endcan

    @can('employee-list')
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <a href="{{ route('employees.index') }}">
            <div class="card card-statistic-1">
                <div class="card-icon l-bg-cyan">
                <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                <div class="padding-20">
                    <div class="text-right">
                    <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> {{ $employees->count() }}
                    </h3>
                    <span class="text-muted">@lang('dashboard.Employees')</span>
                    </div>
                </div>
                </div>
            </div>
        </a>
    </div>
    @endcan

    @can('project-list')
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <a href="{{ route('projects.index') }}">
            <div class="card card-statistic-1">
                <div class="card-icon l-bg-green">
                <i class="fas fa-align-left"></i>
                </div>
                <div class="card-wrap">
                <div class="padding-20">
                    <div class="text-right">
                    <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> {{ $projects->count() }}
                    </h3>
                    <span class="text-muted">@lang('dashboard.Projects')</span>
                    </div>
                </div>
                </div>
            </div>
        </a>
    </div>
    @endcan



    @can('client-list')
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <a href="{{ route('clients.index') }}">
            <div class="card card-statistic-1">
                <div class="card-icon l-bg-orange">
                <i class="fas fa-handshake"></i>
                </div>
                <div class="card-wrap">
                <div class="padding-20">
                    <div class="text-right">
                    <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> {{ $clients->count() }}
                    </h3>
                    <span class="text-muted">@lang('dashboard.Clients')</span>
                    </div>
                </div>
                </div>
            </div>
        </a>
    </div>
    @endcan

    @can('service-list')
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <a href="{{ route('services.index') }}">
            <div class="card card-statistic-1">
                <div class="card-icon l-bg-yellow">
                <i class="fas fa-bullhorn"></i>
                </div>
                <div class="card-wrap">
                <div class="padding-20">
                    <div class="text-right">
                    <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> {{ $services->count() }}
                    </h3>
                    <span class="text-muted">@lang('dashboard.Services')</span>
                    </div>
                </div>
                </div>
            </div>
        </a>
    </div>
    @endcan


    @can('vision-list')
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <a href="{{ route('visions.index') }}">
            <div class="card card-statistic-1">
                <div class="card-icon l-bg-red">
                <i class="fas fa-clipboard-list"></i>
                </div>
                <div class="card-wrap">
                <div class="padding-20">
                    <div class="text-right">
                    <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> {{ $visions->count() }}
                    </h3>
                    <span class="text-muted">@lang('dashboard.Visions')</span>
                    </div>
                </div>
                </div>
            </div>
        </a>
    </div>
    @endcan

</div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>@lang('dashboard.Calls')</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>@lang('dashboard.Name')</th>
                                    <th>@lang('dashboard.Phone')</th>
                                    <th>@lang('dashboard.Date')</th>
                                    <th>@lang('dashboard.Status')</th>
                                    <th>@lang('dashboard.Action')</th>
                                </tr>
                                @foreach ($reservations as $item )
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td class="align-middle">
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%" style="height: 4px;">
                                        <div class="progress-bar bg-success" data-width="100" style="width: 100px;"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
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
