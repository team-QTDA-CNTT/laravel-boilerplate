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
