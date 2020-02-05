<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f077b2b669.js"></script>
  </head>
  <body class="bg-white">

    <!--  Header -->
    <header class="z-50 static inset-x-0 top-0 lg:fixed">
      <nav class="bg-white shadow-md px-4 flex justify-between items-center text-base  font-bold flex-col lg:flex-row">
        <a class="py-1 pr-4" href="/"><img class="h-8" src="https://i0.wp.com/uphinh.org/images/2020/02/02/l.png"></a>
        <div class="max-w-full">
          <ul class="text-teal-700 overflow-x-auto whitespace-no-wrap">
            @foreach($pages as $page)
              @include('menu.nav-item')
            @endforeach
          </ul>
        </div>
        <div>
          <a class="px-3 py-2 text-teal-700 border border-teal-500 rounded hidden lg:inline-block" href="#">Hire Me</a>
          <a class="px-3 py-2 bg-teal-500 text-white rounded hidden lg:inline-block" href="#">Download</a>
        </div>
      </nav>
    </header>
    @yield('content')
    <footer class="border-t py-10 text-center">
      <img class="h-10 inline-block" src="https://i0.wp.com/uphinh.org/images/2020/02/02/l.png" alt="">
    </footer>
  </body>
</html>
