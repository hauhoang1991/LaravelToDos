<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Todos</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;900&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100">
<header>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-center">Laravel Todos</h1>
    </div>
</header>
<main class="p-4">
    @yield('content')
</main>
</body>
</html>
