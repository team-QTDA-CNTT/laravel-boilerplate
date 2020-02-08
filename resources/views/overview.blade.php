@extends('layouts.app')
@section('content')
    <!--  Home -->
    <section class="py-16 border-b">
      <div class="container mx-auto px-1 lg:flex">
        <div class="w-full lg:w-2/5">
          <h1 class="text-5xl mt-24 pb-10 font-bold text-gray-800 lg:mt-40">
            Design System for<br>
            E-commerce projects<br>
            on Bootstrap 4.
        </h1>
        <p class="mb-4">
          <span class="py-2 px-3 rounded-full text-teal-700 bg-teal-100 mb-2 mr-1 inline-block">E-commerce web sites</span>
          <span class="py-2 px-3 rounded-full text-teal-700 bg-teal-100 mb-2 mr-1 inline-block">Marketplaces</span>
          <span class="py-2 px-3 rounded-full text-teal-700 bg-teal-100 mb-2 mr-1 inline-block">Booking projects</span>
          <span class="py-2 px-3 rounded-full text-teal-700 bg-teal-100 mb-2 mr-1 inline-block">Product presentations</span>
        </p>
        <img class="h-10" src="http://bootstrap-ecommerce.com/assets/images/apps.png">
        </div>
        <div class="w-full lg:w-3/5">
          <img class="mt-20" src="http://bootstrap-ecommerce.com/assets/images/main.png">
        </div>
      </div>
    </section>

    <!--  Features -->
    <section class="py-20">
      <div class="container px-1 mx-auto lg:flex">
        <div class="w-full lg:w-1/4">
          <div class="m-3 p-3 border rounded text-gray-700 hover:border-blue-600">
            <img class="h-16" src="http://bootstrap-ecommerce.com/assets/images/icons/1.svg" alt="icon for  sketchapp" title="icon for sketch">
            <h5 class="text-2xl font-bold  my-3">UI Design</h5>
            <p>Creative UI design templates for e-commerce web sites with creative design components</p>
          </div>
        </div>
        <div class="w-full lg:w-1/4">
          <div class="m-3 p-3 border rounded text-gray-700 hover:border-blue-600">
            <img class="h-16" src="http://bootstrap-ecommerce.com/assets/images/icons/2.svg" alt="icon for  sketchapp" title="icon for sketch">
            <h5 class="text-2xl font-bold  my-3">Code</h5>
            <p>Bootstrap ui kit includes HTML CSS components library to build online shop web sites</p>
          </div>
        </div>
        <div class="w-full lg:w-1/4">
          <div class="m-3 p-3 border rounded text-gray-700 hover:border-blue-600">
            <img class="h-16" src="http://bootstrap-ecommerce.com/assets/images/icons/3.svg" alt="icon for  sketchapp" title="icon for sketch">
            <h5 class="text-2xl font-bold  my-3">Templates</h5>
            <p>Fully responsive e-commerce templates and layouts to boost your front-end devlopment</p>
          </div>
        </div>
        <div class="w-full lg:w-1/4">
          <div class="m-3 p-3 border rounded text-gray-700 hover:border-blue-600">
            <img class="h-16" src="http://bootstrap-ecommerce.com/assets/images/icons/4.svg" alt="icon for  sketchapp" title="icon for sketch">
            <h5 class="text-2xl font-bold  my-3">UI Design</h5>
            <p>Mobile apps and web sites are popular now. Get mobile html templates and ui layouts</p>
          </div>
        </div>
      </div>
      <div class="container px-1 mx-auto">
        <div class="w-full lg:w-3/5 mx-auto mt-16 rounded shadow-lg">
          <div class="bg-gray-300 overflow-hidden rounded-t-lg">
        	  <div style="
              background-image: linear-gradient(45deg,
                rgba(255, 255, 255, 0.15) 25%,
                transparent 25%,
                transparent 50%,
                rgba(255, 255, 255, 0.15) 50%,
                rgba(255, 255, 255, 0.15) 75%,
                transparent 75%, transparent);
              background-size: 1rem 1rem;
            " class="bg-teal-700 text-white text-center w-4/5 text-sm">80% completed</div>
        	</div>
          <div class="p-16 text-center text-gray-700">
            <h2 class="text-4xl mb-4 font-bold">Creating an e-commerce project? <br>
              80% of your work is already done..</h2>
              <p class="mb-4">Build responsive e-commerce projects on the web with this UI kit made for ecommerce projects for developers and designers.
                Bootstrap UI kit is a toolkit for developing online shops, marketplaces and booking websites with HTML, CSS, and JS.
                It also has a library for web designers to create UI designs for ecommerce web sites.
                Quickly prototype with ready made blocks and plugins.
                Build your entire project with our styles and plugins.</p>
                <p><b>Easy to customize</b> <b class="mx-4">Mobile friendly</b> <b>Support by author</b></p>
          </div>
        </div>
    </div>
    </section>

    <!--  Designer -->
    <section class="pb-20">
      <div class="container px-1 mx-auto">
        <div class="text-center text-gray-700 my-4">
          <h2 class="text-3xl font-bold mb-3 text-gray-800">For designers</h2>
          <p class="mb-3">Well organized layers and symbol based</p>
          <div class="">
        		<span class="mx-2"><img class="inline-block h-6 mr-2" src="http://bootstrap-ecommerce.com/assets/images/icons/sketch.png" title="Sketch icon">Sketch</span>
        		<span class="mx-2"><img class="inline-block h-6 mr-2" src="http://bootstrap-ecommerce.com/assets/images/icons/figma.png" alt="figma icon">Figma (soon)</span>
        	</div>
        </div>
        <div class="bg-gray-300 border rounded overflow-hidden">
          <div class="bg-gray-100 border-b h-10 px-3 py-2">
            <span class="inline-block w-3 h-3 bg-gray-400 rounded-full mr-1"></span>
            <span class="inline-block w-3 h-3 bg-gray-400 rounded-full mr-1"></span>
            <span class="inline-block w-3 h-3 bg-gray-400 rounded-full mr-1"></span>
          </div>
          <div class="p-8 overflow-x whitespace-no-wrap">
            <div class="w-2/3 lg:w-2/5 inline-block shadow-lg mr-4">
              <img src="http://bootstrap-ecommerce.com/assets/images/design/System.jpg">
            </div>
            <div class="w-2/3 lg:w-2/5 inline-block shadow-lg mr-4">
              <img src="http://bootstrap-ecommerce.com/assets/images/design/Cart.jpg">
            </div>
            <div class="w-2/3 lg:w-2/5 inline-block shadow-lg mr-4">
              <img src="http://bootstrap-ecommerce.com/assets/images/design/Listing-large.jpg">
            </div>
          </div>
        </div>
        <div class="text-center relative -m-3">
          <a href="#" class="rounded-full  px-5 py-4 bg-white shadow-lg font-bold text-gray-700">Explore all components
            <img class="inline-block h-6 ml-2" src="http://bootstrap-ecommerce.com/assets/images/icons/sketch.png">
          </a>
        </div>
      </div>
    </section>

    <!--  Developer -->
    <section class="pb-20">
      <div class="container px-1 mx-auto">
        <div class="text-center text-gray-700 my-4">
          <h2 class="text-3xl font-bold mb-3 text-gray-800">For developers</h2>
          <p class="mb-3">ncluded FontAwesome, InterUI webfont, Sliders, jQuery…<br>
            Semantic and clean code made with Bootstrap 4 CSS framework</p>
          <div class="">
        		<span class="mx-2"><img class="inline-block h-6 mr-2" src="http://bootstrap-ecommerce.com/assets/images/icons/bootstrap.png" title="Sketch icon">Bootstrap 4.3</span>
        		<span class="mx-2"><img class="inline-block h-6 mr-2" src="http://bootstrap-ecommerce.com/assets/images/icons/semantic.png" alt="figma icon">Semantic UI (soon)</span>
        	</div>
        </div>
        <div class="container mx-auto lg:flex">
          <div class="w-full lg:w-1/2">
            <div class="border rounded overflow-hidden">
              <div class="bg-gray-100 border-b h-10 px-3 py-2">
                <span class="inline-block w-3 h-3 bg-gray-400 rounded-full mr-1"></span>
                <span class="inline-block w-3 h-3 bg-gray-400 rounded-full mr-1"></span>
                <span class="inline-block w-3 h-3 bg-gray-400 rounded-full mr-1"></span>
              </div>
              <div class="p-8">
                <img class="" src="http://bootstrap-ecommerce.com/assets/images/misc/files.jpg">
              </div>
            </div>
          </div>
          <div class="w-full lg:w-1/2">
            <div class="px-10 py-12 bg-black">
              <img class="" src="http://bootstrap-ecommerce.com/assets/images/misc/code.png">
            </div>
          </div>
        </div>
        <div class="text-center relative -m-3">
          <a href="#" class="rounded-full  px-5 py-4 bg-white shadow-lg font-bold text-gray-700">View HTML components
            <img class="inline-block h-6 ml-2" src="http://bootstrap-ecommerce.com/assets/images/icons/bootstrap.png">
          </a>
        </div>
      </div>
    </section>

    <!--  With starter templates -->
    <section class="py-20 bg-gray-100">
      <div class="container mx-auto px-1">
        <div class="text-center text-gray-700 my-4">
          <h2 class="text-3xl font-bold mb-3 text-gray-800">With starter templates</h2>
          <p class="mb-3">Ready to use for your next project. All necessary files included</p>
        </div>
        <div class="md:flex">
          <div class="w-full md:w-1/3  mx-2">
            <div class="mx-2 mb-4 rounded border bg-white overflow-hidden">
              <img class="border rounded" src="http://bootstrap-ecommerce.com/assets/images/screenshots/starter1.jpg" alt="">
              <div class="text-gray-700 py-4 px-5">
                Home page samples
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/3 mx-2">
            <div class="mx-2 mb-4 rounded border bg-white overflow-hidden">
              <img class="border rounded" src="http://bootstrap-ecommerce.com/assets/images/screenshots/starter4.jpg" alt="">
              <div class="text-gray-700 py-4 px-5">
                Listing pages
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/3 mx-2">
            <div class="mx-2 mb-4 rounded border bg-white overflow-hidden">
              <img class="border rounded" src="http://bootstrap-ecommerce.com/assets/images/screenshots/more.jpg" alt="">
              <div class="text-gray-700 py-4 px-5">
                10+ starter layouts
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--  Statis -->
    <section class="py-20">
      <div class="container text-gray-700 mx-auto px-1 md:flex lg:px-20">
        <div class="w-full md:w1/6 text-center">
          <img class="h-8 mx-auto" src="http://bootstrap-ecommerce.com/assets/images/icons/circle.svg" alt="">
          <div class="mt-3">
            <h6 class="font-bold">100+ components</h6>
            <p>Updating always</p>
          </div>
        </div>
        <div class="w-full md:w1/6 text-center">
          <img class="h-8 mx-auto" src="http://bootstrap-ecommerce.com/assets/images/icons/circle.svg" alt="">
          <div class="mt-3">
            <h6 class="font-bold">Easy to customize</h6>
            <p>Super simple</p>
          </div>
        </div>
        <div class="w-full md:w1/6 text-center">
          <img class="h-8 mx-auto" src="http://bootstrap-ecommerce.com/assets/images/icons/circle.svg" alt="">
          <div class="mt-3">
            <h6 class="font-bold">100+ icons</h6>
            <p>Icon system</p>
          </div>
        </div>
        <div class="w-full md:w1/6 text-center">
          <img class="h-8 mx-auto" src="http://bootstrap-ecommerce.com/assets/images/icons/circle.svg" alt="">
          <div class="mt-3">
            <h6 class="font-bold">Responsive</h6>
            <p>Mobile friendly</p>
          </div>
        </div>
        <div class="w-full md:w1/6 text-center">
          <img class="h-8 mx-auto" src="http://bootstrap-ecommerce.com/assets/images/icons/circle.svg" alt="">
          <div class="mt-3">
            <h6 class="font-bold">Webfonts</h6>
            <p>InterUI, Roboto</p>
          </div>
        </div>
        <div class="w-full md:w1/6 text-center">
          <img class="h-8 mx-auto" src="http://bootstrap-ecommerce.com/assets/images/icons/circle.svg" alt="">
          <div class="mt-3">
            <h6 class="font-bold">Templates</h6>
            <p>Starter layouts</p>
          </div>
        </div>
      </div>
    </section>


    <section class="py-20">
      <div class="container mx-auto px-1">
        <div class="text-center text-gray-700 my-4">
          <h2 class="text-3xl font-bold mb-3 text-gray-800">Download all together</h2>
          <p class="mb-3">Updated on Nov 2019</p>
        </div>
        <div class="container md:flex justify-center text-gray-700">
          <div class="rounded-lg shadow-lg p-8 m-4 ww-full md:w-1/4">
            <img class="h-6" src="http://bootstrap-ecommerce.com/assets/images/icons/sketch.png" alt="">
            <h5 class="font-bold mt-3 text-xl my-2">For Designers</h5>
            <p>Design system<br>
              Components<br>
              Templates</p>
            <a href="#" class="font-bold px-6 py-3 border rounded-lg border-teal-600 text-teal-700 inline-block mt-4 hover:text-white hover:bg-teal-700">Design Bundle</a>
          </div>
          <div class="rounded-lg shadow-lg p-8 m-4 ww-full md:w-1/4">
            <img class="h-6 inline-block" src="http://bootstrap-ecommerce.com/assets/images/icons/html.png" alt="">
            <img class="h-6 inline-block" src="http://bootstrap-ecommerce.com/assets/images/icons/bootstrap.png" class="icon-app">
            <h5 class="font-bold mt-3 text-xl my-2">For Developers</h5>
            <p>HTML/CSS/SASS files<br>
              Scripts<br>
              Layout samples</p>
            <a href="#" class="font-bold px-6 py-3 border rounded-lg border-teal-600 text-teal-700 inline-block mt-4 hover:text-white hover:bg-teal-700">Developer Bundle</a>
          </div>
        </div>
      </div>
    </section>
@stop
