<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="max-w-7xl mx-auto px-4">
        <x-alert2 type="warning" class="mb-4">
            <x-slot name="title">
                Título
            </x-slot>
            Contenido de la variable
        </x-alert2>
        <p>Hola mundo</p>
    </div>
</body>
</html>