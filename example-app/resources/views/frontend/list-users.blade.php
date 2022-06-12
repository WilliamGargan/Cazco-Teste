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
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <button><a href="/admin/reports">Reports</a></button>
                    <button><a href="/admin/edit/{{ $user->id }}">Editar</a></button>
                    <button><a href="/admin/delete/{{ $user->id }}">Excluir</a></button>
                </td>
            </tr>
        @endforeach
    </table>
    </br>
    <button><a href="/admin/create" class="bot">Novo Usuário</a></button>
    </select>
</body>
