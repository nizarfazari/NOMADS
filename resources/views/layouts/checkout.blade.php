<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    @stack('prepend-style')
    @include('includes.frontend.style')
    @stack('addon-style')
  </head>
  <body>
    @include('includes.frontend.navbar-checkout')
    
    @yield('content')

    @include('includes.frontend.footer')
    
    @stack('prepend-script')
    @include('includes.frontend.script')
    @stack('addon-script')
  </body>
</html>