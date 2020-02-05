@extends('master')
@section('content')
    <div class="flex">
      <aside class="hidden md:block  w-64 overflow-y h-screen pt-12 border-r sticky top-0">
        <nav class="pt-8 text-gray-600">
          <a class="text-teal-600 font-bold py-2 px-3 block mb-1 text-sm" href="#">CONTENT</a>
          <ul class="menu-aside">
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#colors">Colors</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#typography">Typography</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#icons">Icons</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#helper_classes">Helper classes</a> </li>
      		</ul>
          <a class="text-teal-600 font-bold py-2 px-3 block mb-1 text-sm" href="#">COMPONENTS</a>
          <ul class="menu-aside">
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#alerts">Alerts</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#buttons">Buttons</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#form_elements">Form elements</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#badges">Badges and ratings</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#cards">Cards and boxes</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#images">Images</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#navbar">Navbar</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#icontext">Icon with text</a> </li>
      		</ul>
        </nav>
      </aside>
      <main class="w-full pt-12 text-gray-700">
        <section class="px-10 py-16 border-b" id="colors">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Colors</h1>
            <h3 class="text-sm font-bold mb-4">MAIN COLORS</h3>
            <div class="w-48 h-32 p-8 text-white text-center mr-4 mb-6 inline-block bg-black">
              bg-black
            </div>
            <div class="w-48 h-32 p-8 text-gray-700 text-center mr-4 mb-6 bg-white shadow inline-block">
              bg-white
            </div>
            <div class="w-48 h-32 p-8 text-white text-center mr-4 mb-6 inline-block bg-gray-900">
              bg-gray-900
            </div>
            <div class="w-48 h-32 p-8 text-white text-center mr-4 mb-6 inline-block bg-red-900">
              bg-red-900
            </div>
            <div class="w-48 h-32 p-8 text-white text-center mr-4 mb-6 inline-block bg-orange-900">
              bg-orange-900
            </div>
            <div class="w-48 h-32 p-8 text-white text-center mr-4 mb-6 inline-block bg-yellow-900">
              bg-yellow-900
            </div>
            <div class="w-48 h-32 p-8 text-white text-center mr-4 mb-6 inline-block bg-green-900">
              bg-green-900
            </div>
            <div class="w-48 h-32 p-8 text-white text-center mr-4 mb-6 inline-block bg-teal-900">
              bg-teal-900
            </div>
            <div class="w-48 h-32 p-8 text-white text-center mr-4 mb-6 inline-block bg-blue-900">
              bg-blue-900
            </div>
            <div class="w-48 h-32 p-8 text-white text-center mr-4 mb-6 inline-block bg-indigo-900">
              bg-indigo-900
            </div>
            <div class="w-48 h-32 p-8 text-white text-center mr-4 mb-6 inline-block bg-purple-900">
              bg-purple-900
            </div>
            <div class="w-48 h-32 p-8 text-white text-center mr-4 mb-6 inline-block bg-pink-900">
              bg-pink-900
            </div>
            <h3 class="text-sm font-bold mb-4 mt-6">TEXT COLORS</h3>
            <div class="p-6 border rounded text-xl">
              <p class="pb-2 text-white bg-gray-600">Text-white - Utilities for controlling the text color of an element.</p>
              <p class="pb-2 text-gray-900">Text-gray-900 - Utilities for controlling the text color of an element.</p>
              <p class="pb-2 text-red-900">Text-red-900 - Utilities for controlling the text color of an element.</p>
              <p class="pb-2 text-orange-900">Text-orange-900 - Utilities for controlling the text color of an element.</p>
              <p class="pb-2 text-yellow-900">Text-yellow-900 - Utilities for controlling the text color of an element.</p>
              <p class="pb-2 text-green-900">Text-green-900 - Utilities for controlling the text color of an element.</p>
              <p class="pb-2 text-teal-900">Text-teal-900 - Utilities for controlling the text color of an element.</p>
              <p class="pb-2 text-blue-900">Text-blue-900 - Utilities for controlling the text color of an element.</p>
              <p class="pb-2 text-indigo-900">Text-indigo-900 - Utilities for controlling the text color of an element.</p>
              <p class="pb-2 text-purple-900">Text-purple-900 - Utilities for controlling the text color of an element.</p>
              <p class="pb-2 text-pink-900">Text-pink-900 - Utilities for controlling the text color of an element.</p>
            </div>
          </div>
        </section>

        <section class="px-10 py-16 border-b" id="typography">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Typography</h1>
            <p class="text-xs ...">.text-xs - The quick brown fox ...</p>
            <p class="text-sm ...">.text- The quick brown fox ...</p>
            <p class="text-base ...">.text-base The quick brown fox ...</p>
            <p class="text-lg ...">.text-lg The quick brown fox ...</p>
            <p class="text-xl ...">.text-xl The quick brown fox ...</p>
            <p class="text-2xl ...">.text-2xl The quick brown fox ...</p>
            <p class="text-3xl ...">.text-3xl The quick brown fox ...</p>
            <p class="text-4xl ...">.text-4xl The quick brown fox ...</p>
            <p class="text-5xl ...">.text-5xl The quick brown fox ...</p>
            <p class="text-6xl ...">.text-6xl The quick brown fox ...</p>
          </div>
        </section>

        <section class="px-10 py-16 border-b" id="typography">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Alerts</h1>
            <div class="px-4 py-3 rounded border mb-3 bg-red-200 text-red-600 border-red-300">
              A simple primary alert—check it out!
            </div>
            <div class="px-4 py-3 rounded border mb-3 bg-purple-200 text-purple-600 border-purple-300">
              A simple primary alert—check it out!
            </div>
            <div class="px-4 py-3 rounded border mb-3 bg-green-200 text-green-600 border-green-300">
              A simple success alert—check it out!
            </div>
            <div class="px-4 py-3 rounded border mb-3 bg-pink-200 text-pink-600 border-pink-300">
              A simple danger alert—check it out!
            </div>
            <div class="px-4 py-3 rounded border mb-3 bg-orange-200 text-orange-600 border-orange-300">
              A simple warning alert—check it out!
            </div>
            <div class="px-4 py-3 rounded border mb-3 bg-blue-200 text-blue-600 border-blue-300">
              A simple info alert—check it out!
            </div>
            <div class="px-4 py-3 rounded border mb-3 bg-gray-200 text-gray-600 border-gray-300">
              A simple dark alert—check it out!
            </div>

            <a href="#" data-target="typography-code" onclick="toggleTarget(event)"> Show code </a>
            <div data-selector="typography-code" class="overflow-hidden" style="display: none; ">Code ở đây</div>
          </div>
        </section>

        <section class="px-10 py-16 border-b" id="buttons">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Buttons</h1>
            <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded">Primary</button>
            <button type="button" class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded">Secondary</button>
            <button type="button" class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded">Success</button>
            <button type="button" class="bg-red-700 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">Danger</button>
            <button type="button" class="bg-orange-700 hover:bg-orange-800 text-white font-bold py-2 px-4 rounded">Warning</button>
            <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded">Info</button>
            <button type="button" class="hover:border-gray-500 font-bold py-2 px-4 rounded border">Light</button>
            <button type="button" class="bg-gray-800 hover:bg-black text-white font-bold py-2 px-4 rounded">Dark</button>
            <br><br><br>
            <button type="button" class="text-teal-700 hover:bg-teal-700 border border-teal-700 hover:text-white font-bold py-2 px-4 rounded">Primary</button>
            <button type="button" class="text-gray-700 hover:bg-gray-700 border border-gray-700 hover:text-white font-bold py-2 px-4 rounded">Secondary</button>
            <button type="button" class="text-green-700 hover:bg-green-700 border border-green-700 hover:text-white font-bold py-2 px-4 rounded">Success</button>
            <button type="button" class="text-red-700 hover:bg-red-700 border border-red-700 hover:text-white font-bold py-2 px-4 rounded">Danger</button>
            <button type="button" class="text-orange-700 hover:bg-orange-700 border border-orange-700 hover:text-white font-bold py-2 px-4 rounded">Warning</button>
            <button type="button" class="text-teal-700 hover:bg-teal-700 border border-teal-700 hover:text-white font-bold py-2 px-4 rounded">Info</button>
            <button type="button" class="hover:bg-gray-500 hover:text-gray-700 text-gray-400 font-bold py-2 px-4 rounded border">Light</button>
            <button type="button" class="text-gray-700 hover:bg-gray-700 border border-gray-700 hover:text-white font-bold py-2 px-4 rounded">Dark</button>
            <br><br><br>
            <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded-full">Rounded pill</button>
            <button type="button" class="text-teal-700 hover:bg-teal-700 border border-teal-700 hover:text-white font-bold py-2 px-4 rounded-full">Rounded pill</button>
            <button type="button" class="w-10 bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 rounded-full"><i class="fa fa-user"></i></button>
            <button type="button" class="text-teal-700 hover:bg-teal-700 border border-teal-700 hover:text-white font-bold py-2 w-10 rounded-full"><i class="fa fa-user"></i></button>
            <br><br><br>
            <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded">Button <i class="fa fa-shopping-cart"></i></button>
            <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded"><i class="fa fa-shopping-cart"></i> With icon</button>
            <button type="button" class="w-10 bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 rounded"><i class="fa fa-user"></i></button>
            <br><br><br>
            <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-1 px-2 text-sm rounded">Small</button>
            <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded">Normal</button>
            <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-3 px-6 text-2xl rounded">Large</button>
          </div>
        </section>

        <section class="px-10 py-16 border-b" id="forms">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Forms</h1>
            <div class="container md:flex">
              <div class="w-full md:w1/2">
                <form class="p-4 mb-6">
                  <h3 class="text-sm font-bold mb-4">INPUT VARIATIONS</h3>
                  <input type="text" placeholder="Type here" class="px-3 py-2 border rounded block w-full mb-3" name="">
                  <input type="password" placeholder="Password" class="px-3 py-2 border rounded block w-full mb-3" name="">
                  <input type="text" placeholder="Readonly input" readonly="" class="px-3 py-2 border rounded block w-full bg-gray-300 mb-3">
                </form>
                <form class="p-4 mb-6">
                  <h3 class="text-sm font-bold mb-4">INPUT VARIATIONS</h3>
                  <textarea id="exampleFormControlTextarea1" rows="3" class="px-3 py-2 border rounded block w-full mb-1" ></textarea>
                  <div class="text-sm text-gray-500"> Maximum character is 250 letters</div>
                </form>
              </div>
              <div class="w-full md:w1/2">
                <form class="p-4 mb-6">
                  <h3 class="text-sm font-bold mb-4">INPUT VARIATIONS</h3>
                  <select class="px-3 py-2 border rounded block w-full mb-3">
        						<option>Basic selection</option>
        						<option>Uzbekistan</option>
        						<option>Kazakhstan</option>
        						<option>United States</option>
        						<option>Russia</option>
        						<option>Others</option>
        					</select>
                  <select class="px-3 py-2 border rounded block w-full mb-3">
        					    <option>Custom selection</option>
        					    <option>United states</option>
        					    <option>Germany</option>
        					    <option>Canada</option>
        					</select>
                </form>
              </div>
            </div>


            <div class="container md:flex">
              <div class="w-full md:w1/3 p-4 mb-6">
                <h3 class="text-sm font-bold mb-4">DEFAULT CHECKBOXES</h3>
                <label class="block"><input type="checkbox" value="" checked=""><span class="pl-2">Basic checkbox</span></label><br>
                <label class="block"><input type="checkbox" value=""><span class="pl-2">Basic checkbox</span></label><br>
                <label class="block"><input name="myradio" type="radio" value="" checked=""><span class="pl-2">Basic radio ppt1</span></label><br>
                <label class="block"><input name="myradio" type="radio" value=""><span class="pl-2">Basic radio opt2</span></label><br>
              </div>
              <div class="w-full md:w1/3 p-4 mb-6">
                <h3 class="text-sm font-bold mb-4">CUSTOM CHECKBOXES</h3>
              </div>
              <div class="w-full md:w1/3 p-4 mb-6">
                <h3 class="text-sm font-bold mb-4">CUSTOM RADIOS</h3>
              </div>
            </div>
          </div>
        </section>

        <section class="px-10 py-16 border-b" id="badges">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Badges and misc</h1>
            <div class="container md:flex md:flex-wrap">
              <div class="w-full md:w-1/2 lg:w-1/4 p-4 mb-6">
                <h3 class="text-sm font-bold mb-4">BADGES</h3>
                <span class="p-1 text-white bg-teal-800 rounded">Offer</span>
                <span class="p-1 text-white bg-red-800 rounded">Offer</span>
                <span class="p-1 text-white bg-blue-800 rounded">Offer</span>
                <span class="p-1 text-white bg-orange-800 rounded">Offer</span>
                <span class="p-1 text-white bg-gray-400 text-gray-800 rounded">Offer</span>
                <span class="p-1 text-white bg-black rounded">Offer</span>

              </div>
              <div class="w-full md:w-1/2 lg:w-1/4 p-4 mb-6">
                <h3 class="text-sm font-bold mb-4">BUTTON BADGE</h3>
                <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded"><span>Button badge</span><span class="px-1 ml-2 text-white bg-gray-400 text-gray-800 rounded">4</span></button>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/4 p-4 mb-6">
                <h3 class="text-sm font-bold mb-4">NOTIFICATION</h3>
                <div class="inline-block">
                  <div class="h-12 w-12 bg-gray-300 text-gray-700 relative rounded-full items-center flex justify-center">
                    <i class="fa fa-bell text-xl" aria-hidden="true"></i>
                    <span class="px-2 leading-normal bg-red-500 absolute top-0 right-0 rounded-full text-white leading-none -m-1">3</span>
                  </div>
                </div>
                <div class="inline-block">
                  <div class="h-8 w-8 bg-teal-500 text-white relative rounded-full items-center flex justify-center">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                    <span class="px-1 leading-tight bg-red-500 absolute top-0 right-0 rounded-full text-white leading-none text-xs -m-1">3</span>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/4 p-4 mb-6">
                <h3 class="text-sm font-bold mb-4">NOTIFICATION TEXT</h3>
                <span class="mr-2">
                  <span class="inline-block">
                    <span class="h-8 w-8 bg-teal-500 text-white relative rounded-full items-center flex justify-center">
                      <i class="fa fa-bell" aria-hidden="true"></i>
                      <span class="px-1 leading-tight bg-red-500 absolute top-0 right-0 rounded-full text-white leading-none text-xs -m-1">3</span>
                    </span>
                  </span>
                  Notification
                </span>
                <span class="">
                  <span class="inline-block">
                    <span class="h-8 w-8 text-teal-700 relative rounded-full items-center flex justify-center">
                      <i class="fa-lg fa fa-envelope"></i>
                      <span class="px-1 leading-tight bg-red-500 absolute top-0 right-0 rounded-full text-white leading-none text-xs -m-1">1</span>
                    </span>
                  </span>
                  Message
                </span>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/4 p-4 mb-6">
                <h3 class="text-sm font-bold mb-4">RATING</h3>
                <span class="text-orange-500">
                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star text-gray-500"></i>
                </span>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/4 p-4 mb-6">
                <h3 class="text-sm font-bold mb-4">RATING</h3>
                <span class="text-orange-500">
                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star text-gray-500"></i>
                </span> 7/10
              </div>
            </div>
          </div>
        </section>

        <section class="px-10 py-16 border-b" id="cards">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Card and boxes</h1>
            <div class="container md:flex">
              <div class="w-full md:w-1/2 p-4 mb-6">
                <h3 class="text-sm font-bold mb-4">CARD</h3>
                <div class="border rounded p-3 text-grey-700">
                  <h4 class="text-xl font-bold mb-1">Card title</h4>
                  <h6 class="font-bold text-gray-500 mb-2">Card subtitle</h6>
                  <p class="mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a class="mr-2" href="#">Card link</a>
                  <a href="#">Another link</a>
                </div>
              </div>
              <div class="w-full md:w-1/2 p-4 mb-6">
                <h3 class="text-sm font-bold mb-4">BOX</h3>
                <div class="border rounded p-3 text-grey-700">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="px-10 py-16 border-b" id="images">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Images</h1>
            <div class="container md:flex">
              <div class="w-full md:w-1/2 p-4 mb-6">
                <h3 class="text-sm font-bold mb-4">IMAGE SIZES</h3>
                <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/posts/1.jpg" class="w-8 h-8 object-cover inline-block">
                <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/posts/2.jpg" class="w-16 h-16 object-cover inline-block">
                <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/posts/3.jpg" class="w-32 h-32 object-cover inline-block">
                <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/posts/1.jpg" class="w-64 h-64 object-cover inline-block">
              </div>
              <div class="w-full md:w-1/2 p-4 mb-6">
                <h3 class="text-sm font-bold mb-4">ROUNDED</h3>
                <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/posts/1.jpg" class="w-8 h-8 object-cover inline-block rounded-full">
                <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/posts/2.jpg" class="w-16 h-16 object-cover inline-block rounded-full">
                <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/posts/3.jpg" class="w-32 h-32 object-cover inline-block rounded-full">
                <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/posts/1.jpg" class="w-64 h-64 object-cover inline-block rounded-full">
              </div>
            </div>
          </div>
        </section>

        <section class="px-10 py-16 border-b" id="navbars">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Navbars</h1>
            <h3 class="text-sm font-bold mb-4">BASIC NAVBAR</h3>
            <nav class="px-4 py-3  border flex justify-between items-center flex-wrap lg:flex-no-wrap">
              <a class="text-2xl mr-3">Brand</a>
              <a data-target="show-menu" onclick="toggleTarget(event)" href="#"  class="text-2xl mr-2 lg:hidden"><i class="fas fa-bars"></i></a>
              <div data-selector="show-menu" class="lg:block w-full">
                <div class="lg:flex lg:justify-between">
                  <ul class="text-xl lg:inline-block">
                    <li class="lg:inline-block"><a href="#" class="py-3 inline-block lg:px-4">Home</a></li>
                    <li class="lg:inline-block"><a href="#" class="py-3 inline-block lg:px-4">Link</a></li>
                    <li class="lg:inline-block"><a data-target="drop-down" onclick="toggleTarget(event)" href="#" class="py-3 inline-block lg:px-4">DropDown <i class="fas fa-sort-down"></i></a>
                      <div class="" data-selector="drop-down" style="display: none;">
                        <ul class="border rounded p-3 text-xl lg:absolute bg-white">
                          <li><a class="py-2 block" href="#">DropDown Menu</a></li>
                          <li><a class="py-2 block" href="#">DropDown Menu</a></li>
                          <li><a class="py-2 block" href="#">DropDown Menu</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="lg:inline-block"><a href="#" class="py-3 inline-block lg:px-4">Other</a></li>
                  </ul>
                  <form class="lg:inline-block" action="" method="post">
                    <input class="p-3 border rounded" type="search" placeholder="Search" aria-label="Search">
                    <button class="p-3 border rounded text-teal-500 border-teal-500 font-bold hover:bg-teal-500 hover:text-white" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </nav>
            <br><br><br>
            <h3 class="text-sm font-bold mb-4">NAVBAR MULTI NAV</h3>
            <nav class="px-2 py-2 bg-gray-900 text-gray-400 lg:flex lg:justify-between">
              <ul class="text-center">
                <li class="inline-block"><a href="#" class="p-2 block">Menu item</a></li>
                <li class="inline-block"><a href="#" class="p-2 block">Menu item</a></li>
                <li class="inline-block"><a href="#" class="p-2 block">Menu item</a></li>
              </ul>
              <ul class="text-center">
                <li class="inline-block"><a href="#" class="p-2 block">Delivery</a></li>
                <li class="inline-block"><a href="#" class="p-2 block">Help</a></li>
                <li class="inline-block"><a data-target="drop-down-2" onclick="toggleTarget(event)" href="#" class="p-2 block">USD <i class="fas fa-sort-down"></i></a>
                  <div class="" data-selector="drop-down-2" style="display: none;">
                    <ul class="border rounded p-3 text-sm absolute bg-white text-gray-700">
                      <li><a class="py-2 block" href="#">DropDown Menu</a></li>
                      <li><a class="py-2 block" href="#">DropDown Menu</a></li>
                      <li><a class="py-2 block" href="#">DropDown Menu</a></li>
                    </ul>
                  </div>
                </li>
                <li class="inline-block"><a href="#" class="p-2 block">Other</a></li>
              </ul>
            </nav>
            <br><br><br>
            <h3 class="text-sm font-bold mb-4">SIMPLE HORIZONTAL NAV</h3>
            <nav class="px-2 py-2 bg-gray-900 text-gray-400">
              <ul class="">
                <li class="inline-block"><a href="#" class="p-2 block">Menu item 1</a></li>
                <li class="inline-block"><a href="#" class="p-2 block">Menu item 2</a></li>
                <li class="inline-block"><a href="#" class="p-2 block">Menu item 3</a></li>
                <li class="inline-block"><a href="#" class="p-2 block">Menu item 4</a></li>
              </ul>
            </nav>


            <br><br><br>
            <h3 class="text-sm font-bold mb-4">NAVBAR MULTI NAV</h3>
            <nav class="px-2 py-2 border text-teal-600">
              <ul class="">
                <li class="inline-block"><a href="#" class="p-2 block">Menu item 1</a></li>
                <li class="inline-block"><a href="#" class="p-2 block">Menu item 2</a></li>
                <li class="inline-block"><a href="#" class="p-2 block">Menu item 3</a></li>
                <li class="inline-block"><a href="#" class="p-2 block">Menu item 4</a></li>
              </ul>
            </nav>

          </div>
        </section>

        <section class="px-10 py-16 border-b" id="icontext">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Icon with text</h1>


            <h3 class="text-sm font-bold mb-4">Basic</h3>
            <div class="container md:flex">
              <div class="w-full lg:w-1/3 p-4 mb-6">
                <span class="mr-2">
                  <span class="inline-block mr-2 ">
                    <span class="h-12 w-12 bg-gray-300 text-gray-700 relative items-center flex justify-center  text-xl">
                      <i class="fa fa-user"></i>
                    </span>
                  </span>
                  Some more short text
                </span>
              </div>
              <div class="w-full lg:w-1/3 p-4 mb-6">
                <span class="mr-2">
                  <span class="inline-block mr-2 ">
                    <span class="h-12 w-12 bg-teal-500 text-white relative flex items-center justify-center rounded-full text-xl">
                      <i class="fa fa-user"></i>
                    </span>
                  </span>
                  Some more short text
                </span>
              </div>
              <div class="w-full lg:w-1/3 p-4 mb-6">
                <span class="flex items-center justify-center">
                  <img class="h-12 border rounded-full mr-2" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/avatars/avatar2.jpg" alt="">
                  <span class="">Some more short text</span>
                </span>
              </div>
            </div>

            <br><br>
            <h3 class="text-sm font-bold mb-4">ALIGNED TOP</h3>
            <div class="container md:flex rounded border  pt-6">
              <div class="w-full lg:w-1/3 p-4 mb-6">
                <div class="flex items-center justify-center">
                  <span class="h-12 w-12 bg-teal-500 text-white relative flex items-center justify-center rounded-full text-xl">
                      <i class="fa fa-user" aria-hidden="true"></i>
                  </span>
                  <div class="ml-2">
                    <h6 class="font-bold">Mr. John Doe</h6>
                    <p class="text-gray-500 text-sm">Some description like Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-1/3 p-4 mb-6">
                <div class="flex items-center justify-center">
                  <span class="h-12 w-12 border border-teal-500 text-teal-500 relative flex items-center justify-center rounded-full text-xl">
                      <i class="fa fa-user" aria-hidden="true"></i>
                  </span>
                  <div class="ml-2">
                    <h6 class="font-bold">Mr. John Doe</h6>
                    <p class="text-gray-500 text-sm">Some description like Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-1/3 p-4 mb-6">
                <div class="flex items-center justify-center">
                  <img class="h-12 border rounded-full mr-2" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/avatars/avatar2.jpg" alt="">
                  <div class="ml-2">
                    <h6 class="font-bold">Mr. John Doe</h6>
                    <p class="text-gray-500 text-sm">Some description like Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </div>
            </div>
            <br><br>
            <h3 class="text-sm font-bold mb-4">WITH NOTIFICATION</h3>
            <div class="rounded border p-6">

              <span class="mr-2">
                <span class="inline-block mr-2 ">
                  <span class="h-12 w-12 bg-teal-500 text-white relative flex items-center justify-center rounded-full text-xl">
                    <i class="fa fa-bell white"></i>
                    <span class="px-2 leading-normal bg-red-500 absolute top-0 right-0 rounded-full text-white -m-1 text-sm leading-nose">3</span>
                  </span>
                </span>
                Some notification
              </span>

              <span class="mr-2">
                <span class="inline-block mr-2 ">
                  <span class="h-12 w-12 text-teal-500 border border-teal-500 relative flex items-center justify-center rounded-full text-xl">
                    <i class="fa fa-envelope text-primary"></i>
                    <span class="px-2 leading-normal bg-red-500 absolute top-0 right-0 rounded-full text-white -m-1 text-sm leading-nose">2</span>
                  </span>
                </span>
                New messages
              </span>

              <span class="mr-2">
                <span class="inline-block mr-2 ">
                  <span class="h-12 w-12 bg-gray-300 text-teal-500 relative flex items-center justify-center rounded-full text-xl">
                    <i class="fa fa-shopping-cart text-primary"></i>
                    <span class="px-2 leading-normal bg-red-500 absolute top-0 right-0 rounded-full text-white -m-1 text-sm leading-nose">1</span>
                  </span>
                </span>
                Shopping cart
              </span>
            </div>

            <br><br>
            <h3 class="text-sm font-bold mb-4">ALIGNED TOP</h3>
            <div class="rounded border p-6">
              <div class="inline-block mr-8">
                <a data-target="icontext-1" onclick="toggleTarget(event)" href="#">
                  <span class="">
                    <span class="inline-block">
                      <span class="h-8 w-8 text-teal-700 relative rounded-full items-center flex justify-center">
                        <i class="fa fa-bell"></i>
                        <span class="px-1 leading-tight bg-red-500 absolute top-0 right-0 rounded-full text-white leading-none text-xs -m-1">1</span>
                      </span>
                    </span>
                    Some notification  <i class="fas fa-sort-down" aria-hidden="true"></i>
                  </span>
                </a>
                <div data-selector="icontext-1" style="">
                  <div class="py-1 absolute border rounded bg-white">
                    <a class="p-2 block" href="#">Some notification text</a>
                    <a class="p-2 block" href="#">Another notification</a>
                    <a class="p-2 block" href="#">Something else here</a>
                  </div>
                </div>
              </div>

              <div class="inline-block mr-8">
                <a data-target="icontext-2" onclick="toggleTarget(event)" href="#">
                  <span class="">
                    <span class="inline-block">
                      <span class="h-8 w-8 text-teal-700 relative rounded-full items-center flex justify-center">
                        <i class="icon mr-2 fa fa-envelope"></i>
                      </span>
                    </span>
                    New messages  <i class="fas fa-sort-down" aria-hidden="true"></i>
                  </span>
                </a>
                <div data-selector="icontext-2" style="">
                  <div class="py-1 absolute border rounded bg-white">
                    <a class="p-2 block" href="#">Some notification text</a>
                    <a class="p-2 block" href="#">Another notification</a>
                    <a class="p-2 block" href="#">Something else here</a>
                  </div>
                </div>
              </div>

              <div class="inline-block mr-8">
                <a data-target="icontext-3" onclick="toggleTarget(event)" href="#">
                  <span class="">
                    <span class="inline-block">
                      <span class="h-8 w-8 text-teal-700 relative rounded-full items-center flex justify-center">
                        <i class="fa fa-shopping-cart"></i>
                      </span>
                    </span>
                    Shopping cart  <i class="fas fa-sort-down" aria-hidden="true"></i>
                  </span>
                </a>
                <div data-selector="icontext-3" style="">
                  <div class="py-1 absolute border rounded bg-white">
                    <a class="p-2 block" href="#">Some notification text</a>
                    <a class="p-2 block" href="#">Another notification</a>
                    <a class="p-2 block" href="#">Something else here</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="px-10 py-16 border-b" id="product_basic">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Product grid</h1>

            <div class="container md:flex md:flex-wrap">

              <div class="w-full sm:w-1/2 lg:w-1/4">
                <div class="m-2 border rounded relative hover:shadow-lg">
                  <div class="text-center border-b">
                    <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg">
                  </div>
                  <div class="p-3">
                    <a class="block" href="#">Bell & Ross Nightlum</a>
                    <div class="font-bold mt-2">$299.00</div>
                  </div>
                </div>
              </div>

              <div class="w-full sm:w-1/2 lg:w-1/4">
                <div class="m-2 border rounded relative hover:shadow-lg">
                  <div class="text-center border-b">
                    <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg">
                    <span class="absolute top-0 right-0 px-3 py-2 text-gray-400 hover:text-teal-500 cursor-pointer"><i class="fa fa-heart"></i></span>
                  </div>
                  <div class="p-3">
                    <a class="block" href="#">Bell & Ross Nightlum</a>
                    <div class="font-bold mt-2">$299.00</div>
                  </div>
                </div>
              </div>

              <div class="w-full sm:w-1/2 lg:w-1/4">
                <div class="m-2 border rounded relative hover:shadow-lg">
                  <div class="text-center border-b">
                    <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/3.jpg">
                    <span class="absolute top-0 left-0 px-1 m-2 rounded text-white bg-teal-600">New</span>
                  </div>
                  <div class="p-3">
                    <a class="block" href="#">H&M Polo Shirt Slim Fit</a>
                    <div class="font-bold mt-2">$12.99 <span class="text-sm mt-2 text-gray-600">$14.99</span></div>
                  </div>
                </div>
              </div>

              <div class="w-full sm:w-1/2 lg:w-1/4">
                <div class="m-2 border rounded relative hover:shadow-lg">
                  <div class="text-center border-b">
                    <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/4.jpg">
                  </div>
                  <div class="p-3 text-center">
                    <div class="font-bold text-teal-500">ELECTRONICS</div>
                    <a class="block mt-2"  href="#">IKEA Poäng Swivel Chair</a>
                  </div>
                </div>
              </div>

              <div class="w-full sm:w-1/2 lg:w-1/4">
                <a class="block" href="#">
                  <div class="m-2 border rounded relative hover:shadow-lg">
                    <div class="text-center">
                      <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/5.jpg">
                    </div>
                    <div class="p-3">
                      <p class="overflow-hidden overflow-x whitespace-nowap"> Just another long text product name</p>
                      <p class="text-sm text-gray-600">Sizes: S, M, XL</p>
                      <div class="font-bold mt-2">$179.00</div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="w-full sm:w-1/2 lg:w-1/4">
                <a class="" href="#">
                  <div class="m-2 border rounded relative hover:shadow-lg">
                    <div class="text-center">
                      <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/3.jpg">
                    </div>
                    <div class="p-3">
                      <div class=""> Fjällräven Kånken Backpack Blue Ridge</div>
                      <div class="mt-4 mb-3"><span class="font-bold ">$84.00</span> <a href="#" class="float-right leading-loose px-1 font-bold text-sm rounded border border-teal-500 text-teal-600 hover:text-white hover:bg-teal-500">Add to cart <i class="fa fa-shopping-cart"></i></a></div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="w-full sm:w-1/2 lg:w-1/4">
                <a class="" href="#">
                  <div class="m-2 text-center border rounded relative hover:shadow-lg">
                    <div class="text-center">
                      <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/9.jpg">
                    </div>
                    <div class="p-3">
                      <div class=""> Bose Headphones 700 best for Gaming</div>
                      <div class="text-sm text-gray-500">
                        <span class="text-orange-400"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star text-gray-500"></i></span>
                        34
                      </div>
                      <div class="mt-2 font-bold">$399.95</div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="w-full sm:w-1/2 lg:w-1/4">
                <a class="" href="#">
                  <div class="m-2 border rounded relative hover:shadow-lg">
                    <div class="text-center">
                      <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/10.jpg">
                    </div>
                    <div class="p-3">
                      <div class=""> Apple Homkit - Ecobee3 Lite Smart Thermostat</div>
                      <div class="mt-1">
                        <span class="font-bold">$169.95</span>
                        <span class="text-sm text-orange-400 float-right"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star text-gray-500"></i></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

            </div>

        </div>
        </section>

        <section class="px-10 py-16 border-b" id="product_list">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Product list</h1>

            <div class="max-w-4xl p-6 border rounded md:flex">
              <div class="w-full md:w-1/3">
                <a href="#">
                  <img class=" max-w-xs  md:max-w-full mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/11.jpg">
                </a>
              </div>
              <div class="w-full md:w-2/3 relative md:ml-8">
                <a href="#" class="float-right"><i class="fa fa-heart"></i></a>
                <a class="text-xl font-bold block mb-2 mt-6">GoPro HERO7 Camera</a>
                <div class="mb-2">
                  <span class="bold text-xl mr-3 font-bold">$299.00</span>
                  <span class="text-orange-400"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star text-gray-500"></i></span>  7/10
                </div>
                <ul class="mb-2 list-disc ml-6">
                  <li>Optical heart sensor</li>
                  <li>S3 with dual-core processor</li>
                  <li>Accelerometer and gyroscope</li>
                </ul>
                <div class="mt-4">
                  <span class="mr-6">
                    <span  class=""><button class="p-2 w-10 inline-block border rounded-l" type="button"> + </button></span>
                    <input class="p-2 w-10 text-center border-t border-b -mx-1 " type="text" value="1">
                    <span  class=""><button class="p-2 w-10 inline-block border rounded-r" class="p-2" type="button"> − </button></span>
                  </span>
                  <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded">Add to cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
            <br><br>
            <div class="max-w-4xl p-6 border rounded md:flex">
              <div class="w-full md:w-1/4">
                <a href="#">
                  <img class=" max-w-xs  md:max-w-full mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/11.jpg">
                </a>
              </div>
              <div class="w-full md:w-2/4 md:mx-8">
                <a class="text-xl font-bold block mb-2 mt-6">Apple Watch Series 4 - Space Gray</a>
                <div class="mb-4">
                  <span class="text-orange-400 mr-3"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star text-gray-500"></i></span>
                  <span class="text-sm text-gray-600 mr-3">132 reviews</span>
                  <span class="text-sm text-teal-500 mr-3"><i class="fa fa-clipboard-check"></i> orders</span>
                </div>
                <p>The largest Apple Watch display yet. Electrical heart sensor. Re-engineered Digital Crown with haptic feedback. Entirely familiar, yet completely redesigned, Apple Watch Series 4 resets the standard for what a watch can be.</p>
              </div>
              <div class="w-full md:w-1/4">
                <div class="mt-2">
                  <span class="text-xl font-bold">$56</span> <del class="ml-2 text-gray-600">$98</del>
                  <p class="text-sm text-teal-500">Free shipping</p>
                  <br>
                  <p>
                    <a href="#" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded">Buy now</a>
                    <a href+"#" class="text-teal-700 hover:bg-teal-700 border border-teal-700 hover:text-white font-bold py-2 px-4 rounded">Details</a>
                  </p>
                  <br>
                  <a href="#" class="text-teal-500 text-sm hover:text-teal-700"><i class="fa fa-heart"></i> Add to wishlist</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="px-10 py-16 border-b" id="product_detail">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Product detail</h1>
            <br><br>
            <div class="border overflow-hidden rounded md:flex">
                <div class="w-full lg:w-1/2">
                  <div class="p-8">
                    <div class="">
                      <img class="mx-auto max-w-full md:max-w-md" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/12.jpg" alt="">
                    </div>
                    <div class="py-8 text-center">
                      <a href="#"><img class="w-12 h-12 border rounded inline-block" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/12.jpg"></a>
                      <a href="#"><img class="w-12 h-12 border rounded inline-block" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/12-1.jpg"></a>
                      <a href="#"><img class="w-12 h-12 border rounded inline-block" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/12-2.jpg"></a>
                    </div>
                  </div>

                </div>
                <div class="w-full lg:w-1/2">
                  <div class="p-8">
                    <h2 class="text-2xl font-bold block mb-4">Apple Watch Series 4 - Space Gray</h2>
                    <div class="mb-4">
                      <span class="text-orange-400 mr-3"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star text-gray-500" aria-hidden="true"></i></span>
                      <span class="text-sm text-gray-600 mr-3">132 reviews</span>
                      <span class="text-sm text-teal-500 mr-3"><i class="fa fa-clipboard-check" aria-hidden="true"></i> orders</span>
                    </div>
                    <div class="mb-4">
                      <span class="font-bold text-xl">$815.00</span>
                      <span class="text-gray-600"> /per kg </span>
                    </div>
                    <p class="mb-4">Virgil Abloh’s Off-White is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown Odsy-1000 low-top sneakers.</p>
                    <div class="pb-4 mb-4 border-b">
                      <span class="w-64 font-bold text-xl inline-block">Model#</span> Odsy-1000<br>
                      <span class="w-64 font-bold text-xl inline-block">Model#</span> Odsy-1000<br>
                      <span class="w-64 font-bold text-xl inline-block">Model#</span> Odsy-1000<br>
                    </div>
                    <div class="md:flex">
                      <div class="w-full md:w-1/3">
                        Quantity<br><br>
                        <span class="mr-6">
                          <span class=""><button class="p-2 w-10 inline-block border rounded-l" type="button"> + </button></span>
                          <input class="p-2 w-10 text-center border-t border-b -mx-1 " type="text" value="1">
                          <span class=""><button class="p-2 w-10 inline-block border rounded-r" type="button"> − </button></span>
                        </span>
                      </div>
                      <div class="w-full md:w-2/3">
                        Select size<br><br>
                        <div class="">
                          <label><input type="radio" name="select_size" checked="" class="">  Small</label>
                          <label><input type="radio" name="select_size" checked="" class="">  Medium</label>
                          <label><input type="radio" name="select_size" checked="" class="">  Large</label>
                        </div>
                      </div>
                    </div>
                    <div class="mt-4">
                      <a href="#" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded mr-3">Buy now</a>
                      <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded">Add to cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </section>


      </main>
    </div>





    <script>
        function toggleTarget(event) {
          event.preventDefault();
          var target = event.target.getAttribute('data-target');
          var targetSelector = "[data-selector="+target+"]";
          //get element
          var $element = document.querySelectorAll(targetSelector)[0];
          // toggle
          if ($element != null) {
            if ($element.style.display == "none") {
              $element.style.display = 'block';
            }
            else {
              $element.style.display = 'none';
            }
            return false;
        }
      }
    </script>
@stop
