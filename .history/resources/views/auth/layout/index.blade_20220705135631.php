<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('auth.layout.header');
</head>

<body>
    @include('auth.layout.head')
    @yield('content');
    @include('auth.layout.footer');
    @include('auth.layout.js');
</body>

</html>
