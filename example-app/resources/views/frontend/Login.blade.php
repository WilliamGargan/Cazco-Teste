<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <title>Login</title>
</head>
<body>
    <section class="area-login">
        <div class="login">
            <div>
            <img src="{!! asset('assets/img/img.png') !!}">
            </div>

            <form method="get">
                {{ csrf_field() }}
                <input type="text" name="Email" id="email" placeholder="Email" autocomplete="off" value="{{ old('email') }}">
                <input type="password" name="senha" id="password" placeholder="Senha" value="{{ old('password') }}">
                <input type="submit" value="entrar">
            </form>
            <p>Esqueci Minha Senha?<a href="{{ Route ('userforgotPassword') }}">Recuperar Senha</a></p>
        </div>
    </section>
</body>

</html>