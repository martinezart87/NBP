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
              <div class="collapse navbar-collapse" id="navbarColor01">
                <form class="d-flex">
                  <button class="btn btn-warning my-2 my-sm-0" type="submit">Zaktualizuj</button>
                </form>
              </div>
            </div>
          </nav>
    </body>
</html>
