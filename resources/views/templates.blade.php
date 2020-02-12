@extends('layouts.app')
@section('content')
<div class="container mx-auto max-w-3xl my-20">
  <div data-slideshow="slideshow" class="relative w-full">
    <div class="overflow-hidden" data-glide-el="track">
      <ul class="relative w-full overflow-hidden flex flex-no-wrap">
        <li class="w-full h-full ">
          <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide1.jpg" alt="">
        </li>
        <li class="w-full h-full flex-shrink-0 whitespace-normal">
          <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide2.jpg" alt="">
        </li>
        <li class="w-full h-full flex-shrink-0 whitespace-normal">
          <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide3.jpg" alt="">
        </li>
      </ul>
    </div>
    <div class="" data-glide-el="controls">
      <button class="absolute w-2/12 h-full top-0 left-0 text-white text-5xl opacity-75 focus:outline-none" data-glide-dir="<"><i class="fas fa-angle-left"></i></button>
      <button class="absolute w-2/12 h-full top-0 right-0 text-white text-5xl opacity-75 focus:outline-none" data-glide-dir=">"><i class="fas fa-angle-right"></i></button>
    </div>
    <div class="absolute w-full bottom-0 text-center mb-3 text-white" data-glide-el="controls[nav]">
      <button class="w-3 h-3 inline-block border border-white rounded-full active:bg-white mx-2 focus:outline-none" data-glide-dir="=0"></button>
      <button class="w-3 h-3 inline-block border border-white rounded-full active:bg-white mx-2 focus:outline-none" data-glide-dir="=1"></button>
      <button class="w-3 h-3 inline-block border border-white rounded-full active:bg-white mx-2 focus:outline-none" data-glide-dir="=2"></button>
    </div>
  </div>
</div>



<div class="container mx-auto max-w-3xl my-20">
  <div data-slideshow="carousel" class="relative w-full">
    <div class="overflow-hidden" data-glide-el="track">
      <ul class="relative w-full overflow-hidden flex flex-no-wrap">
        <li class="flex-shrink-0 whitespace-normal w-1/4">
          <div class="m-2 p-4 border rounded ">
            <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg" alt="">
          </div>
        </li>
        <li class="flex-shrink-0 whitespace-normal w-1/4">
          <div class="m-2 p-4 border rounded ">
            <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg" alt="">
          </div>
        </li>
        <li class="flex-shrink-0 whitespace-normal w-1/4">
          <div class="m-2 p-4 border rounded ">
            <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg" alt="">
          </div>
        </li>
        <li class="flex-shrink-0 whitespace-normal w-1/4">
          <div class="m-2 p-4 border rounded ">
            <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg" alt="">
          </div>
        </li>
        <li class="flex-shrink-0 whitespace-normal w-1/4">
          <div class="m-2 p-4 border rounded ">
            <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg" alt="">
          </div>
        </li>
        <li class="flex-shrink-0 whitespace-normal w-1/4">
          <div class="m-2 p-4 border rounded ">
            <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg" alt="">
          </div>
        </li>
        <li class="flex-shrink-0 whitespace-normal w-1/4">
          <div class="m-2 p-4 border rounded ">
            <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg" alt="">
          </div>
        </li>
      </ul>
    </div>
    <div class="" data-glide-el="controls">
      <button class="absolute w-2/12 h-full top-0 left-0 text-white text-5xl opacity-75 focus:outline-none" data-glide-dir="<"><i class="fas fa-angle-left"></i></button>
      <button class="absolute w-2/12 h-full top-0 right-0 text-white text-5xl opacity-75 focus:outline-none" data-glide-dir=">"><i class="fas fa-angle-right"></i></button>
    </div>
    <div class="absolute w-full bottom-0 text-center mb-3 text-white" data-glide-el="controls[nav]">
      <button class="w-3 h-3 inline-block border border-white rounded-full active:bg-white mx-2 focus:outline-none" data-glide-dir="=0"></button>
      <button class="w-3 h-3 inline-block border border-white rounded-full active:bg-white mx-2 focus:outline-none" data-glide-dir="=1"></button>
      <button class="w-3 h-3 inline-block border border-white rounded-full active:bg-white mx-2 focus:outline-none" data-glide-dir="=2"></button>
    </div>
  </div>
</div>





@stop
@push('js')
<script src="{{asset('js/glide.min.js')}}"></script>
<script>
  new Glide('[data-slideshow=slideshow]', {
    type: 'carousel',
    classes : {
      activeNav: 'bg-white',
    }
  }).mount();

  new Glide('[data-slideshow=carousel]', {
    type: 'carousel',
      perView: 3,
    classes : {
      activeNav: 'bg-white',
    }
  }).mount();


</script>
@endpush
