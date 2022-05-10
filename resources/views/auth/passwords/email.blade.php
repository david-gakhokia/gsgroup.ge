@extends('auth.layouts.app')

@section('title', __('auth.Password Recovery'))

@section('content')


    <div class="card card-primary">
        <h4  class="text-center mt-3">@lang('auth.Password Recovery')</h4>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                   <p style="color: white">{{ session('status') }}</p>
                </div>
            @endif
            <p class="text-center text-muted">@lang('auth.We will send you a link to reset your password')</p>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label for="email">@lang('auth.Email')</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        @lang('auth.Send')
                    </button>
                    <a class="btn btn-link" href="{{ route('login') }}">
                        <i class="far fa-user"></i> {{ __('auth.Authorization') }}
                    </a>
                </div>
            </form>

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



