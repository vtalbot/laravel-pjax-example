<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
</head>

<body>
    <div id="wrapper">
        <div id="main">
            @yield('main')
        </div>

        <div id="second-block">
            @yield('second')
        </div>
    </div>

    <ul>
        <li><a data-pjax="#wrapper" href="/">Home</a></li>
        <li><a data-pjax="#main" href="/page1">Page 1</a></li>
        <li><a data-pjax="#main" href="/page2">Page 2</a></li>
    </ul>

    <ul>
        <li><a data-pjax="#second-block" href="/second1">Second block 1</a></li>
        <li><a data-pjax="#second-block" href="/second2">Second block 2</a></li>
    </ul>

    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/bower_components/jquery-pjax/jquery.pjax.js"></script>
    <script>
        $(function() {
            $(document).pjax('a');
        });
    </script>
</body>
</html>
