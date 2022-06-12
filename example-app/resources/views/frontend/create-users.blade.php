<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <title>Adicionar Usuários</title>
</head>

<body>
    <section class="area-criar">
        <div class="criar">
            <div>
                <img src="{!! asset('assets/img/img.png') !!}">
            </div>

            <form action="/admin/store" method="post">
                <input name="_method" type="hidden" value="PUT">
                <input type="text" name="Nome" placeholder="Nome" autocomplete="off">
                <input type="text" name="Email" placeholder="Email" autocomplete="off">
                <input type="password" name="senha" placeholder="Senha">
                <input type="password" name="Confirmar Senha" placeholder="Confirmar Senha">
                <input type="submit" value="Salvar" style="background-color: #608cfb;">
                <input type="submit4" value="Cancelar" onclick="Can()">
            </form>
        </div>
    </section>
    <script>
        function Can()
        {
            location.href="/admin/users"
        }
    </script>
</body>

    
</html>