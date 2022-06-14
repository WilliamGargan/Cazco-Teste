<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <title>Editar Usuários</title>
</head>

<body>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <section class="area-editar">
        <div class="editar">
            <div>
                <img src="{!! asset('assets/img/img.png') !!}">
            </div>

            <form action="/admin/update/{{ $user->id }}" method="post">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <input type="text" name="name" placeholder="Nome" autocomplete="off" value="{{ $user->name }}">
                <input type="text" name="email" placeholder="Email" autocomplete="off" value="{{ $user->email }}">
                <input style="background-color: #608cfb;" type="submit" value="Salvar">
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