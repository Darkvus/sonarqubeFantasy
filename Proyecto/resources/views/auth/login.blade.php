@extends('layout.general')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mb-5">
        <div class="card-header custom-head"><strong>{{ __('Login') }}</strong></div>

        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="form-group row">
                <label for="login" class="col-sm-4 col-form-label text-md-right">
                    {{ __('Username or Email') }}
                </label>
             
                <div class="col-md-6">
                    <input id="login" type="text"
                           class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                           name="login" value="{{ old('username') ?: old('email') }}" required autofocus>
             
                    @if ($errors->has('username') || $errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <div class="col-3 offset-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
              </div>
              <div class="col-3 offset-3">
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-4 offset-4 df">
                <button type="submit" class="btn btn-secondary">
                  <strong>{{ __('Login') }}</strong>
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                </a>
                @endif
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
