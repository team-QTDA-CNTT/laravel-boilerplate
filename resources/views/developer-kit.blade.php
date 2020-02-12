@extends('layouts.app')

@section('content')
<section class="pt-20">
  <div class="container mx-auto">
    <div class="my-4 border-b">
      <h2 class="font-xl text-black">Developer kit</h2>
      <p>Front-end UI kit to create a e-commerce websites with html templates and code snippets. This UI framework made for web developers to build all type of ecommerce platform. ALl components based on Bootstrap 4 framework. </p>
    </div>

    <div class="my-4 border-b">
      <button type="button" class="px-4 py-2 mb-2 font-bold text-white bg-teal-700 rounded hover:bg-teal-800">Primary</button>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-white bg-gray-700 rounded hover:bg-gray-800">Secondary</button>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-white bg-green-700 rounded hover:bg-green-800">Success</button>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-white bg-red-700 rounded hover:bg-red-800">Danger</button>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-white bg-orange-700 rounded hover:bg-orange-800">Warning</button>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-white bg-teal-700 rounded hover:bg-teal-800">Info</button>
      <button type="button" class="px-4 py-2 mb-2 font-bold border rounded hover:border-gray-500">Light</button>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-white bg-gray-800 rounded hover:bg-black">Dark</button>
      <br><br><br>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-teal-700 border border-teal-700 rounded hover:bg-teal-700 hover:text-white">Primary</button>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-gray-700 border border-gray-700 rounded hover:bg-gray-700 hover:text-white">Secondary</button>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-green-700 border border-green-700 rounded hover:bg-green-700 hover:text-white">Success</button>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-red-700 border border-red-700 rounded hover:bg-red-700 hover:text-white">Danger</button>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-orange-700 border border-orange-700 rounded hover:bg-orange-700 hover:text-white">Warning</button>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-teal-700 border border-teal-700 rounded hover:bg-teal-700 hover:text-white">Info</button>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-gray-400 border rounded hover:bg-gray-500 hover:text-gray-700">Light</button>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-gray-700 border border-gray-700 rounded hover:bg-gray-700 hover:text-white">Dark</button>
      <br><br><br>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-white bg-teal-700 rounded-full hover:bg-teal-800">Rounded pill</button>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-teal-700 border border-teal-700 rounded-full hover:bg-teal-700 hover:text-white">Rounded pill</button>
      <button type="button" class="w-10 py-2 mb-2 font-bold text-white bg-teal-700 rounded-full hover:bg-teal-800"><i class="fa fa-user"></i></button>
      <button type="button" class="w-10 py-2 mb-2 font-bold text-teal-700 border border-teal-700 rounded-full hover:bg-teal-700 hover:text-white"><i class="fa fa-user"></i></button>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-white bg-teal-700 rounded hover:bg-teal-800">Button <i class="fa fa-shopping-cart"></i></button>
      <button type="button" class="px-4 py-2 mb-2 font-bold text-white bg-teal-700 rounded hover:bg-teal-800"><i class="fa fa-shopping-cart"></i> With icon</button>
      <button type="button" class="w-10 py-2 mb-2 font-bold text-white bg-teal-700 rounded hover:bg-teal-800"><i class="fa fa-user"></i></button>
    </div>

    <div class="my-4 border-b">
      <div class="px-4 py-3 mb-3 text-red-600 bg-red-200 border border-red-300 rounded">
        A simple primary alert—check it out!
      </div>
      <div class="px-4 py-3 mb-3 text-purple-600 bg-purple-200 border border-purple-300 rounded">
        A simple primary alert—check it out!
      </div>
      <div class="px-4 py-3 mb-3 text-green-600 bg-green-200 border border-green-300 rounded">
        A simple success alert—check it out!
      </div>
      <div class="px-4 py-3 mb-3 text-pink-600 bg-pink-200 border border-pink-300 rounded">
        A simple danger alert—check it out!
      </div>
      <div class="px-4 py-3 mb-3 text-orange-600 bg-orange-200 border border-orange-300 rounded">
        A simple warning alert—check it out!
      </div>
      <div class="px-4 py-3 mb-3 text-blue-600 bg-blue-200 border border-blue-300 rounded">
        A simple info alert—check it out!
      </div>
      <div class="px-4 py-3 mb-3 text-gray-600 bg-gray-200 border border-gray-300 rounded">
        A simple dark alert—check it out!
      </div>
    </div>

    <div class="my-4 border-b container">
      <form class="p-4 mb-6 md:flex">
        <div class="w-full md:w-1/3 p-2">
          <input type="text" placeholder="Type here" class="block w-full px-3 py-2 mb-3 border rounded" name="">
          <input type="password" placeholder="Password" class="block w-full px-3 py-2 mb-3 border rounded" name="">
          <input type="text" placeholder="Readonly input" readonly="" class="block w-full px-3 py-2 mb-3 bg-gray-300 border rounded">
        </div>
        <div class="w-full md:w-1/3 p-2">
          <select class="form-select block w-full px-3 py-2 mb-3 border rounded">
						<option>Basic selection</option>
						<option>Uzbekistan</option>
						<option>Kazakhstan</option>
						<option>United States</option>
						<option>Russia</option>
						<option>Others</option>
					</select>
          <textarea id="exampleFormControlTextarea1" rows="3" class="block w-full px-3 py-2 mb-1 border rounded"></textarea>
          <div class="text-sm text-gray-500"> Maximum character is 250 letters</div>

        </div>
        <div class="w-full md:w-1/3 p-2">
          <label class="block"><input type="checkbox" class="text-teal-500 form-checkbox" checked=""><span class="ml-2">Checked</span></label><br>
          <label class="block"><input type="checkbox" class="text-teal-500 form-checkbox" unchecked=""><span class="ml-2">Unchecked</span></label><br>
          <label class="block"><input type="radio" class="text-teal-500 form-radio" name="myselection1" value="" checked=""><span class="ml-2">Checked</span></label><br>
          <label class="block"><input type="radio" class="text-teal-500 form-radio" name="myselection1" value=""><span class="ml-2">Unchecked</span></label><br>
        </div>
      </form>
    </div>

    <div class="my-4 border-b">
      <div class="p-6 border rounded mb">
        <span class="block mb-2 mr-3 lg:inline-block">
          <span class="relative inline-block w-12 h-12 p-3 mr-1 text-center text-white bg-teal-500 rounded-full">
          <i class="fa fa-bell white"></i>
          <span class="absolute top-0 right-0 px-2 -m-1 text-sm leading-normal text-white bg-red-500 rounded-full leading-nose">2</span>
          </span> Some more short text
        </span>

        <span class="block mb-2 mr-3 lg:inline-block">
          <span class="relative inline-block w-12 h-12 p-3 mr-1 text-center text-teal-500 border border-teal-500 rounded-full">
            <i class="fa fa-envelope text-primary"></i>
            <span class="absolute top-0 right-0 px-2 -m-1 text-sm leading-normal text-white bg-red-500 rounded-full leading-nose">3</span>
          </span> New messages
        </span>

        <span class="block mb-2 mr-3 lg:inline-block">
          <span class="relative inline-block w-12 h-12 p-3 mr-1 text-center text-teal-500 bg-gray-300 rounded-full">
            <i class="fa fa-shopping-cart text-primary"></i>
            <span class="absolute top-0 right-0 px-2 -m-1 text-sm leading-normal text-white bg-red-500 rounded-full leading-nose">1</span>
          </span> Shopping cart
        </span>

        <span class="">
          <span class="relative">
            <img class="inline-block w-12 h-12 mr-1 -mt-2 border rounded-full" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/avatars/avatar2.jpg" alt="">
            <span class="absolute top-0 right-0 px-2 -mt-4 text-sm leading-normal text-white bg-red-500 rounded-full leading-nose">4</span>
          </span>
          Hi, Username
        </span>
      </div>

      <div class="container pt-6 border rounded md:flex">
          <div class="w-full p-4 mb-6 lg:w-1/3">
            <span class="inline-block float-left w-12 h-12 p-3 mr-2 text-center text-white bg-teal-500 rounded-full">
              <i class="fa fa-user white"></i>
            </span>
            <h6 class="font-bold">Mr. John Doe</h6>
            <p class="text-sm text-gray-500">Some description like Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="w-full p-4 mb-6 lg:w-1/3">
            <span class="inline-block float-left w-12 h-12 p-3 mr-2 text-center text-teal-500 border border-teal-500 rounded-full">
              <i class="fa fa-user text-primary"></i>
            </span>
            <h6 class="font-bold">Mr. John Doe</h6>
            <p class="text-sm text-gray-500">Some description like Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="w-full p-4 mb-6 lg:w-1/3">
            <span class="">
              <img class="inline-block float-left w-12 h-12 mr-2 border rounded-full" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/avatars/avatar2.jpg" alt="">
              <h6 class="font-bold">Mr. John Doe</h6>
              <p class="text-sm text-gray-500">Some description like Lorem ipsum dolor sit amet.</p>
            </span>
          </div>
        </div>

    </div>

    <div class="my-4 border-b">
    </div>

    <div class="my-4 border-b">
    </div>

    <div class="my-4 border-b">
    </div>



  </div>
</section>
@stop
