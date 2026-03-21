<html>
<head> <title>@yield('zone1', 'valDefault')</title> </head>
    <body>
    @include('partials.header')
    @yield('zone2')
        <div class="container">
            @yield('zone3')
        </div>
    </body>

<footer>
    @include('partials.footerIndex')
</footer>
</html>
