<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <title>Recuperação de Senha</title>
</head>
<body>
    <section class="area-senha">
        <div class="senha">
            <div>
                <img src="{!! asset('assets/img/img.png') !!}">
            </div>

            <form method="post">
                <input type="password" name="Nova Senha" placeholder="Nova Senha">
                <input type="password" name="Confirmar Nova Senha" placeholder="Confirmar Nova Senha">
                <input type="submit" value="Enviar" style="background-color: #608cfb;">
            </form>
        </div>
    </section>
</body>

</html>