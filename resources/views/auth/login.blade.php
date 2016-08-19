@extends('layouts.app') @section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}"> {{ csrf_field() }}
<div style="text-align: center; padding-left: 80px; padding-right: 80px;">
            <p>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <ons-input id="email" type="email" modifier="underbar" name="email" placeholder="email"
                                       value="{{ old('email') }}" float></ons-input> @if ($errors->has('email')) <p><span
                        class="label label-danger"> {{ $errors->first('email') }} </span></p> @endif </div>

                     



        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <ons-input id="password" type="password" modifier="underbar" name="password" placeholder="Password"
                       float></ons-input> @if ($errors->has('password')) <p><span
                        class="label label-danger"> {{ $errors->first('password') }} </span></p> @endif </div>
        </p> <label class="left">
            <p>
                <ons-input type="checkbox" name="remember" input-id="remember"></ons-input>
        </label> <label for="remember" class="center"> Recordarme </label> </p>
        <p style="margin-top: 30px;">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-user"></i>Sign in
            </button>
        </p>

        <ons-button type="submit" onclick="login()">Sign in</ons-button>
        <p>
            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
        </p>

        </div>

    </form>

@endsection
