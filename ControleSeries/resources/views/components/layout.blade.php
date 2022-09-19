<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Controle de series</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $title }}</h1>

                {{ $slot }}
            </div>
        </div>
    </div>
    
</body>

</html>