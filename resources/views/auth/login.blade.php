@extends('layouts.app')

@section('content')
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">INGRESAR</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">REGISTRARSE</label>
		<div class="login-form">
            <form class="form-signin" method="POST" action="{{ route('login') }}">
                @csrf
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
            </form>
			<form method="POST" action="{{ route('register') }}">
                @csrf
			<div class="sign-up-htm">
				<div class="group">
					
                    <input id="name" type="text" class="form-controls " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus onKeyUp="this.value=this.value.toUpperCase();" placeholder="Nombre Completo">
				</div>
                <div class="group">
                    
                    <input id="email" type="email" class="form-controls @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo Electronico">
				</div>
                <div class="group">
                  
                    <input id="direccion" type="text" class="form-controls @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus onKeyUp="this.value=this.value.toUpperCase();"placeholder="Direccion">
				</div>
                <div class="group">
                    
                    <input id="telefono" type="text" class="form-controls @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus onKeyUp="this.value=this.value.toUpperCase();" placeholder="Telefono">
				</div>
				<div class="group">
                  
                    <input id="password" type="password" class="form-controls @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
				</div>
				<div class="group">
                    
                    <input id="password-confirm" type="password" class="form-controls" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
				</div>
				
				<div class="group">
					<button type="submit" class="button">
                        {{ __('Register') }}
                    </button>
				</div>
				<div class="hr"></div>
				
			</div>
        </form>
		</div>
	</div>
</div>


    
@endsection




{{-- 
<form class="form-signin" method="POST" action="{{ route('login') }}">
    @csrf
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="regist" checked><label for="tab-1" class="tab">REGISTRAR</label>
        <input id="tab-3" type="radio" name="tab" class="sign-in" checked><label for="tab-3" class="tab">INGRESAR</label>
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
            <form class="form-regist" method="POST" action="{{ route('register') }}">
                <div class="regist-htm">
                    <div class="group">
                        <label for="user" class="label">NOMBRE COMPLETO</label>
                        <input id="user" type="email" class="form-controls" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electronico" >
                       
                    </div>
                    <div class="group">
                        <label for="pass" class="label">CORREO OELECTRONICO</label>
                        <input id="pass" type="password" class="form-controls" name="password" required  autocomplete="current-password" placeholder="Contraseña" >
                     
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span>Mantenerme Conectado</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="INGRESAR">
                       
                    </div>
    
            </form>
        </div>
    </div>
</div>
</form> --}}