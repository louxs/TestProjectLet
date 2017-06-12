@extends('layouts.app')

@section('body_class','hold-transition login-page')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="http://letusprivateoffice.com/"><b>Admin</b>&nbsp;Letus</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="{{route('login') }}" role="form" method="post">
                {{ csrf_field() }}
                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="social-auth-links text-center">
                    <p class="hidden">- OR -</p>
                    <a href="#" class="hidden btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                        Facebook</a>
                    <a href="#" class="hidden btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                        Google+</a>
                </div>
                <!-- /.social-auth-links -->

                <a href="{{route('password.request')}}">I forgot my password</a><br>
                <a href="{{route('register') }}" class="text-center">Register a new membership</a>

            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
    <a class="hidden" href="{{ route('logout') }}"
       onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">
        Logout
    </a>
    <!-- /.login-box -->





@endsection

@section('scripts')
<!--Specific scripts for Login-->
<!-- iCheck -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional

        });
    });
</script>
@endsection


@section('styles')
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('plugins/iCheck/blue.css')}}">

@endsection
