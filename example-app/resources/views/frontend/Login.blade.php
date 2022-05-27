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

            <form method="post">
                <input type="text" name="Email" placeholder="Email" autocomplete="off">
                <input type="password" name="senha" placeholder="Senha">
                <input type="submit" value="entrar">
            </form>
            <p>Esqueci Minha Senha?<a href="/user/forgotpassword">Recuperar Senha</a></p>
        </div>
    </section>
</body>

</html>