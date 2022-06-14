<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="{{url('assets/css/style2.css')}}">
    <title>Relatórios</title>
</head>
<body>
    <section class="area-relatorios">
        <table class="relatorios">
                <th>ID</th>
                <th>DAY</th>
                <th>USER_ID</th>
                <th>DESCRIPTION</th>
            @foreach($reports as $report)
            <tr>
                <td>{{ $report->id }}</td>
                <td>{{ $report->day }}</td>
                <td>{{ $report->user_id }}</td>
                <td>{{ $report->description }}</td>
            </tr>
            @endforeach
        </table>
    </section>
</body>