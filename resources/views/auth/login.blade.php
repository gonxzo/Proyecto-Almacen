@extends('layouts.app')

@section('content')
<form class="form-signin" method="POST" action="{{ route('login') }}">
    @csrf
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">INGRESAR</label>
        <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
        <div class="login-form">
            <div class="sign-in-htm">
                <div class="group">
                    <label for="user" class="label">Correo Electronico</label>
                    <input id="user" type="email" class="form-controls" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electronico" >
                   
                </div>
                <div class="group">
                    <label for="pass" class="label">Contraseña</label>
                    <input id="pass" type="password" class="form-controls" name="password" required  autocomplete="current-password" placeholder="Contraseña" >
                 
                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span>Mantenerme Conectado</label>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="INGRESAR">
                   
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <label for="tab-2">Olvidaste tu Contraseña?</label>
                </div>
            </div>
            <div class="for-pwd-htm">
                <div class="group">
                    <label for="user" class="label">Correo Electronico</label>
                    <input id="user" type="text" class="input">
                </div>
                <div class="group">
                    
                    <input type="submit" class="button" value="Restaurar Contraseña">
                </div>
                <div class="hr"></div>
            </div>
        </div>
    </div>
</div>
</form>
    
@endsection





