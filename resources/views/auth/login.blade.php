@extends('auth.layouts.app')

@section('title', __('auth.Authorization'))

@section('content')
            <div class="card card-primary">

                <h4 class="text-center mt-3" >@lang('auth.Authorization')</h4>

              <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                    @csrf
                  <div class="form-group">
                    <label for="email">@lang('auth.Email')</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" tabindex="1" required autocomplete="email" autofocus>
                    <div class="invalid-feedback">
                        @lang('validation.Email information is incorrect')!
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">@lang('auth.Password')</label>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2" required autocomplete="current-password">

                    <div class="invalid-feedback">
                        @lang('validation.Password information is incorrect')!
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                  </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    @lang('auth.Remember Me')
                                </label>
                            </div>
                        </div>
                    </div>




                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      @lang('auth.Login')
                    </button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            @lang('auth.Forgot Your Password')?
                        </a>
                    @endif
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
