<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title', 'Home')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">TRAINS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                    aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarID">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" aria-current="page" href="#">About</a>
                        <a class="nav-link" aria-current="page" href="#">Contacts</a>
                        <a class="nav-link" aria-current="page" href="#">Help</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-info">
        <div class="container">
            <div class="row">
                <div class="col">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, nulla cumque. Voluptate fugiat corrupti ipsam exercitationem perferendis quae eum explicabo aperiam vitae officiis tenetur error illo porro, modi debitis pariatur.</div>
                <!-- /.col -->
                <div class="col">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis reiciendis eos quae sequi ipsum harum in pariatur, aliquid excepturi at repudiandae consectetur laborum blanditiis iure iste, tempora ab enim fugit!</div>
                <!-- /.col -->
                <div class="col">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae porro in obcaecati expedita, minus quasi, nisi iste eveniet at nihil animi vitae dolore sapiente corrupti magnam adipisci perspiciatis optio accusantium!</div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </footer>

</body>

</html>
