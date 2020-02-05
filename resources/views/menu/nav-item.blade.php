
<li class="
      inline-block
      mx-1
      @if($currentPageCode === $page['code'])
        border-b border-teal-500
      @endif
    "
>
  <a
    class="p-4 block"
    href="{{route(
      $page['route']
    )}}">{{$page['name']}}</a>
</li>
