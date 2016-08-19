@extends('layouts.app')

@section('content')
    <ons-page>

        <ons-row> 
            <ons-col width="25%" class="col ons-col-inner">Col</ons-col>
             
            <ons-col width="50%" class="col ons-col-inner">

                <div style="margin-top: 30px; text-align: center;">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

                <p>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <ons-input id="name" type="text" modifier="underbar" placeholder="Nombres" name="name"
                                   value="{{ old('name') }}" float></ons-input>
                @if ($errors->has('name'))
                    <p>
                        <span class="label label-danger">{{ $errors->first('name') }}</span>
                    </p>
                    @endif
                    </p>
            </div>

            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                <p>
                    <ons-input id="last_name" name="last_name" modifier="underbar" type="text" placeholder="Primer apellido"
                               value="{{ old('last_name') }}"></ons-input>
                @if ($errors->has('last_name'))
                    <p>
                        <span class="label label-danger">
                            {{ $errors->first('last_name') }}
                        </span>
                    </p>
                    @endif
                    </p>
            </div>

            <div class="form-group{{ $errors->has('last_name_second') ? ' has-error' : '' }}">
                <p>
                    <ons-input id="last_name_second" name="last_name_second" modifier="underbar" type="text" placeholder="Segundo apellido"
                               value="{{ old('last_name_second') }}"></ons-input>
                @if ($errors->has('last_name_second'))
                    <p>
                        <span class="label label-danger">
                            {{ $errors->first('last_name_second') }}
                        </span>
                    </p>
                    @endif
                    </p>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <p>
                    <ons-input id="email" name="email" modifier="underbar" type="email" placeholder="Correo electrónico"
                               value="{{ old('email') }}" float></ons-input>
                @if ($errors->has('email'))
                    <p>
                        <span class="label label-danger">
                            {{ $errors->first('email') }}
                        </span>
                    </p>
                    @endif
                    </p>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <p>
                    <ons-input id="password" modifier="underbar" type="password" name="password" placeholder="Contraseña"
                               float></ons-input>
                @if ($errors->has('password'))
                    <p>
                        <span class="label label-danger">{{ $errors->first('password') }}</span>
                    </p>
                    @endif
                    </p>
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <p>
                    <ons-input id="password_confirmation" modifier="underbar" type="password" name="password_confirmation"
                               placeholder="Confirmar contraseña" float></ons-input>
                @if ($errors->has('password_confirmation'))
                    <p>
                    <span class="label label-danger">
                        {{ $errors->first('password_confirmation') }}
                    </span>
                    </p>
                    @endif
                    </p>
            </div>
            <p style="margin-top: 30px;">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i> Registrase
                </button>
            </p>

        </form>
                </div>

            </ons-col>
             
            <ons-colwidth width="25%" class="col ons-col-inner">Col</ons-col>
                 
        </ons-row>
    </ons-page>
@endsection
