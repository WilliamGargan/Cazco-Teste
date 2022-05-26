<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <title>Editar Usuários</title>
</head>

<body>
    <section class="area-editar">
        <div class="editar">
            <div>
                <img src="{!! asset('assets/img/img.png') !!}">
            </div>

            <form method="post">
                <input type="text" name="Nome" placeholder="Nome" autocomplete="off">
                <input type="text" name="Email" placeholder="Email" autocomplete="off">
                <input type="submit5" value="Salvar">
                <input type="submit5" value="Cancelar" onclick="Can()">
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