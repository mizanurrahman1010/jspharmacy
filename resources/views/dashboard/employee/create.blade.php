<form autocomplete="off" id="employeeModalForm" action="{{route('employee.store')}}">
    @csrf
    @method('put')

    <div class="input-group mb-3">
        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{__('Full name')}}"
               name="name" value="{{ old('name') }}" id="name" autofocus>
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
                <input type="text" class="form-control @error('mobile') is-invalid @enderror"
                       placeholder="{{__('Mobile')}}" id="mobile" name="mobile" value="{{ old('mobile') }}">
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

        <div class="col-lg-6">
            <div class="input-group mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                       placeholder="{{ __('Email') }}" id="email" name="email" value="{{ old('email') }}">
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
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="input-group mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                       name="password" placeholder="{{ __('Password') }}">
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
        </div>

        <div class="col-lg-6">
            <div class="input-group mb-3">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                       placeholder="{{ __('Retype Password') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <fieldset>
        <div class="row">
            <div class="form-group col-lg-12">
                <label for="note" class="col-lg-12 ">Address</label>
                <textarea class="form-control @error('address') is-invalid @enderror"
                          placeholder="{{__('Address')}}" id="address"
                          name="address">{{old('address')}}</textarea>
                <span id="address_error" class="invalid-feedback" role="alert"></span>
            </div>
            @error('address')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>


        <div class="row">


            <div class="col-lg-6">
                <div class="input-group mb-3">

                    @php
                        $statusList =['1'=>"Active",'0'=>"Inactive"];
                        $userTypeList = ['delivery_man'=>"Delivery Man",'admin'=>"Admin",'customer'=>'Customer'];
                    @endphp

                    <select placeholder="{{__('User Type')}}" name="user_type" id="user_type"
                            class="form-control @error('user_type') is-invalid @enderror">
                        @foreach($userTypeList as $key=>$val)
                            <option {{($key==old('user_type'))?'selected':''}} value="{{$key}}">{{$val}}</option>
                        @endforeach
                    </select>

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="input-group mb-3">
                    <select placeholder="{{__('Status')}}" name="status" id="status"
                            class="form-control @error('status') is-invalid @enderror">
                        @foreach($statusList as $key=>$val)
                            <option {{($key==old('status'))?'selected':''}} value="{{$key}}">{{$val}}</option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="fas fa-door-open"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </fieldset>

</form>
