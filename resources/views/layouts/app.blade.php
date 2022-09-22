<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Request form Laravel 5.1 - @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/all.css') }}">

        <script>
            var URL_PERSON_INFO = '{{ url('person/info') }}';
        </script>
        <script src="{{ asset('js/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ elixir('js/app.js') }}"></script>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/request">Create Request</a></li>
                    <li>
                        <a href="/admin">Admin</a>
                        <ul>
                            <li><a href="/admin/persons">Persons</a></li>
                            <li><a href="/admin/requests">Requests</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>