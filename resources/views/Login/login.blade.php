<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ANAFAM</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="page">
        <img class="logo" src="https://anafam.org.mx/assets/img/logotipo-anafam.png" alt="logo-anafam">
        <div class="content">
            <div class="content-form">
                <h2 class="title">LOGIN</h2>
                <form class="form" action="{{ route('validarLogin') }}" method="POST">
                    @csrf
                    <input type="email" name="email" id="email" class="input-form" placeholder="Correo">
                    <input type="password" name="password" id="password" class="input-form" placeholder="Contraseña">
                    <button type="submit" class="btn">Entrar</button>
                </form>
                @error('error')
                <div class="error">
                    <span> {{ $errors->first('error') }} </span>
                </div>
                @enderror
            </div>
        </div>
    </div>
    @error('error')
    <script src="{{ asset('libs/jquery/jquery-3.6.4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".error").addClass("show");
            // setTimeout(() => {
            //     $(".error").removeClass("show");
            // }, 3000);
        });
    </script>
    @enderror
</body>

</html>