<!DOCTYPE html>
<html lang="en">

<head>
    @include('auth.layouts.head')
</head>

<body>
    <div id="preloder" style="display: none;">
        <div class="loader" style="display: none;"></div>
    </div>
    @include('auth.layouts.header')
    @yield('content')
    @include('auth.layouts.footer')
    @include('auth.layouts.js')
</body>

</html>
