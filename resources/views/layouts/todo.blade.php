<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <main class="flex flex-1 h-auto min-h-screen justify-center bg-green-50">
        <section class="max-w-screen-sm w-[40%] bg-white flex">
            @yield('content')
        </section>
    </main>
</body>

</html>