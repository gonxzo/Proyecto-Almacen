@extends('layouts.app')

@section('content')
    <div id="logreg-forms">
        <form class="form-signin" method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> PEÑA ANDRADE</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Ingrese con
                        Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> cingrese
                        con Google+</span> </button>
            </div>
            <p style="text-align:center"> OR </p>
            <div class="input-group">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                    autocomplete="email" autofocus placeholder="Correo Electronico">
            </div>
            <div class="input-group">
                <input id="password" type="password" class="form-control" name="password" required
                    autocomplete="current-password" placeholder="Contraseña">
            </div>
            <div class="input-group">
                <button class="btn btn-md btn-rounded btn-block form-control submit" type="submit"><i
                        class="fas fa-sign-in-alt"></i> Ingresar</button>
            </div>
            <a href="#" id="forgot_pswd">Olvido su Contraseña?</a>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Ingrese
                Una Nueva Cuenta</button>
        </form>

        <form action="#" class="form-reset">
            <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <button class="btn btn-primary btn-block" type="submit">Restablecer Contraseña</button>
            <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
        </form>

        <form action="#" class="form-signup">
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Ingrese
                        con Facebook</span> </button>
            </div>
            <div class="social-login">
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Ingrese
                        con Google+</span> </button>
            </div>
            <p style="text-align:center">OR</p>
            <input type="text" id="user-name" class="form-control" placeholder="Full name" required="" autofocus="">
            <input type="email" id="user-email" class="form-control" placeholder="Email address" required autofocus="">
            <input type="password" id="user-pass" class="form-control" placeholder="Password" required autofocus="">
            <input type="password" id="user-repeatpass" class="form-control" placeholder="Confirm Password" required
                autofocus="">
            <div class="input-group">
                <button class="btn btn-md btn-block submit" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
            </div>
            <a href="#" id="cancel_signup"><i class="fa fa-angle-left"></i> Back</a>
        </form>
        <br>

    </div>
@endsection
