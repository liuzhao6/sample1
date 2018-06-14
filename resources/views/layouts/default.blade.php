<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title','Sample App')-laravel-教程</title>
</head>
<body>
    @include('layouts._header')
    <div class="container">
        <div class="row" style="display: flex;justify-content: center;">
            @yield('content')
        </div>
    </div>
@include('layouts._footer')
</body>
</html>