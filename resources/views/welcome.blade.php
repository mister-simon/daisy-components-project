<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Testing</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container mx-auto">
        <div class="prose max-w-none">
            <h1>Kitchen Sink</h1>

            @include('alerts')
            @include('buttons')
        </div>
    </div>
</body>

</html>
