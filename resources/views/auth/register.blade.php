@extends('auth.layouts.app')

@section('title', __('auth.Register'))

@section('content')


<div class="card card-primary">
    <div class="card-header">
      <h4>@lang('auth.Registration suspended')!</h4>
    </div>
    <div class="card-body">
        <div class="alert alert-light alert-has-icon">
            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
            <div class="alert-body">
              <p> @lang('auth.Unfortunately registration is not possible')! </p>
            </div>
        </div>
        <a class="btn btn-link" href="{{ route('login') }}">
            <i class="far fa-user"></i> {{ __('auth.Authorization') }}
        </a>

        <div class="form-group text-center">
            <a href="?language=en" data-toggle="tooltip" title="English">
                <img src="https://img.icons8.com/emoji/32/000000/united-kingdom-emoji.png"/>
            </a>
            <a href="?language=ka" data-toggle="tooltip" title="ქართული">
                <img src="https://img.icons8.com/emoji/32/000000/georgia-emoji.png"/>
            </a>
            <a href="?language=ru" data-toggle="tooltip" title="Pусский">
                <img src="https://img.icons8.com/emoji/32/000000/russia-emoji.png"/>
            </a>
        </div>
    </div>
</div>

@endsection
