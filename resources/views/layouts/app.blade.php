<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    @include('layouts.components.head')
    @stack('css')
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/38243d5f71.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.19.0/themes/prism.min.css">

  </head>
  <body class="bg-white">
    <!--  Header -->
    @include('layouts.components.nav-bar')

      @yield('content')

    @include('layouts.components.footer')

    <script src="{{ mix('js/app.js')}}"></script>

    @stack('js')
  </body>
</html>
