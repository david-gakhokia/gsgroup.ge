@extends('frontend.layouts.app')

@section('title', __('Projects'))

@section('content')

    <div class="section section-inner m-contacts-form">
        <div class="container">
            <div class="row">
                <h3>{{ $project->title }}</h3>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <img src="{{ asset('uploads/projects/' . $project->image) }}" alt="{{ $project->name }}" width="500">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="services-items row">
                        <p class="mt-5">
                            {{ $setting->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
