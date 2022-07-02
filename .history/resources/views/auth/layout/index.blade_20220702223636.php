<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('auth.layout.head');
</head>

<body>
   @include('auth.layout.header');
   @yield('content');

    <!-- Footer Section Begin -->
    @include('auth.layout.footer');

    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('auth.layout.js');



</body>

</html>
