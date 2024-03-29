<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kursy walut - NBP</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Kursy walut - NBP</a>
            <div class="collapse navbar-collapse" id="navbarColor01"></div>
        </div>
    </nav>
    <div class="container">
        <div style="padding-top: 20px; padding-bottom: 20px">
            <a href="{{ url('/update/') }}" class="btn btn-warning my-2 my-sm-0">Zaktualizuj</a>
        </div>

        @if (session('message'))
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        @endif

        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">L.p.</th>
                        <th scope="col">Nazwa waluty</th>
                        <th scope="col">Kod</th>
                        <th scope="col">Wartość kursu</th>
                        <th scope="col">Ostatnia aktualizacja</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($nbpapi as $item)
                        <tr>
                            <th>{{ $loop->index + 1 }}.</th>
                            <th>{{ $item->name }} </th>
                            <td>{{ $item->currency_code }}</td>
                            <td>{{ number_format(round($item->exchange_rate, 2), 2) }} PLN</td>
                            <td>{{ $item->updated_at }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
