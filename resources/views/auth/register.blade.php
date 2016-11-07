@extends('layouts.app')

@section('content')
<div class="container">

    <div class=container6>
        <h2>ISEECAREER</h2>
    </div>
    <div class="loginform">
        <form class="login-form" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <div class="login-wrap">
                <p class="login-img"><i class="fa fa-sign-in" aria-hidden="true"></i></p>

            <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="name" required autofocus>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif

            </div>

            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email"  required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

            </div>

            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>

                    <input id="password" type="password" class="form-control" name="password" placeholder="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

            </div>

            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-check" aria-hidden="true"></i></span>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>

            </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block btnlogin">
                        Register
                    </button>

        </div>
        </form>
    </div>
</div>
@endsection
