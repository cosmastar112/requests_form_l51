<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Request form Laravel 5.1 - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">

        <script>
            var URL_PERSON_INFO = '{{ url('person/info') }}';
        </script>
        <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ elixir('js/app.js') }}"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">Request form</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/request">Create Request</a></li>
                        <li class="dropdown">
                            <a href="/admin" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                Admin <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/admin/persons">Persons</a></li>
                                <li><a href="/admin/requests">Requests</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>