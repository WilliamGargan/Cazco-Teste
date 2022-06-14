<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <title>Esqueci Minha Senha</title>
</head>
<body>
    <section class="area-email">
        <div class="email">
            <div>
                <img src="{!! asset('assets/img/img.png') !!}">
            </div>

            <form method="get">
                <input type="text" name="Email" placeholder="Email" autocomplete="off" style="width: 320px;" value="{{ old('email') }}">
                <input type="submit" value="Enviar" style="background-color: #608cfb;">
            </form>
        </div>
    </section>
</body>
</html>