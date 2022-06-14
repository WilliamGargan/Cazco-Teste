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
                    <button><a href="/admin/reports/{{ $user->id }}">Reports</a></button>
                    <button><a href="/admin/edit/{{ $user->id }}">Editar</a></button>
                    <form action="/admin/delete" method="post">
                        <input type="hidden" name="_method" value="delete" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <button style="cursor:pointer;" class="btn btn-default" type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td><button><a href="/admin/create" class="bot">Cadastro</a></button></td>
        </tr>
    </table>
    </br>
    </select>
</body>
