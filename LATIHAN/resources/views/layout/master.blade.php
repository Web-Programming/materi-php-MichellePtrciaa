<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <!-- ini bagian header-->
    @include('layout.header')
    <!-- ini bagian sidebar-->
    @include('layout.header')
    <!-- ini bagian content-->
    @yield('content')
    <!-- ini bagian footer-->
    @include('layout.footer')

</body>
</html>
