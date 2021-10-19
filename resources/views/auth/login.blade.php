@extends('layouts.app')

@section('content')


    <div class="col-md-3 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-snip"> 
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Ingreso</label>
                     <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                    <div class="login-space">
                        <form method="POST" action="{{ route('login') }}" >
                            @csrf
                        <div class="login">
                            <br><br>
                            <div class="group"> <label for="user" class="label">Usuario</label> 
                                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> </div>
                            <div class="group"> <label for="pass" class="label">Contraseña</label> 
                                <input id="password" type="password" class="input" name="password" required autocomplete="current-password"> </div>
                            <div class="group"> <input id="check" type="checkbox" class="check" checked> 
                                <br><br>
                                <label for="check"><span class="icon"></span> Recordar mi cuenta...</label> </div>
                             <div class="group"> <input type="submit" class="button" value="INGRESAR"> </div>
                            {{-- <div class="hr"></div>
                            <div class="foot"> <a href="#">Recupera tu Contraseña?</a>  --}}
                            <div class="col-md-12">
                                <ul class="social-network social-circle">
                                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        </form>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                        <div class="sign-up-form">
                            <div class="hr"  style="height: 3px"></div>
                            <div class="group"> <label for="user" class="label">Usuario</label> 
                                 <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> </div>
                            <div class="group"> <label for="pass" class="label">Correo Electronico</label> 
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <div class="group"> <label for="pass" class="label">Contraseña</label>
                                <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <div class="group"> <label for="pass" class="label">Repita su Contraseña</label> 
                                <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                            <br>
                            <div class="group"> <input type="submit" class="button" value="REGISTRAR"> </div>
                            
                            <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                        </div>
                        
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


