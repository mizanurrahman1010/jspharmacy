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
                        <div class="col-lg-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control @error('dob') is-invalid @enderror"
                                       placeholder="{{__('Date of Birth')}}" name="dob" value="{{ old('dob') }}"
                                       >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-calendar"></span>
                                    </div>
                                </div>
                                @error('dob')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control @error('mobile') is-invalid @enderror"
                                       placeholder="{{__('Mobile')}}" name="mobile" value="{{ old('mobile') }}"
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


                    <fieldset>
                        <legend class="w-auto"><p class="text-sm m-0 text-primary">Permanent Address</p></legend>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group mb-3">
                                    <input type="text"
                                           class="form-control @error('perm_add_house') is-invalid @enderror"
                                           placeholder="{{__('House')}}" name="perm_add_house"
                                           id="perm_add_house"
                                           value="{{ old('perm_add_house') }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-home"></span>
                                        </div>
                                    </div>

                                    @error('perm_add_house')
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control @error('perm_add_road') is-invalid @enderror"
                                           placeholder="{{__('Road')}}" name="perm_add_road" id="perm_add_road"
                                           value="{{ old('perm_add_road') }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-road"></span>
                                        </div>
                                    </div>

                                    @error('perm_add_road')
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control @error('perm_add_ward') is-invalid @enderror"
                                           placeholder="{{__('Ward')}}" name="perm_add_ward" id="perm_add_ward"
                                           value="{{ old('perm_add_ward') }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-address-book"></span>
                                        </div>
                                    </div>

                                    @error('perm_add_ward')
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control @error('perm_add_para') is-invalid @enderror"
                                           placeholder="{{__('Para')}}" name="perm_add_para" id="perm_add_para"
                                           value="{{ old('perm_add_para') }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-dot-circle"></span>
                                        </div>
                                    </div>

                                    @error('perm_add_para')
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text"
                                   class="form-control @error('perm_add_district_city') is-invalid @enderror"
                                   placeholder="{{__('District / City')}}" name="perm_add_district_city"
                                   id="perm_add_district_city"
                                   value="{{ old('perm_add_district_city') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-city"></span>
                                </div>
                            </div>
                            @error('perm_add_district_city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </fieldset>


                    <fieldset class="position-relative" >
                        <legend class="w-auto">
                            <span class="text-sm m-0 text-primary">Present Address</span>
                        </legend>

                        <legend class="position-absolute mt-n5 pt-3">
                            <div class="float-right text-sm text-info">
                                <input id="sameAddress" checked type='checkbox' data-toggle='collapse'
                                       data-target='#presentAddressGroup'>
                                Same As Permanent ?
                                </input>

                            </div>
                        </legend>

{{--                        <div id="presentAddressGroup" class="collapse">--}}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <input type="text"
                                               class="form-control @error('pres_add_house') is-invalid @enderror"
                                               placeholder="{{__('House')}}" name="pres_add_house" id="pres_add_house"
                                               value="{{ old('pres_add_house') }}" >
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-home"></span>
                                            </div>
                                        </div>

                                        @error('pres_add_house')
                                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <div class="input-group mb-3">
                                        <input type="text"
                                               class="form-control @error('pres_add_road') is-invalid @enderror"
                                               placeholder="{{__('Road')}}" name="pres_add_road" id="pres_add_road"
                                               value="{{ old('pres_add_road') }}" >
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-road"></span>
                                            </div>
                                        </div>

                                        @error('pres_add_road')
                                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="input-group mb-3">
                                        <input type="text"
                                               class="form-control @error('pres_add_ward') is-invalid @enderror"
                                               placeholder="{{__('Ward')}}" name="pres_add_ward" id="pres_add_ward"
                                               value="{{ old('pres_add_ward') }}" >
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-address-book"></span>
                                            </div>
                                        </div>

                                        @error('pres_add_ward')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <input type="text"
                                               class="form-control @error('pres_add_para') is-invalid @enderror"
                                               placeholder="{{__('Para')}}" name="pres_add_para" id="pres_add_para"
                                               value="{{ old('pres_add_para') }}" >
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-dot-circle"></span>
                                            </div>
                                        </div>

                                        @error('pres_add_para')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <input type="text"
                                       class="form-control @error('pres_add_district_city') is-invalid @enderror"
                                       placeholder="{{__('District / City')}}" name="pres_add_district_city" id="pres_add_district_city"
                                       value="{{ old('pres_add_district_city') }}" >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-city"></span>
                                    </div>
                                </div>
                                @error('pres_add_district_city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
{{--                        </div>--}}

                    </fieldset>


                    <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
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
                               name="password"  autocomplete="new-password" placeholder="{{ __('Password') }}">
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

