<form autocomplete="off" method="POST" action="{{ route('login') }}">
    @csrf

    <div class="input-group mb-3">
        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="{{__('Email')}}" name="email" value="{{ old('email') }}" required  autofocus>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>

        @error('email')
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
    </div>

    <div class="input-group mb-3">
        <input type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="{{__('Password')}}"  name="password" required autocomplete="current-password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>

        @error('password')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Sign in') }}
            </button>
        </div>

        @error('firstname')
        <div class="error">{{ $message }}</div>
    @enderror
        <!-- /.col -->
    </div>
</form>

{{-- <div class="social-auth-links text-center mb-3">
              <p>- OR -</p>
              <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
              </a>
              <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
              </a>
            </div> --}}
<!-- /.social-auth-links -->


<p class="mb-1">
    @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
</p>
<p class="mb-0">
    @if (Route::has('register'))
        <a class="nav-link " href="{{ route('register') }}">{{ __('Register') }}</a>
    @endif
</p>
