<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel 11')</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    @stack('css')
</head>
<body>
    <header></header>
    
    @yield('content')
        
    </div>
    <footer></footer>
    @stack('js')
</body>
</html>