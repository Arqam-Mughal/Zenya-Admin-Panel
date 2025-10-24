<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}} - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">

@stack('style')
</head>

<body>
    @include('admin.layout.sidebar')

    @yield('content')
    
    <script src="{{ asset('admin/js/main.js') }}"></script>

    @stack('script')
</body>

</html>