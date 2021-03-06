<!DOCTYPE html>
<html lang="fr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::to('assets/css/app.css')}}">
    <title>Game of Thrones</title>
</head>
<body>
    <!--Header -->
    <header>
        <h1>Game of Thrones</h1>
        <nav>
            <ul>
                <li><a href="{{ URL::to('/')}}">Personnages</a></li>
                <li><a href="{{ URL::to('/house')}}">Maisons</a></li>
            </ul>
        </nav>
        <div class="separator"></div>
    </header>

    <!--Main content -->
    <main>

        @yield('content')

    </main>

    <!--Footer -->
</body>
</html>
