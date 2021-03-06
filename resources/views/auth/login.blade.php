@extends('layouts.master',['page'=>'login-page'])


@section('content')

    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>jspharmacy</b>BD</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">{{ __('Login') }}</p>

            @include('auth.login-form')

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
    </div>

@endsection

