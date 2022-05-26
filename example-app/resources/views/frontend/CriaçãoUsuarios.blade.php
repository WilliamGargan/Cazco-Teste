<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Adicionar Usuários</title>
</head>

<body>
    <section class="area-criar">
        <div class="criar">
            <div>
                <img src="img.png">
            </div>

            <form method="post">
                <input type="text" name="Nome" placeholder="Nome" autocomplete="off">
                <input type="text" name="Email" placeholder="Email" autocomplete="off">
                <input type="password" name="senha" placeholder="Senha">
                <input type="password" name="Confirmar Senha" placeholder="Confirmar Senha">
                <input type="submit4" value="Salvar">
                <input type="submit4" value="Cancelar" onclick="Can()">
            </form>
        </div>
    </section>
    <script>
        function Can()
        {
            location.href="TelaListadeUsuarios.html"
        }
    </script>
</body>

    
</html>