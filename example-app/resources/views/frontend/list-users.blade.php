<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{url('assets/css/style2.css')}}">
    <title>Lista de Usuários</title>
</head>

<body>
    <section class="area-tabela">
    <table class="tabela">
        <caption><b>Lista de Usuários</b></caption>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th colspan="3">Ações</th>

        <tr>
            <td>1</td>
            <td>Marcos</td>
            <td>marcos.gg@gmail.com</td>
            <td><button><a href="/admin/reports">Reports</a></button><button><a href="/admin/edit">Editar</a></button><button><a href="">Excluir</a></button></td>
        </tr>

        <tr>
            <td>2</td>
            <td>Luana</td>
            <td>luana.lu@gmail.com</td>
            <td><button><a href="/admin/reports">Reports</a></button><button><a href="/admin/edit">Editar</a></button><button><a href="">Excluir</a></button></td>
        </tr>

        <tr>
            <td>3</td>
            <td>Carlos</td>
            <td>carlos.caca@gmail.com</td>
            <td><button><a href="/admin/reports">Reports</a></button><button><a href="/admin/edit">Editar</a></button><button><a href="">Excluir</a></button></td>
        </tr>
    </table>
    </section>
</body>

    <p><button><a href="/admin/create">Novo Usuário</a></button></p>
</html>