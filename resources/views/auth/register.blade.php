@extends('layouts.master',['page'=>'register-page'])

@section('content')

    <div class="register-box">
        <div class="register-logo">
            <a href=""><b>jsPharmacy</b>BD</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">
                    {{ __('Register a new membership') }}
                </p>

                <form autocomplete="off" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                               placeholder="{{__('Full name')}}" name="name" value="{{ old('name') }}"
                               autocomplete="name" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                        @enderror
                    </div>


                    <div class="row">

                        <div class="col-lg-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control @error('mobile') is-invalid @enderror"
                                       placeholder="{{__('Mobile, Ex: 01XXXXXXXXX')}}" name="mobile"
                                       value="{{ old('mobile') }}"
                                >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                </div>
                                @error('mobile')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row ">
                            <div class="form-group col-lg-12">
                                <label for="note" class="col-lg-12 ">Permanent Address</label>
                                   <textarea class="form-control @error('perm_address') is-invalid @enderror"
                                             placeholder="{{__('Permanent Address')}}"
                                             name="perm_address">{{old('perm_address')}}</textarea>
                                    @error('perm_add_district_city')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                            </div>
                    </div>


                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                               placeholder="{{ __('Email') }}" name="email" value="{{ old('email') }}"
                               autocomplete="emial">
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
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                               name="password" autocomplete="new-password" placeholder="{{ __('Password') }}">
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
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password_confirmation"
                               placeholder="{{ __('Retype Password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">{{__('Register')}}</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- <div class="social-auth-links text-center">
                  <p>- OR -</p>
                  <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                  </a>
                  <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                  </a>
                </div> -->

                <a class="nav-link " href="{{ route('login') }}">{{ __('I already have a membership') }}</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

@endsection

