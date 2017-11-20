<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>轻松学会laravel  - @yield('title')</title>
</head>
<body>
    <div style="height: 100px; width: 500px;">
        @section('header')
        头部
        @show
    </div>

    <div style="width: 300px;height: 300px;border: 1px solid gray">
        @yield('contents','主要内容区域')
        I don't know what you mean  orange
        just one last dance
    </div>

    <div>
        @section('footer')
            底部
         @show
    </div>
</body>
</html>
