<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    
        <h1>Admin</h1>

    <header>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container justify-content-center">

                <a class="navbar-brand text-primary" href="#">Dashboard</a>
                <a class="navbar-brand text-primary" href="{{route('tasks.create')}}">Task Create</a>
                <a class="navbar-brand text-primary" href="#">User's Pages</a>

            </div>
            </div>
        </nav>

    </header>


    <main>

        @yield('main_content')

    </main>

</body>

</html>
