<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario - Blog</title>
</head>
<body>  
    <h1>Aqui esta el post {{ $tema }}</h1>

    @if ($tema == 'laravel')
        <p>Esto es un contenido de laravel unicamente</p>
    @endif

</body>
</html>