<!DOCTYPE html>
<html lang="en">
<head>
    @include('auth.layout.head')
</head>
<body>
    @include('auth.layout.header')
    @yield('content')
    @include('auth.layout.footer')
    @include('auth.layout.js')
</body>
</html>
