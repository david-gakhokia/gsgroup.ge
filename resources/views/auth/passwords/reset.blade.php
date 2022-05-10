@extends('auth.layouts.app')

@section('title', __('Update Password'))

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h4>@lang('auth.Update Password')</h4>
    </div>
    <div class="card-body">
      {{-- <p class="text-muted">@lang('auth.Input New Password')</p> --}}
      <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
          <label for="email">@lang('auth.Email')</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="password">@lang('auth.New password')</label>
          <input id="password" type="password" class="form-control pwstrength @error('password') is-invalid @enderror" data-indicator="pwindicator"
            name="password" tabindex="2" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

          <div id="pwindicator" class="pwindicator">
            <div class="bar"></div>
            <div class="label"></div>
          </div>
        </div>
        <div class="form-group">
          <label for="password-confirm">@lang('auth.Confirm Password')</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" tabindex="2" required autocomplete="new-password">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-lg btn-block" tabindex="4">
            @lang('dashboard.Update')
          </button>
        </div>
        <div class="form-group text-center">
            @lang('auth.Or')
            <br>
            <a class="text-center" href="{{ route('login') }}">
                <i class="far fa-user"></i> {{ __('auth.Authorization') }}
            </a>
        </div>
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
      </form>
    </div>
  </div>


@endsection

