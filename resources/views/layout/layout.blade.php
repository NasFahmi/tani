<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body>
    <main class="flex items-start justify-center h-screen bg-gray-100">
        <div class="w-full max-w-md px-4 mx-auto ">
            @yield('content')
        </div>
    </main>
    
</body>
</html>