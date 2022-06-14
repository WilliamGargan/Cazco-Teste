<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <title>Adicionar Usuários</title>
</head>

<body>   
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    <section class="area-criar">
        <div class="criar">
            <div>
                <img src="{!! asset('assets/img/img.png') !!}">
            </div>

            <form action="/admin/store" method="post">
                {{ csrf_field() }}
                <input type="text" name="name" id="name" placeholder="Nome" autocomplete="off" value="{{ old('name') }}">
                <input type="text" name="email" id="email" placeholder="Email" autocomplete="off" value="{{ old('email') }}">
                <input type="password" name="password" id="password" placeholder="Senha" value="{{ old('password') }}">
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar Senha" value="{{ old('password_confirmation') }}">
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