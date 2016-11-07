@extends('layouts.app')

@section('content')
<div class="container">

    <div class=container6>
        <h2>ISEE.CAREER</h2>
    </div>

<div class="loginform">

        <form class="login-form" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class="login-wrap">

                <p class="login-img"><i class="fa fa-lock " aria-hidden="true"></i></p>

                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                    <input id="password" type="password" class="form-control" name="password" required placeholder="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                </div>
                <label class="checkbox">
                    <input type="checkbox" name="remember"> Remember Me
                    <span class="pull-right">   <a class="btn btn-link" href="{{ url('/password/reset') }}"> Forgot Password?</a></span>
                </label>
                @if (Auth::guest())
                <button type="submit" class="btn btn-primary btn-lg btn-block btnlogin" >Login</button>

                @endif
             </div>
        </form>
{{--<div class="loginregister">--}}
        {{--@if (Auth::guest())--}}
            {{--<button class="btn btn-info btn-lg btn-block" type="submit"><a href="{{ url('/register') }}">Register</a></button>--}}
        {{--@endif--}}
{{--</div>--}}
</div>
</div>
@endsection
