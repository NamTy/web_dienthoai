<!DOCTYPE html>
<html lang="en">
<head>
    @include('auth.layout.head');
</head>
<body>
    @include('auth.layout.header');
    @yield('content');
    @include('auth.layout.footer');
    @layout('auth.layout.js')
</body>
</html>
