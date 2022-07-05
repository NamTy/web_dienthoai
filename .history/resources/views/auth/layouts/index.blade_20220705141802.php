<!DOCTYPE html>
<html lang="en">
<head>
   @include('auth.layouts.head')
</head>
<body>
    @include('auth.layouts.header')
    @yield('content')
    @include('auth.layouts.footer')
    @include('auth.layouts.js')
</body>
</html>
