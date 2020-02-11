@extends('layouts.app')
@section('content')
    <div class="lg:flex">
      <aside class="w-full h-56 overflow-y-auto border lg:w-64 lg:sticky lg:top-0 lg:h-screen lg:border-r ">
        <nav class="overflow-y-auto text-gray-600 lg:pt-20">
          <a class="block px-3 py-2 mb-1 text-sm font-bold text-teal-600" href="#colors">CONTENT</a>
          <ul class="menu-aside">
      			<li> <a class="block px-3 py-2 hover:bg-gray-200" href="#colors">Colors</a> </li>
      			<li> <a class="block px-3 py-2 hover:bg-gray-200" href="#typography">Typography</a> </li>
      		</ul>
          <a class="block px-3 py-2 mb-1 text-sm font-bold text-teal-600" href="#alerts">COMPONENTS</a>
          <ul class="menu-aside">
      			<li> <a class="block px-3 py-2 hover:bg-gray-200" href="#alerts">Alerts</a> </li>
      			<li> <a class="block px-3 py-2 hover:bg-gray-200" href="#buttons">Buttons</a> </li>
      			<li> <a class="block px-3 py-2 hover:bg-gray-200" href="#forms">Form elements</a> </li>
      			<li> <a class="block px-3 py-2 hover:bg-gray-200" href="#badges">Badges and ratings</a> </li>
      			<li> <a class="block px-3 py-2 hover:bg-gray-200" href="#cards">Cards and boxes</a> </li>
      			<li> <a class="block px-3 py-2 hover:bg-gray-200" href="#images">Images</a> </li>
      			<li> <a class="block px-3 py-2 hover:bg-gray-200" href="#navbar">Navbar</a> </li>
      			<li> <a class="block px-3 py-2 hover:bg-gray-200" href="#icontext">Icon with text</a> </li>
      		</ul>
          <a class="block px-3 py-2 mb-1 text-sm font-bold text-teal-600" href="#product_basic">BLOCKS</a>
          <ul class="menu-aside">
      			<li> <a class="block px-3 py-2 hover:bg-gray-200" href="#product_basic">Product grid</a> </li>
            <li> <a class="block px-3 py-2 hover:bg-gray-200" href="#product_list">Product list</a> </li>
            <li> <a class="block px-3 py-2 hover:bg-gray-200" href="#product_detail">Product detail</a> </li>
            <li> <a class="block px-3 py-2 hover:bg-gray-200" href="#filters">Filters</a> </li>
            <li> <a class="block px-3 py-2 hover:bg-gray-200" href="#forms">Forms</a> </li>
            <li> <a class="block px-3 py-2 hover:bg-gray-200" href="#shopping_cart">Shopping cart</a> </li>
            <li> <a class="block px-3 py-2 hover:bg-gray-200" href="#features">Features</a> </li>
            <li> <a class="block px-3 py-2 hover:bg-gray-200" href="#headers">Site headers</a> </li>
            <li> <a class="block px-3 py-2 hover:bg-gray-200" href="#footers">Site footers</a> </li>
          </ul>
          <a class="block px-3 py-2 mb-1 text-sm font-bold text-teal-600" href="#carousels">MORE</a>
          <ul class="menu-aside">
      			<li> <a class="block px-3 py-2 hover:bg-gray-200" href="#carousels">Carousels</a> </li>
          </ul>
        </nav>
      </aside>
      <main class="w-full pt-4 text-gray-700 lg:pt-12">
        <section class="p-1 border-b lg:px-10 lg:py-16" id="colors">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Colors</h1>
            <h3 class="mb-4 text-sm font-bold">MAIN COLORS</h3>
            <div class="inline-block w-48 h-32 p-8 mb-6 mr-4 text-center text-white bg-black">
              bg-black
            </div>
            <div class="inline-block w-48 h-32 p-8 mb-6 mr-4 text-center text-gray-700 bg-white shadow">
              bg-white
            </div>
            <div class="inline-block w-48 h-32 p-8 mb-6 mr-4 text-center text-white bg-gray-900">
              bg-gray-900
            </div>
            <div class="inline-block w-48 h-32 p-8 mb-6 mr-4 text-center text-white bg-red-900">
              bg-red-900
            </div>
            <div class="inline-block w-48 h-32 p-8 mb-6 mr-4 text-center text-white bg-orange-900">
              bg-orange-900
            </div>
            <div class="inline-block w-48 h-32 p-8 mb-6 mr-4 text-center text-white bg-yellow-900">
              bg-yellow-900
            </div>
            <div class="inline-block w-48 h-32 p-8 mb-6 mr-4 text-center text-white bg-green-900">
              bg-green-900
            </div>
            <div class="inline-block w-48 h-32 p-8 mb-6 mr-4 text-center text-white bg-teal-900">
              bg-teal-900
            </div>
            <div class="inline-block w-48 h-32 p-8 mb-6 mr-4 text-center text-white bg-blue-900">
              bg-blue-900
            </div>
            <div class="inline-block w-48 h-32 p-8 mb-6 mr-4 text-center text-white bg-indigo-900">
              bg-indigo-900
            </div>
            <div class="inline-block w-48 h-32 p-8 mb-6 mr-4 text-center text-white bg-purple-900">
              bg-purple-900
            </div>
            <div class="inline-block w-48 h-32 p-8 mb-6 mr-4 text-center text-white bg-pink-900">
              bg-pink-900
            </div>
            <h3 class="mt-6 mb-4 text-sm font-bold">TEXT COLORS</h3>
            <div class="p-6 text-xl border rounded">
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

        <section class="p-1 border-b lg:px-10 lg:py-16" id="typography">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Typography</h1>
            <p class="text-xs">.text-xs - The quick brown fox ...</p>
            <p class="text-sm">.text- The quick brown fox ...</p>
            <p class="text-base">.text-base The quick brown fox ...</p>
            <p class="text-lg">.text-lg The quick brown fox ...</p>
            <p class="text-xl">.text-xl The quick brown fox ...</p>
            <p class="text-2xl">.text-2xl The quick brown fox ...</p>
            <p class="text-3xl">.text-3xl The quick brown fox ...</p>
            <p class="text-4xl">.text-4xl The quick brown fox ...</p>
            <p class="text-5xl">.text-5xl The quick brown fox ...</p>
            <p class="text-6xl">.text-6xl The quick brown fox ...</p>
          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="typography">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Alerts</h1>
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

            <a href="#" data-target="typography-code" onclick="toggleTarget(event)"> Show code </a>
            <div data-selector="typography-code" class="overflow-hidden" style="display: none; ">Code ở đây</div>
          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="buttons">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Buttons</h1>
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
            <br><br><br>
            <button type="button" class="px-4 py-2 mb-2 font-bold text-white bg-teal-700 rounded hover:bg-teal-800">Button <i class="fa fa-shopping-cart"></i></button>
            <button type="button" class="px-4 py-2 mb-2 font-bold text-white bg-teal-700 rounded hover:bg-teal-800"><i class="fa fa-shopping-cart"></i> With icon</button>
            <button type="button" class="w-10 py-2 mb-2 font-bold text-white bg-teal-700 rounded hover:bg-teal-800"><i class="fa fa-user"></i></button>
            <br><br><br>
            <button type="button" class="px-2 py-1 mb-2 text-sm font-bold text-white bg-teal-700 rounded hover:bg-teal-800">Small</button>
            <button type="button" class="px-4 py-2 mb-2 font-bold text-white bg-teal-700 rounded hover:bg-teal-800">Normal</button>
            <button type="button" class="px-6 py-3 mb-2 text-2xl font-bold text-white bg-teal-700 rounded hover:bg-teal-800">Large</button>
          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="forms">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Forms</h1>
            <div class="container md:flex">
              <div class="w-full md:w1/2">
                <form class="p-4 mb-6">
                  <h3 class="mb-4 text-sm font-bold">INPUT VARIATIONS</h3>
                  <input type="text" placeholder="Type here" class="block w-full px-3 py-2 mb-3 border rounded" name="">
                  <input type="password" placeholder="Password" class="block w-full px-3 py-2 mb-3 border rounded" name="">
                  <input type="text" placeholder="Readonly input" readonly="" class="block w-full px-3 py-2 mb-3 bg-gray-300 border rounded">
                </form>
                <form class="p-4 mb-6">
                  <h3 class="mb-4 text-sm font-bold">INPUT VARIATIONS</h3>
                  <textarea id="exampleFormControlTextarea1" rows="3" class="block w-full px-3 py-2 mb-1 border rounded" ></textarea>
                  <div class="text-sm text-gray-500"> Maximum character is 250 letters</div>
                </form>
              </div>
              <div class="w-full md:w1/2">
                <form class="p-4 mb-6">
                  <h3 class="mb-4 text-sm font-bold">INPUT VARIATIONS</h3>
                  <select class="form-select block w-full px-3 py-2 mb-3 border rounded">
        						<option>Basic selection</option>
        						<option>Uzbekistan</option>
        						<option>Kazakhstan</option>
        						<option>United States</option>
        						<option>Russia</option>
        						<option>Others</option>
        					</select>
                  <select class="form-select block w-full px-3 py-2 mb-3 border rounded">
        					    <option>Custom selection</option>
        					    <option>United states</option>
        					    <option>Germany</option>
        					    <option>Canada</option>
        					</select>
                </form>
              </div>
            </div>


            <div class="container md:flex">
              <div class="w-full p-4 mb-6 md:w1/3">
                <h3 class="mb-4 text-sm font-bold">DEFAULT CHECKBOXES</h3>
                <label class="block"><input type="checkbox" value="" checked=""><span class="pl-2">Basic checkbox</span></label><br>
                <label class="block"><input type="checkbox" value=""><span class="pl-2">Basic checkbox</span></label><br>
                <label class="block"><input name="myradio" type="radio" value="" checked=""><span class="pl-2">Basic radio ppt1</span></label><br>
                <label class="block"><input name="myradio" type="radio" value=""><span class="pl-2">Basic radio opt2</span></label><br>
              </div>
              <div class="w-full p-4 mb-6 md:w1/3">
                <h3 class="mb-4 text-sm font-bold">CUSTOM CHECKBOXES</h3>
                <label class="block"><input type="checkbox" class="text-teal-500 form-checkbox" checked><span class="ml-2">Checked</span></label><br>
                <label class="block"><input type="checkbox" class="text-teal-500 form-checkbox" unchecked><span class="ml-2">Unchecked</span></label><br>
                <label class="block"><input type="checkbox" class="text-teal-500 form-checkbox" checked disabled><span class="ml-2">Disabled checked</span></label><br>
                <label class="block"><input type="checkbox" class="text-teal-500 form-checkbox" unchecked disabled><span class="ml-2">Disabled unchecked</span></label><br>
              </div>
              <div class="w-full p-4 mb-6 md:w1/3">
                <h3 class="mb-4 text-sm font-bold">CUSTOM RADIOS</h3>
                <label class="block"><input type="radio" class="text-teal-500 form-radio" name="myselection1" value="" checked><span class="ml-2">Checked</span></label><br>
                <label class="block"><input type="radio" class="text-teal-500 form-radio" name="myselection1" value=""><span class="ml-2">Unchecked</span></label><br>
                <label class="block"><input type="radio" class="text-teal-500 form-radio" name="myselection2" value="" checked disabled><span class="ml-2">Disabled checked</span></label><br>
                <label class="block"><input type="radio" class="text-teal-500 form-radio" name="myselection2" value="" disabled><span class="ml-2">Disabled unchecked</span></label><br>
              </div>
            </div>
          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="badges">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Badges and misc</h1>
            <div class="container md:flex md:flex-wrap">
              <div class="w-full p-4 mb-6 md:w-1/2 lg:w-1/4">
                <h3 class="mb-4 text-sm font-bold">BADGES</h3>
                <span class="p-1 text-white bg-teal-800 rounded">Offer</span>
                <span class="p-1 text-white bg-red-800 rounded">Offer</span>
                <span class="p-1 text-white bg-blue-800 rounded">Offer</span>
                <span class="p-1 text-white bg-orange-800 rounded">Offer</span>
                <span class="p-1 text-white text-gray-800 bg-gray-400 rounded">Offer</span>
                <span class="p-1 text-white bg-black rounded">Offer</span>

              </div>
              <div class="w-full p-4 mb-6 md:w-1/2 lg:w-1/4">
                <h3 class="mb-4 text-sm font-bold">BUTTON BADGE</h3>
                <button type="button" class="px-4 py-2 font-bold text-white bg-teal-700 rounded hover:bg-teal-800"><span>Button badge</span><span class="px-1 ml-2 text-white text-gray-800 bg-gray-400 rounded">4</span></button>
              </div>
              <div class="w-full p-4 mb-6 md:w-1/2 lg:w-1/4">
                <h3 class="mb-4 text-sm font-bold">NOTIFICATION</h3>
                <div class="inline-block">
                  <div class="relative flex items-center justify-center w-12 h-12 text-gray-700 bg-gray-300 rounded-full">
                    <i class="text-xl fa fa-bell" aria-hidden="true"></i>
                    <span class="absolute top-0 right-0 px-2 -m-1 leading-none leading-normal text-white bg-red-500 rounded-full">3</span>
                  </div>
                </div>
                <div class="inline-block">
                  <div class="relative flex items-center justify-center w-8 h-8 text-white bg-teal-500 rounded-full">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                    <span class="absolute top-0 right-0 px-1 -m-1 text-xs leading-none leading-tight text-white bg-red-500 rounded-full">3</span>
                  </div>
                </div>
              </div>
              <div class="w-full p-4 mb-6 md:w-1/2 lg:w-1/4">
                <h3 class="mb-4 text-sm font-bold">NOTIFICATION TEXT</h3>
                <span class="mr-2">
                  <span class="inline-block">
                    <span class="relative flex items-center justify-center w-8 h-8 text-white bg-teal-500 rounded-full">
                      <i class="fa fa-bell" aria-hidden="true"></i>
                      <span class="absolute top-0 right-0 px-1 -m-1 text-xs leading-none leading-tight text-white bg-red-500 rounded-full">3</span>
                    </span>
                  </span>
                  Notification
                </span>
                <span class="">
                  <span class="inline-block">
                    <span class="relative flex items-center justify-center w-8 h-8 text-teal-700 rounded-full">
                      <i class="fa-lg fa fa-envelope"></i>
                      <span class="absolute top-0 right-0 px-1 -m-1 text-xs leading-none leading-tight text-white bg-red-500 rounded-full">1</span>
                    </span>
                  </span>
                  Message
                </span>
              </div>
              <div class="w-full p-4 mb-6 md:w-1/2 lg:w-1/4">
                <h3 class="mb-4 text-sm font-bold">RATING</h3>
                <span class="text-orange-500">
                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="text-gray-500 fa fa-star"></i>
                </span>
              </div>
              <div class="w-full p-4 mb-6 md:w-1/2 lg:w-1/4">
                <h3 class="mb-4 text-sm font-bold">RATING</h3>
                <span class="text-orange-500">
                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="text-gray-500 fa fa-star"></i>
                </span> 7/10
              </div>
            </div>
          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="cards">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Card and boxes</h1>
            <div class="container md:flex">
              <div class="w-full p-4 mb-6 md:w-1/2">
                <h3 class="mb-4 text-sm font-bold">CARD</h3>
                <div class="p-3 border rounded text-grey-700">
                  <h4 class="mb-1 text-xl font-bold">Card title</h4>
                  <h6 class="mb-2 font-bold text-gray-500">Card subtitle</h6>
                  <p class="mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a class="mr-2" href="#">Card link</a>
                  <a href="#">Another link</a>
                </div>
              </div>
              <div class="w-full p-4 mb-6 md:w-1/2">
                <h3 class="mb-4 text-sm font-bold">BOX</h3>
                <div class="p-3 border rounded text-grey-700">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="images">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Images</h1>
            <div class="container md:flex">
              <div class="w-full p-4 mb-6 md:w-1/2">
                <h3 class="mb-4 text-sm font-bold">IMAGE SIZES</h3>
                <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/posts/1.jpg" class="inline-block object-cover w-8 h-8">
                <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/posts/2.jpg" class="inline-block object-cover w-16 h-16">
                <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/posts/3.jpg" class="inline-block object-cover w-32 h-32">
                <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/posts/1.jpg" class="inline-block object-cover w-64 h-64">
              </div>
              <div class="w-full p-4 mb-6 md:w-1/2">
                <h3 class="mb-4 text-sm font-bold">ROUNDED</h3>
                <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/posts/1.jpg" class="inline-block object-cover w-8 h-8 rounded-full">
                <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/posts/2.jpg" class="inline-block object-cover w-16 h-16 rounded-full">
                <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/posts/3.jpg" class="inline-block object-cover w-32 h-32 rounded-full">
                <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/posts/1.jpg" class="inline-block object-cover w-64 h-64 rounded-full">
              </div>
            </div>
          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="navbars">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Navbars</h1>
            <h3 class="mb-4 text-sm font-bold">BASIC NAVBAR</h3>
            <nav class="flex flex-wrap items-center justify-between px-4 py-3 border lg:flex-no-wrap">
              <a class="mr-3 text-2xl">Brand</a>
              <a data-target="navbars-1" onclick="toggleTarget(event)" href="#"  class="mr-2 text-2xl lg:hidden"><i class="fas fa-bars"></i></a>
              <div data-selector="navbars" class="w-full lg:block">
                <div class="lg:flex lg:justify-between">
                  <ul class="text-xl lg:inline-block">
                    <li class="lg:inline-block"><a href="#" class="inline-block py-3 lg:px-4">Home</a></li>
                    <li class="lg:inline-block"><a href="#" class="inline-block py-3 lg:px-4">Link</a></li>
                    <li class="lg:inline-block"><a data-target="navbars-2" onclick="toggleTarget(event)" href="#" class="inline-block py-3 lg:px-4">DropDown <i class="fas fa-sort-down"></i></a>
                      <div class="" data-selector="navbars-2" style="display: none;">
                        <ul class="p-3 text-xl bg-white border rounded lg:absolute">
                          <li><a class="block py-2" href="#">DropDown Menu</a></li>
                          <li><a class="block py-2" href="#">DropDown Menu</a></li>
                          <li><a class="block py-2" href="#">DropDown Menu</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="lg:inline-block"><a href="#" class="inline-block py-3 lg:px-4">Other</a></li>
                  </ul>
                  <form class="lg:inline-block" action="" method="post">
                    <input class="p-3 border rounded" type="search" placeholder="Search" aria-label="Search">
                    <button class="p-3 font-bold text-teal-500 border border-teal-500 rounded hover:bg-teal-500 hover:text-white" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </nav>
            <br><br><br>
            <h3 class="mb-4 text-sm font-bold">NAVBAR MULTI NAV</h3>
            <nav class="px-2 py-2 text-gray-400 bg-gray-900 lg:flex lg:justify-between">
              <ul class="text-center">
                <li class="inline-block"><a href="#" class="block p-2">Menu item</a></li>
                <li class="inline-block"><a href="#" class="block p-2">Menu item</a></li>
                <li class="inline-block"><a href="#" class="block p-2">Menu item</a></li>
              </ul>
              <ul class="text-center">
                <li class="inline-block"><a href="#" class="block p-2">Delivery</a></li>
                <li class="inline-block"><a href="#" class="block p-2">Help</a></li>
                <li class="inline-block"><a data-target="drop-down-2" onclick="toggleTarget(event)" href="#" class="block p-2">USD <i class="fas fa-sort-down"></i></a>
                  <div class="" data-selector="drop-down-2" style="display: none;">
                    <ul class="absolute p-3 text-sm text-gray-700 bg-white border rounded">
                      <li><a class="block py-2" href="#">DropDown Menu</a></li>
                      <li><a class="block py-2" href="#">DropDown Menu</a></li>
                      <li><a class="block py-2" href="#">DropDown Menu</a></li>
                    </ul>
                  </div>
                </li>
                <li class="inline-block"><a href="#" class="block p-2">Other</a></li>
              </ul>
            </nav>
            <br><br><br>
            <h3 class="mb-4 text-sm font-bold">SIMPLE HORIZONTAL NAV</h3>
            <nav class="px-2 py-2 text-gray-400 bg-gray-900">
              <ul class="">
                <li class="inline-block"><a href="#" class="block p-2">Menu item 1</a></li>
                <li class="inline-block"><a href="#" class="block p-2">Menu item 2</a></li>
                <li class="inline-block"><a href="#" class="block p-2">Menu item 3</a></li>
                <li class="inline-block"><a href="#" class="block p-2">Menu item 4</a></li>
              </ul>
            </nav>


            <br><br><br>
            <h3 class="mb-4 text-sm font-bold">NAVBAR MULTI NAV</h3>
            <nav class="px-2 py-2 text-teal-600 border">
              <ul class="">
                <li class="inline-block"><a href="#" class="block p-2">Menu item 1</a></li>
                <li class="inline-block"><a href="#" class="block p-2">Menu item 2</a></li>
                <li class="inline-block"><a href="#" class="block p-2">Menu item 3</a></li>
                <li class="inline-block"><a href="#" class="block p-2">Menu item 4</a></li>
              </ul>
            </nav>

          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="icontext">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Icon with text</h1>

            <h3 class="mb-4 text-sm font-bold">BASIC</h3>
            <div class="container pt-6 border rounded md:flex">
              <div class="w-full p-4 mb-6 lg:w-1/3">

                <span class="inline-block w-12 h-12 p-3 mr-1 text-center text-gray-700 bg-gray-300">
                  <i class="fa fa-user"></i>
                </span> Some more short text

              </div>
              <div class="w-full p-4 mb-6 lg:w-1/3">
                <span class="inline-block w-12 h-12 p-3 mr-1 text-center text-white bg-teal-500 rounded-full">
                  <i class="fa fa-user"></i>
                </span> Some more short text
              </div>
              <div class="w-full p-4 mb-6 lg:w-1/3">
                <span class="">
                  <img class="inline-block w-12 h-12 mr-1 -mt-2 border rounded-full" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/avatars/avatar2.jpg" alt="">
                  Some more short text
                </span>

              </div>
            </div>

            <br><br>
            <h3 class="mb-4 text-sm font-bold">ALIGNED TOP</h3>
            <div class="container pt-6 border rounded md:flex">
              <div class="w-full p-4 mb-6 lg:w-1/3">
                <span class="inline-block float-left w-12 h-12 p-3 mr-2 text-center text-white bg-teal-500 rounded-full">
                  <i class="fa fa-user"></i>
                </span>
                <h6 class="font-bold">Mr. John Doe</h6>
                <p class="text-sm text-gray-500">Some description like Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="w-full p-4 mb-6 lg:w-1/3">
                <span class="inline-block float-left w-12 h-12 p-3 mr-2 text-center text-teal-500 border border-teal-500 rounded-full">
                  <i class="fa fa-user"></i>
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
            <br><br>
            <h3 class="mb-4 text-sm font-bold">WITH NOTIFICATION</h3>
            <div class="p-6 border rounded">
              <span class="block mb-2 mr-3 lg:inline-block">
                <span class="relative inline-block w-12 h-12 p-3 mr-1 text-center text-white bg-teal-500 rounded-full">
                  <i class="fa fa-user"></i>
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

            <br><br>
            <h3 class="mb-4 text-sm font-bold">ALIGNED TOP</h3>
            <div class="p-6 border rounded">

              <span class="mr-8">
                <span class="relative mr-2 text-teal-500">
                  <i class="fa fa-bell"></i>
                  <span class="absolute top-0 right-0 px-2 -mt-4 -mr-3 text-sm leading-normal text-white bg-red-500 rounded-full leading-nose">0</span>
                </span>
                <a data-target="icontext-1" onclick="toggleTarget(event)"  href="#">Some notification </a>
                <i class="text-teal-500 fas fa-caret-down"></i>
                <div class="" data-selector="icontext-1" style="display: none;">
                  <div class="absolute py-1 bg-white border rounded">
                    <a class="block p-2 hover:bg-gray-300" href="#">Some notification text</a>
                    <a class="block p-2 hover:bg-gray-300" href="#">Another notification</a>
                    <a class="block p-2 hover:bg-gray-300" href="#">Something else here</a>
                  </div>
                </div>
              </span>

            </div>
          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="product_basic">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Product grid</h1>

            <div class="container sm:flex sm:flex-wrap">

              <div class="w-full sm:w-1/2 xl:w-1/4">
                <div class="relative m-2 border rounded hover:shadow-lg">
                  <div class="text-center border-b">
                    <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg">
                  </div>
                  <div class="p-3">
                    <a class="block" href="#">Bell & Ross Nightlum</a>
                    <div class="mt-2 font-bold">$299.00</div>
                  </div>
                </div>
              </div>

              <div class="w-full sm:w-1/2 xl:w-1/4">
                <div class="relative m-2 border rounded hover:shadow-lg">
                  <div class="relative text-center border-b">
                    <div class="absolute bottom-0 w-full py-2 text-center text-white bg-black opacity-50">Quick View</div>
                    <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg">
                    <span class="absolute top-0 right-0 px-3 py-2 text-gray-400 cursor-pointer hover:text-teal-500"><i class="fa fa-heart"></i></span>

                  </div>
                  <div class="p-3">
                    <a class="block" href="#">Leather Sleeve - Macbook 13’’</a>
                    <div class="mt-2 font-bold">$3753.00</div>
                  </div>
                </div>
              </div>

              <div class="w-full sm:w-1/2 xl:w-1/4">
                <div class="relative m-2 border rounded hover:shadow-lg">
                  <div class="text-center border-b">
                    <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/3.jpg">
                    <span class="absolute top-0 left-0 px-1 m-2 text-white bg-teal-600 rounded">New</span>
                  </div>
                  <div class="p-3">
                    <a class="block" href="#">H&M Polo Shirt Slim Fit</a>
                    <div class="mt-2 font-bold">$12.99 <span class="mt-2 text-sm text-gray-600">$14.99</span></div>
                  </div>
                </div>
              </div>

              <div class="w-full sm:w-1/2 xl:w-1/4">
                <div class="relative m-2 border rounded hover:shadow-lg">
                  <div class="text-center border-b">
                    <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/4.jpg">
                  </div>
                  <div class="p-3 text-center">
                    <div class="font-bold text-teal-500">ELECTRONICS</div>
                    <a class="block mt-2"  href="#">IKEA Poäng Swivel Chair</a>
                  </div>
                </div>
              </div>

              <div class="w-full sm:w-1/2 xl:w-1/4">
                <a class="block" href="#">
                  <div class="relative m-2 border rounded hover:shadow-lg">
                    <div class="text-center">
                      <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/5.jpg">
                    </div>
                    <div class="p-3">
                      <p class="overflow-hidden overflow-x whitespace-nowap"> Just another long text product name</p>
                      <p class="text-sm text-gray-600">Sizes: S, M, XL</p>
                      <div class="mt-2 font-bold">$179.00</div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="w-full sm:w-1/2 xl:w-1/4">
                <a class="" href="#">
                  <div class="relative m-2 border rounded hover:shadow-lg">
                    <div class="text-center">
                      <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/3.jpg">
                    </div>
                    <div class="p-3">
                      <div class=""> Fjällräven Kånken Backpack Blue Ridge</div>
                      <div class="mt-4 mb-3"><span class="font-bold ">$84.00</span> <a href="#" class="float-right px-1 text-sm font-bold leading-loose text-teal-600 border border-teal-500 rounded hover:text-white hover:bg-teal-500">Add to cart <i class="fa fa-shopping-cart"></i></a></div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="w-full sm:w-1/2 xl:w-1/4">
                <a class="" href="#">
                  <div class="relative m-2 text-center border rounded hover:shadow-lg">
                    <div class="text-center">
                      <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/9.jpg">
                    </div>
                    <div class="p-3">
                      <div class=""> Bose Headphones 700 best for Gaming</div>
                      <div class="text-sm text-gray-500">
                        <span class="text-orange-400"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="text-gray-500 fa fa-star"></i></span>
                        34
                      </div>
                      <div class="mt-2 font-bold">$399.95</div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="w-full sm:w-1/2 xl:w-1/4">
                <a class="" href="#">
                  <div class="relative m-2 border rounded hover:shadow-lg">
                    <div class="text-center">
                      <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/10.jpg">
                    </div>
                    <div class="p-3">
                      <div class=""> Apple Homkit - Ecobee3 Lite Smart Thermostat</div>
                      <div class="mt-1">
                        <span class="font-bold">$169.95</span>
                        <span class="float-right text-sm text-orange-400"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="text-gray-500 fa fa-star"></i></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

            </div>

        </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="product_list">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Product list</h1>

            <div class="max-w-4xl p-6 border rounded lg:flex">
              <div class="w-full lg:w-1/3">
                <a href="#">
                  <img class="max-w-xs mx-auto lg:max-w-full" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/11.jpg">
                </a>
              </div>
              <div class="relative w-full lg:w-2/3 lg:ml-8">
                <a href="#" class="float-right"><i class="fa fa-heart"></i></a>
                <a class="block mt-6 mb-2 text-xl font-bold">GoPro HERO7 Camera</a>
                <div class="mb-2">
                  <span class="mr-3 text-xl font-bold bold">$299.00</span>
                  <span class="text-orange-400"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="text-gray-500 fa fa-star"></i></span>  7/10
                </div>
                <ul class="mb-2 ml-6 list-disc">
                  <li>Optical heart sensor</li>
                  <li>S3 with dual-core processor</li>
                  <li>Accelerometer and gyroscope</li>
                </ul>
                <div class="mt-4">
                  <span class="mr-6">
                    <span  class=""><button class="inline-block w-10 p-2 border rounded-l" type="button"> + </button></span>
                    <input class="w-10 p-2 -mx-1 text-center border-t border-b " type="text" value="1">
                    <span  class=""><button class="inline-block w-10 p-2 border rounded-r" class="p-2" type="button"> − </button></span>
                  </span>
                  <button type="button" class="px-4 py-2 font-bold text-white bg-teal-700 rounded hover:bg-teal-800">Add to cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
            <br><br>
            <div class="max-w-4xl p-6 border rounded lg:flex">
              <div class="w-full lg:w-1/4">
                <a href="#">
                  <img class="max-w-xs mx-auto lg:max-w-full" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/11.jpg">
                </a>
              </div>
              <div class="w-full lg:w-2/4 lg:mx-8">
                <a class="block mt-6 mb-2 text-xl font-bold">Apple Watch Series 4 - Space Gray</a>
                <div class="mb-4">
                  <span class="mr-3 text-orange-400"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="text-gray-500 fa fa-star"></i></span>
                  <span class="mr-3 text-sm text-gray-600">132 reviews</span>
                  <span class="mr-3 text-sm text-teal-500"><i class="fa fa-clipboard-check"></i> orders</span>
                </div>
                <p>The largest Apple Watch display yet. Electrical heart sensor. Re-engineered Digital Crown with haptic feedback. Entirely familiar, yet completely redesigned, Apple Watch Series 4 resets the standard for what a watch can be.</p>
              </div>
              <div class="w-full lg:w-1/4">
                <div class="mt-2">
                  <span class="text-xl font-bold">$56</span> <del class="ml-2 text-gray-600">$98</del>
                  <p class="text-sm text-teal-500">Free shipping</p>
                  <br>
                  <p>
                    <a href="#" class="inline-block px-4 py-2 mb-4 font-bold text-white bg-teal-700 rounded hover:bg-teal-800">Buy now</a>
                    <a href+"#" class="inline-block px-4 py-2 mb-4 font-bold text-teal-700 border border-teal-700 rounded hover:bg-teal-700 hover:text-white">Details</a>
                  </p>
                  <a href="#" class="text-sm text-teal-500 hover:text-teal-700"><i class="fa fa-heart"></i> Add to wishlist</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="product_detail">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Product detail</h1>
            <br><br>
            <div class="overflow-hidden border rounded lg:flex">
                <div class="w-full lg:w-1/2">
                  <div class="p-8">
                    <div class="">
                      <img class="mx-auto lg:max-w-full" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/12.jpg" alt="">
                    </div>
                    <div class="py-8 text-center">
                      <a href="#"><img class="inline-block w-12 h-12 border rounded" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/12.jpg"></a>
                      <a href="#"><img class="inline-block w-12 h-12 border rounded" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/12-1.jpg"></a>
                      <a href="#"><img class="inline-block w-12 h-12 border rounded" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/12-2.jpg"></a>
                    </div>
                  </div>

                </div>
                <div class="w-full lg:w-1/2">
                  <div class="p-8">
                    <h2 class="block mb-4 text-2xl font-bold">Apple Watch Series 4 - Space Gray</h2>
                    <div class="mb-4">
                      <span class="mr-3 text-orange-400"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="text-gray-500 fa fa-star" aria-hidden="true"></i></span>
                      <span class="mr-3 text-sm text-gray-600">132 reviews</span>
                      <span class="mr-3 text-sm text-teal-500"><i class="fa fa-clipboard-check" aria-hidden="true"></i> orders</span>
                    </div>
                    <div class="mb-4">
                      <span class="text-xl font-bold">$815.00</span>
                      <span class="text-gray-600"> /per kg </span>
                    </div>
                    <p class="mb-4">Virgil Abloh’s Off-White is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown Odsy-1000 low-top sneakers.</p>
                    <div class="pb-4 mb-4 border-b">
                      <span class="inline-block w-40 text-xl font-bold">Model#</span> Odsy-1000<br>
                      <span class="inline-block w-40 text-xl font-bold">Color</span> Brown<br>
                      <span class="inline-block w-40 text-xl font-bold">Delivery</span> Russia, USA, and Europe<br>
                    </div>
                    <div class="xl:flex">
                      <div class="w-full xl:w-1/3">
                        Quantity<br><br>
                        <span class="mr-6">
                          <span class=""><button class="inline-block w-10 p-2 border rounded-l" type="button"> + </button></span>
                          <input class="w-10 p-2 -mx-1 text-center border-t border-b " type="text" value="1">
                          <span class=""><button class="inline-block w-10 p-2 border rounded-r" type="button"> − </button></span>
                        </span>
                      </div>
                      <div class="w-full mt-3 xl:w-2/3 xl:mt-0">
                        Select size<br><br>
                        <div class="">
                          <label><input type="radio" name="select_size" checked="" class="">  Small</label>
                          <label><input type="radio" name="select_size" checked="" class="">  Medium</label>
                          <label><input type="radio" name="select_size" checked="" class="">  Large</label>
                        </div>
                      </div>
                    </div>
                    <div class="mt-4">
                      <a href="#" class="px-4 py-2 mr-3 font-bold text-white bg-teal-700 rounded hover:bg-teal-800">Buy now</a>
                      <button type="button" class="px-4 py-2 font-bold text-white bg-teal-700 rounded hover:bg-teal-800">Add to cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="filters">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Filters</h1>
            <div class="flex justify-between p-2 border rounded md:p-4">
              <div class="">
                Category
        				<select class="p-2 ml-2 border rounded">
        					<option>Clothes</option>
        					<option>Electronics</option>
        					<option>Home Items</option>
        					<option>Foods</option>
        				</select>
              </div>
              <div class="inline-flex">
          			  <button type="button" class="px-3 py-2 font-bold text-white bg-teal-500 border border-teal-500 rounded-l">Featured</button>
          			  <button type="button" class="px-3 py-2 font-bold text-teal-500 border border-teal-500 hover:text-white hover:bg-teal-500 ">New Items</button>
          			  <button type="button" class="px-3 py-2 -ml-px font-bold text-teal-500 border border-teal-500 rounded-r hover:text-white hover:bg-teal-500">On Sale</button>
              </div>
            </div>
            <br><br>

            <div class="lg:flex lg:flex-wrap">
              <div class="w-full lg:w-1/3">
                <div class="p-4 m-2 border rounded">
                  <h3 class="mb-4 text-lg font-bold">Product type</h3>
                  <ul>
                    <li class="mb-2"><a href="#">People<span class="float-right px-1 text-sm bg-gray-300 rounded">120</span></a></li>
                    <li class="mb-2"><a href="#">Watches<span class="float-right px-1 text-sm bg-gray-300 rounded">45</span></a></li>
                    <li class="mb-2"><a href="#">Cinema<span class="float-right px-1 text-sm bg-gray-300 rounded">63</span></a></li>
                    <li class="mb-2"><a href="#">Clothes<span class="float-right px-1 text-sm bg-gray-300 rounded">16</span></a></li>
                    <li class="mb-2"><a href="#">Home items<span class="float-right px-1 text-sm bg-gray-300 rounded">74</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="p-3 m-2 border rounded">
                  <h3 class="mb-4 text-lg font-bold">Rating</h3>
                  <label class="block mb-2">
                    <input type="checkbox" class="text-teal-500 form-checkbox" checked="">
                    <span class="ml-2 text-orange-500">
                      <i class="mr-1 fa fa-star"></i><i class="mr-1 fa fa-star"></i><i class="mr-1 fa fa-star"></i><i class="mr-1 fa fa-star"></i><i class="mr-1 fa fa-star"></i>
                    </span>
                  </label>
                  <label class="block mb-2">
                    <input type="checkbox" class="text-teal-500 form-checkbox" checked="">
                    <span class="ml-2 text-orange-500">
                      <i class="mr-1 fa fa-star"></i><i class="mr-1 fa fa-star"></i><i class="mr-1 fa fa-star"></i><i class="mr-1 fa fa-star"></i>
                    </span>
                  </label>
                  <label class="block mb-2">
                  <input type="checkbox" class="text-teal-500 form-checkbox" unchecked>
                    <span class="ml-2 text-orange-500">
                      <i class="mr-1 fa fa-star"></i><i class="mr-1 fa fa-star"></i><i class="mr-1 fa fa-star"></i>
                    </span>
                  </label>
                  <label class="block mb-2">
                    <input type="checkbox" class="text-teal-500 form-checkbox" checked="">
                    <span class="ml-2 text-orange-500">
                      <i class="mr-1 fa fa-star"></i><i class="mr-1 fa fa-star"></i>
                    </span>
                  </label>
                  <label class="block mb-2">
                    <input type="checkbox" class="text-teal-500 form-checkbox" unchecked>
                    <span class="ml-2 text-orange-500">
                      <i class="mr-1 fa fa-star"></i><i class="mr-1 fa fa-star"></i>
                    </span>
                  </label>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="p-3 m-2 border rounded">
                  <h3 class="mb-4 text-lg font-bold">Brands</h3>
                  <label class="block mb-2"><input type="checkbox" class="text-teal-500 form-checkbox" checked=""><span class="ml-2">Mercedes</span></label>
                  <label class="block mb-2"><input type="checkbox" class="text-teal-500 form-checkbox" unchecked=""><span class="ml-2">Toyota</span></label>
                  <label class="block mb-2"><input type="checkbox" class="text-teal-500 form-checkbox" checked=""><span class="ml-2">Mitsubishi</span></label>
                  <label class="block mb-2"><input type="checkbox" class="text-teal-500 form-checkbox" checked=""><span class="ml-2">Nissan</span></label>
                  <label class="block mb-2"><input type="checkbox" class="text-teal-500 form-checkbox" unchecked=""><span class="ml-2">Vinfast</span></label>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="p-3 m-2 border rounded">
                  <h3 class="mb-4 text-lg font-bold">Brands count</h3>
                  <label class="block mb-2">
                    <input type="checkbox" class="text-teal-500 form-checkbox" checked="">
                    <span class="ml-2">
                      Mercedes<span class="float-right px-1 text-sm bg-gray-300 rounded">91</span>
                    </span>
                  </label>
                  <label class="block mb-2">
                    <input type="checkbox" class="text-teal-500 form-checkbox" unchecked="">
                    <span class="ml-2">
                      Toyota<span class="float-right px-1 text-sm bg-gray-300 rounded">35</span>
                    </span>
                  </label>
                  <label class="block mb-2">
                    <input type="checkbox" class="text-teal-500 form-checkbox" unchecked="">
                    <span class="ml-2">
                      Mitsubishi<span class="float-right px-1 text-sm bg-gray-300 rounded">72</span>
                    </span>
                  </label>
                  <label class="block mb-2">
                    <input type="checkbox" class="text-teal-500 form-checkbox" checked="">
                    <span class="ml-2">
                      Nissan<span class="float-right px-1 text-sm bg-gray-300 rounded">53</span>
                    </span>
                  </label>
                  <label class="block mb-2">
                    <input type="checkbox" class="text-teal-500 form-checkbox" checked="">
                    <span class="ml-2">
                      Vinfast<span class="float-right px-1 text-sm bg-gray-300 rounded">62</span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="p-3 m-2 border rounded">
                  <h3 class="mb-4 text-lg font-bold">Colors</h3>
                  <div class="flex flex-wrap">
                    <label class="w-1/2 mb-2"><input type="checkbox" class="text-teal-500 form-checkbox" checked=""><span class="ml-2">Red</span></label>
                    <label class="w-1/2 mb-2"><input type="checkbox" class="text-teal-500 form-checkbox" unchecked=""><span class="ml-2">Green</span></label>
                    <label class="w-1/2 mb-2"><input type="checkbox" class="text-teal-500 form-checkbox" unchecked=""><span class="ml-2">White</span></label>
                    <label class="w-1/2 mb-2"><input type="checkbox" class="text-teal-500 form-checkbox" checked=""><span class="ml-2">Yellow</span></label>
                    <label class="w-1/2 mb-2"><input type="checkbox" class="text-teal-500 form-checkbox" checked=""><span class="ml-2">Blue</span></label>
                    <label class="w-1/2 mb-2"><input type="checkbox" class="text-teal-500 form-checkbox" checked=""><span class="ml-2">Orange</span></label>
                    <label class="w-1/2 mb-2"><input type="checkbox" class="text-teal-500 form-checkbox" unchecked=""><span class="ml-2">Brown</span></label>
                    <label class="w-1/2 mb-2"><input type="checkbox" class="text-teal-500 form-checkbox" checked=""><span class="ml-2">Violet</span></label>
                    <label class="w-1/2 mb-2"><input type="checkbox" class="text-teal-500 form-checkbox" unchecked=""><span class="ml-2">Black</span></label>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="p-3 m-2 border rounded">
                  <h3 class="mb-4 text-lg font-bold">Price range</h3>
                  <input type="range" class="w-full" min="0" max="100" name="">
                  <div class="flex py-2">
                    <div class="w-1/2 pr-1">
                      <label>Min</label>
                      <input class="w-full p-2 border rounded" placeholder="$0" type="number">
                    </div>
                    <div class="w-1/2 pl-1">
                      <label class="block text-right">Max</label>
                      <input class="w-full p-2 border rounded" placeholder="$1,0000" type="number">
                    </div>
                  </div>
                  <button class="w-full p-2 mt-2 mb-1 text-center text-white bg-teal-500 rounded hover:bg-teal-600">Apply</button>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="p-3 m-2 border rounded">
                  <h3 class="mb-4 text-lg font-bold">Buying</h3>
                  <label class="block mb-2"><input type="radio" class="text-teal-500 form-radio" name="buying" value="" checked=""><span class="ml-2">All listing</span></label>
                  <label class="block mb-2"><input type="radio" class="text-teal-500 form-radio" name="buying" value=""><span class="ml-2">Auctions</span></label>
                  <label class="block mb-2"><input type="radio" class="text-teal-500 form-radio" name="buying" value=""><span class="ml-2">Buy now</span></label>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="p-3 m-2 border rounded">
                  <h3 class="mb-4 text-lg font-bold">Sizes</h3>
                  <label class="inline-block mr-3"><input type="checkbox" class="text-teal-500 form-checkbox" checked=""><span class="ml-2">Yellow</span></label>
                  <label class="inline-block mr-3"><input type="checkbox" class="text-teal-500 form-checkbox" checked=""><span class="ml-2">Blue</span></label>
                  <label class="inline-block mr-3"><input type="checkbox" class="text-teal-500 form-checkbox" checked=""><span class="ml-2">Orange</span></label>
                  <label class="inline-block mr-3"><input type="checkbox" class="text-teal-500 form-checkbox" unchecked=""><span class="ml-2">Brown</span></label>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="p-3 m-2 border rounded">
                  <h3 class="mb-4 text-lg font-bold">Search</h3>
                  <div class="inline-flex input-group">
              			<input type="text" placeholder="Keyword" class="px-4 py-2 border rounded-l" name="">
              			<span class="px-4 py-2 text-white bg-teal-500 border border-teal-500 rounded-r"> <button> <i class="fa fa-search"></i></button></span>
              		</div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="forms">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Forms</h1>
            <div class="lg:flex lg:flex-wrap">
              <div class="w-full lg:w-1/2">
                <div class="p-3 m-3 border rounded">
                  <h3 class="mb-4 text-lg font-bold">Sign up</h3>
                  <div class="flex mb-4">
                    <div class="w-1/2 px-1">
                      <label>First name</label>
                      <input type="text" class="w-full px-3 py-2 mt-1 border rounded" placeholder="">
                    </div>
                    <div class="w-1/2 px-1">
                      <label>Last name</label>
                      <input type="text" class="w-full px-3 py-2 mt-1 border rounded" placeholder="">
                    </div>
                  </div>
                  <div class="px-1 mb-4">
                    <label>Email</label>
                    <input type="text" class="w-full px-3 py-2 mt-1 border rounded" placeholder="">
                    <p class="text-sm text-gray-500">We'll never share your email with anyone else.</p>
                  </div>
                  <div class="flex mb-4">
                    <div class="w-1/2 px-1">
                      <label>Create password</label>
                      <input type="password" class="w-full px-3 py-2 mt-1 border rounded" placeholder="">
                    </div>
                    <div class="w-1/2 px-1">
                      <label>Repeat password</label>
                      <input type="password" class="w-full px-3 py-2 mt-1 border rounded" placeholder="">
                    </div>
                  </div>
                  <div class="mx-1 ">
                    <button type="submit" class="w-full p-2 mt-2 mb-4 font-bold text-center text-white bg-teal-500 rounded hover:bg-teal-600"> Register  </button>
                  </div>
                  <div class="p-2 text-center border-t">
                    Have an account? <a class="text-teal-500" href="#">Log In</a>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-1/2">
                <div class="p-3 m-3 border rounded">
                  <h3 class="mb-4 text-lg font-bold">Profile</h3>

                  <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/avatars/avatar1.jpg" class="w-20 h-20 mb-4 border rounded-full" alt="">

                  <div class="flex mb-4">
                    <div class="w-1/2 px-1">
                      <label>Name</label>
                      <input type="text" class="w-full px-3 py-2 mt-1 border rounded" placeholder="" value="Komol">
                    </div>
                    <div class="w-1/2 px-1">
                      <label>Email</label>
                      <input type="text" class="w-full px-3 py-2 mt-1 border rounded" placeholder="" value="Kuchkarov">
                    </div>
                  </div>

                  <div class="flex mb-4">
                    <div class="w-1/2 px-1">
                      <label>Country</label>
                      <select class="form-select  w-full px-3 py-2 mt-1 border rounded">
              			    <option> Choose...</option>
              			      <option>Uzbekistan</option>
              			      <option>Russia</option>
              			      <option selected="">United States</option>
              			      <option>India</option>
              			      <option>Afganistan</option>
              			  </select>
                    </div>
                    <div class="w-1/2 px-1">
                      <label>City</label>
                      <input type="text" class="w-full px-3 py-2 mt-1 border rounded" placeholder="">
                    </div>
                  </div>

                  <div class="flex mb-4">
                    <div class="w-1/2 px-1">
                      <label>Zip</label>
                      <input type="text" class="w-full px-3 py-2 mt-1 border rounded" placeholder="" value="123009">
                    </div>
                    <div class="w-1/2 px-1">
                      <label>Phone</label>
                      <input type="text" class="w-full px-3 py-2 mt-1 border rounded" placeholder="" value="+123456789">
                    </div>
                  </div>
                  <div class="mx-1 ">
                    <button type="submit" class="w-full p-2 mt-2 font-bold text-center text-white bg-teal-500 rounded hover:bg-teal-600"> Register  </button>
                  </div>

                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="p-4 m-3 border rounded">
                  <h3 class="mb-4 text-lg font-bold">Sign in</h3>
                  <a href="#" class="block p-2 mb-4 font-bold text-center text-white bg-blue-800 rounded hover:bg-blue-900"><i class="mr-2 fab fa-facebook-f"></i> Sign in with Facebook</a>
                  <a href="#" class="block p-2 mb-4 font-bold text-center text-white bg-red-500 rounded hover:bg-red-600"><i class="mr-2 fab fa-google"></i> Sign in with Facebook</a>

                  <label>Email</label>
                  <input type="text" class="w-full px-3 py-2 mt-1 mb-4 border rounded" placeholder="" placehoder="tailwin@css">
                  <label>Password</label><a class="float-right text-teal-500" href="#">Forgot</a>
                  <input type="password" class="w-full px-3 py-2 mt-1 mb-4 border rounded" placeholder="" placehoder="******">
                  <label class="mb-4"><input type="checkbox" class="text-teal-500 form-checkbox" checked=""><span class="ml-2">Remember</span></label>
                  <button type="submit" class="w-full p-2 mt-2 mb-2 font-bold text-center text-white bg-teal-500 rounded hover:bg-teal-600"> Login  </button>


                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="p-4 m-3 border rounded">
                  <h3 class="mb-4 text-lg font-bold">Feedback</h3>
                  <label>Email</label>
                  <input type="text" class="w-full px-3 py-2 mt-1 mb-4 border rounded" placeholder="" placehoder="tailwin@css">
                  <label>What is message about?</label>
                  <select class="w-full px-3 py-2 mt-1 mb-4 border rounded">
            				<option>Select</option>
            				<option>Technical issue</option>
            				<option>Money refund</option>
            				<option>Recommendation</option>
            			</select>
                  <label>What is message about?</label>
                  <textarea class="w-full px-3 py-2 mt-1 mb-4 border rounded" rows="5"></textarea>
                  <button type="submit" class="w-full p-2 mt-2 mb-2 font-bold text-center text-white bg-teal-500 rounded hover:bg-teal-600"> Send  </button>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="p-4 m-2 border rounded">
                  <h3 class="mb-4 text-lg font-bold">Payment</h3>
                  <label>Name on card</label>
                  <input type="text" class="w-full px-3 py-2 mt-1 mb-4 border rounded" placeholder="" placehoder="Ex. John Smith">
                  <label>Card number</label>
                  <div class="relative flex mb-4 border rounded">
                    <input type="text" class="w-full px-3 py-2 rounded-l" name="cardNumber" placeholder="">
                    <div class="absolute right-0 px-3 py-2 bg-gray-400">
                      <i class="fab fa-cc-visa"></i>
                      <i class="fab fa-cc-amex"></i>
                      <i class="fab fa-cc-mastercard"></i>
                    </div>
                  </div>
                  <div class="sm:flex">
                    <div class="w-full sm:w-2/3">
                      <label class="block">Expiration</label>
                      <select class="w-20 px-3 py-2 mb-4 border rounded">
              				  <option>MM</option>
              				  <option>01 - Janiary</option>
              				  <option>02 - February</option>
              				  <option>03 - February</option>
              				</select>
                      <span class="mx-1">/</span>
                      <select class="w-20 px-3 py-2 mb-4 border rounded">
              				  <option>YY</option>
              				  <option>2018</option>
              				  <option>2019</option>
              				</select>
                    </div>
                    <div class="w-full sm:w-1/3">
                      <label class="block">CVV</label>
                      <input class="w-full px-3 py-2 mb-4 border rounded lg:w-20" required="" type="text">
                    </div>
                  </div>
                  <div class="px-3 py-2 mb-4 text-green-600 bg-green-200 border border-green-300 rounded">
                    <i class="fa fa-lock"></i> Some secureity information
                  </div>
                  <button type="submit" class="w-full p-2 mt-2 mb-2 font-bold text-center text-white bg-teal-500 rounded hover:bg-teal-600">  Confirm    </button>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="shopping_cart">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Shopping cart</h1>
            <div class="lg:flex lg:flex-wrap">
              <div class="w-full xl:w-3/4">
                <div class="p-4 m-3 border rounded">
                  <table class="w-full table-fixed">
                    <tr>
                      <th class="w-1/2 p-2 text-sm text-left text-gray-600 lg:w-5/12">PRODUCT</th>
                      <th class="w-1/4 p-2 text-sm text-left text-gray-600 lg:w-2/12">QUANTITY</th>
                      <th class="w-1/4 p-2 text-sm text-left text-gray-600 lg:w-2/12">PRICE</th>
                      <th class="w-0 p-2 text-sm text-left text-gray-600 lg:w-3/12"></th>
                    </tr>
                    <tbody>
                      <tr>
                        <td class="p-2">
                          <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="" class="hidden float-left w-16 lg:block">
                          <div class="pl-0 md:pl-20">
                            <a href="#" class="block mb-2">Camera Canon EOS M50 Kit</a>
                            <p class="text-sm text-gray-500">Matrix: 25 Mpx <br> Brand: Canon</p>
                          </div>
                        </td>
                        <td class="p-2">
                          <select class="w-20 px-3 py-2 border rounded">
                    				<option>1</option>
                    				<option>2</option>
                    				<option>3</option>
                    				<option>4</option>
                    			</select>
                        </td>
                        <td class="p-2">
                          <div class="text-xl font-bold">$1156.00</div>
                          <p class="text-gray-500 font-sm">$315.20 each</p>
                        </td>
                        <td class="hidden p-2 text-center lg:table-cell">
                          <a href="#" class="px-3 py-2 font-bold border rounded"><i class="fa fa-heart"></i></a>
                          <a href="#" class="px-3 py-2 mr-2 font-bold border rounded">Remove</a>
                        </td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td class="p-2">
                          <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg" alt="" class="hidden float-left w-16 lg:block">
                          <div class="pl-0 md:pl-20">
                            <a href="#" class="block mb-2">ADATA Premier ONE microSDXC</a>
                            <p class="text-sm text-gray-500">Size: 256 GB <br> Brand: ADATA</p>
                          </div>
                        </td>
                        <td class="p-2">
                          <select class="w-20 px-3 py-2 border rounded">
                    				<option>1</option>
                    				<option>2</option>
                    				<option>3</option>
                    				<option>4</option>
                    			</select>
                        </td>
                        <td class="p-2">
                          <div class="text-xl font-bold">$149.97</div>
                          <p class="text-gray-500 font-sm">$75.00 each</p>
                        </td>
                        <td class="hidden p-2 text-center lg:table-cell">
                          <a href="#" class="px-3 py-2 font-bold border rounded"><i class="fa fa-heart"></i></a>
                          <a href="#" class="px-3 py-2 mr-2 font-bold border rounded">Remove</a>
                        </td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td class="p-2">
                          <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/3.jpg" alt="" class="hidden float-left w-16 lg:block">
                          <div class="pl-0 md:pl-20">
                            <a href="#" class="block mb-2">Gamepad Sony DualShock 4</a>
                            <p class="text-sm text-gray-500">Version: CUH-ZCT2E <br> Brand: Sony</p>
                          </div>
                        </td>
                        <td class="p-2">
                          <select class="w-20 px-3 py-2 border rounded">
                    				<option>1</option>
                    				<option>2</option>
                    				<option>3</option>
                    				<option>4</option>
                    			</select>
                        </td>
                        <td class="p-2">
                          <div class="text-xl font-bold">$98.00</div>
                          <p class="text-gray-500 font-sm">$578.00 each</p>
                        </td>
                        <td class="hidden p-2 text-center lg:table-cell">
                          <a href="#" class="px-3 py-2 font-bold border rounded"><i class="fa fa-heart"></i></a>
                          <a href="#" class="px-3 py-2 mr-2 font-bold border rounded">Remove</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="pt-4 pl-4 border-t">
                    <i class="text-teal-500 icon text-success fa fa-truck"></i> Free Delivery within 1-2 weeks
                  </div>
                </div>
              </div>
              <div class="w-full xl:w-1/4">
                <div class="p-4 m-3 border rounded">
                  <label>Have coupon?</label>
                  <div class="relative mt-1">
                    <input type="text" class="px-3 py-2 border rounded-l" name="" placeholder="Coupon code">
                    <button class="absolute right-0 px-3 py-2 font-bold text-white bg-teal-500 border border-teal-500 rounded-r">Apply</button>
                  </div>
                </div>
                <div class="p-4 m-3 border rounded">
                  <p class="my-1">Total price:<span class="float-right">$69.97</span></p>
                  <p class="my-1">Discount:<span class="float-right text-red-500">- $10.00</span></p>
                  <p class="my-1">Total:<span class="float-right font-bold">$59.97</span></p>
                  <hr class="my-4">
                  <div class="text-center">
                    <img class="w-40 max-w-full mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/misc/payments.png" alt="">
                    <a href="#" class="block p-2 mt-4 font-bold text-white bg-teal-500 rounded hover:bg-teal-600"> Make Purchase </a>
                    <a href="#" class="block p-2 mt-2 font-bold border rounded hover:border-gray-500"> Continue Shopping</a>
                  </div>
                </div>
              </div>
            </div>
            <br><br>
            <div class="lg:flex lg:flex-wrap">
              <div class="w-full xl:w-3/4">
                <div class="p-4 m-3 border rounded">
                  <h4 class="text-xl font-bold">Review cart</h4>
                  <div class="p-4 border-b xl:flex xl:flex-wrap">
                    <div class="w-full mb-4 xl:w-1/2">
                      <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" class="float-left w-12 h-12 border">
                      <div class="pl-16">
                        <p>Name of the product goes here or title</p>
                        <span>2x $290 = Total: $430</span>
                      </div>
                    </div>
                    <div class="w-full mb-4 xl:w-1/2">
                      <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg" class="float-left w-12 h-12 border">
                      <div class="pl-16">
                        <p>Name of the product goes here or title</p>
                        <span>2x $290 = Total: $430</span>
                      </div>
                    </div>
                    <div class="w-full mb-4 xl:w-1/2">
                      <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/3.jpg" class="float-left w-12 h-12 border">
                      <div class="pl-16">
                        <p>Name of the product goes here or title</p>
                        <span>2x $290 = Total: $430</span>
                      </div>
                    </div>
                    <div class="w-full mb-4 xl:w-1/2">
                      <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/4.jpg" class="float-left w-12 h-12 border">
                      <div class="pl-16">
                        <p>Name of the product goes here or title</p>
                        <span>2x $290 = Total: $430</span>
                      </div>
                    </div>
                  </div>
                  <div class="p-4 font-bold md:flex md:flex-wrap">
                    <div class="w-full md:w-10/12">
                      Subtotal: <span class="float-right text-gray-600">2 items</span>
                    </div>
                    <div class="w-full mb-3 text-right text-black md:w-2/12">
                      $1,568
                    </div>
                    <div class="w-full md:w-10/12">
                      Discount: <span class="float-right text-gray-600">10% offer</span>
                    </div>
                    <div class="w-full mb-3 text-right text-red-600 md:w-2/12">
                      $29
                    </div>
                    <div class="w-full md:w-10/12">
                      Delivery charge: <span class="float-right text-gray-600">Express delivery</span>
                    </div>
                    <div class="w-full mb-3 text-right text-black md:w-2/12">
                      $120
                    </div>
                    <div class="w-full md:w-10/12">
                      Tax: <span class="float-right text-gray-600">5%</span>
                    </div>
                    <div class="w-full mb-3 text-right text-green-600 md:w-2/12">
                      $7
                    </div>
                    <div class="w-full">
                      Total: <span class="float-right text-xl text-black">$1,650</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full xl:w-1/4">
                <div class="p-4 m-3 border rounded">
                  Dropdown sample
                  <a data-target="shopping_cart-1" onclick="toggleTarget(event)" href="#" class="block p-2 mt-4 font-bold text-center text-white bg-teal-500 rounded hover:bg-teal-600">Show cart <i class="fas fa-caret-down"></i></a>
                  <div data-selector="shopping_cart-1" style="display: none;">
                    <div class="absolute max-w-xs p-3 mt-2 bg-white border rounded">
                      <div class="mb-3 overflow-hidden">
                        <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" class="float-left w-20 h-20 p-2 border">
                        <div class="pl-24">
                          Some other item name is here
                          <p class="font-bold">$250<span class="float-right text-teal-500"><i class="fa fa-trash"></i></span></p>
                        </div>
                      </div>
                      <div class="mb-3 overflow-hidden">
                        <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg" class="float-left w-20 h-20 p-2 border">
                        <div class="pl-24">
                          Some other item name is here
                          <p class="font-bold">$250<span class="float-right text-teal-500"><i class="fa fa-trash"></i></span></p>
                        </div>
                      </div>
                      <div class="mb-3 overflow-hidden">
                        <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/3.jpg" class="float-left w-20 h-20 p-2 border">
                        <div class="pl-24">
                          Some other item name is here
                          <p class="font-bold">$250<span class="float-right text-teal-500"><i class="fa fa-trash"></i></span></p>
                        </div>
                      </div>
                      <div class="py-4 text-center border-t ">Subtotal: <span class="font-bold">$1200</span></div>
                      <a href="#" class="block p-2 font-bold text-center text-white bg-teal-500 rounded hover:bg-teal-600"> CheckOut </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="features">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Features</h1>
            <div class="lg:flex lg:flex-wrap">

              <div class="w-full lg:w-1/2 xl:w-1/4">
                <div class="p-6 m-3 text-center border rounded">
                  <span class="inline-block w-16 h-16 p-2 text-3xl text-white bg-teal-600 rounded-full">
                    <i class="fa fa-user"></i>
                  </span>
                  <h3 class="my-4 text-xl font-bold text-black">
                    Creative Strategy & solution
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
              </div>

              <div class="w-full lg:w-1/2 xl:w-1/4">
                <div class="p-6 m-3 text-center border rounded">
                  <span class="inline-block w-16 h-16 p-2 text-3xl text-white bg-red-600 rounded-full">
                    <i class="fa fa-truck"></i>
                  </span>
                  <h3 class="my-4 text-xl font-bold text-black">
                    Creative Strategy & solution
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
              </div>

              <div class="w-full lg:w-1/2 xl:w-1/4">
                <div class="p-6 m-3 text-center border rounded">
                  <span class="inline-block w-16 h-16 p-2 text-3xl text-white bg-green-600 rounded-full">
                    <i class="fa fa-star"></i>
                  </span>
                  <h3 class="my-4 text-xl font-bold text-black">
                    Creative Strategy & solution
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
              </div>

              <div class="w-full lg:w-1/2 xl:w-1/4">
                <div class="p-6 m-3 text-center border rounded">
                  <span class="inline-block w-16 h-16 p-2 text-3xl text-white bg-gray-600 rounded-full">
                    <i class="far fa-clock"></i>
                  </span>
                  <h3 class="my-4 text-xl font-bold text-black">
                    Creative Strategy & solution
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
              </div>

            </div>

            <br><br>
            <div class="lg:flex lg:flex-wrap">
              <div class="w-full xl:w-1/3">
                <div class="p-4 m-3 border rounded">
                  <span class="inline-block float-left w-12 h-12 p-2 text-xl text-center text-white bg-teal-600 rounded-full"><i class="fa fa-money-bill-alt"></i></span>
                  <div class="pl-16">
                    <h4 class="mb-1 font-bold">Reasonable prices</h4>
                    <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor</p>
                  </div>
                </div>
              </div>
              <div class="w-full xl:w-1/3">
                <div class="p-4 m-3 border rounded">
                  <span class="inline-block float-left w-12 h-12 p-2 text-xl text-center text-white bg-gray-700 rounded-full"><i class="fa fa-comment-dots"></i></span>
                  <div class="pl-16">
                    <h4 class="mb-1 font-bold">Reasonable prices</h4>
                    <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor</p>
                  </div>
                </div>
              </div>
              <div class="w-full xl:w-1/3">
                <div class="p-4 m-3 border rounded">
                  <span class="inline-block float-left w-12 h-12 p-2 text-xl text-center text-white bg-green-600 rounded-full"><i class="fa fa-truck"></i></span>
                  <div class="pl-16">
                    <h4 class="mb-1 font-bold">Reasonable prices</h4>
                    <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="p-2 m-3 border rounded">
              <div class="lg:flex lg:flex-wrap">

                <div class="w-full p-4 xl:w-1/3">
                  <i class="text-teal-600 fa fa-2x fa-truck"></i>
                  <h3 class="my-2 text-xl font-bold text-black">Fast delivery</h3>
                  <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
                <div class="w-full p-4 xl:w-1/3">
                  <i class="text-teal-600 fa fa-2x fa-landmark"></i>
                  <h3 class="my-2 text-xl font-bold text-black">Creative Strategy</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
                <div class="w-full p-4 xl:w-1/3">
                  <i class="text-teal-600 fa fa-2x fa-lock"></i>
                  <h3 class="my-2 text-xl font-bold text-black">Fast delivery</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
              </div>

            </div>

          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="headers">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Site headers</h1>

            <div class="p-1 border">
              <div class="container px-2 border-b lg:flex lg:justify-between">
                <div class="hidden lg:block">
                  <a href="#" class="inline-block p-2 text-gray-500 hover:text-gray-700"><i class="fab fa-facebook"></i></a>
                  <a href="#" class="inline-block p-2 text-gray-500 hover:text-gray-700"><i class="fab fa-instagram"></i></a>
                  <a href="#" class="inline-block p-2 text-gray-500 hover:text-gray-700"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="w-full lg:w-auto">
                  <ul>
                    <li class="inline-block"><a class="inline-block p-2 text-gray-500 hover:text-gray-700" href=""> Delivery</a></li>
                    <li class="inline-block"><a class="inline-block p-2 text-gray-500 hover:text-gray-700" href="">  Help </a></li>
                    <li class="relative inline-block">
                      <a data-target="headers" onclick="toggleTarget(event)" class="inline-block p-2 text-gray-500 hover:text-gray-700" href="">  USD <i class="fas fa-caret-down"></i></a>
                      <div data-selector="headers" style="display: none;">
                        <div class="absolute z-50 w-32 py-1 bg-white border rounded">
                          <ul>
                            <li><a href="#" class="block px-3 py-1 hover:bg-gray-300">VND</a></li>
                            <li><a href="#" class="block px-3 py-1 hover:bg-gray-300">AED</a></li>
                            <li><a href="#" class="block px-3 py-1 hover:bg-gray-300">EUR</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="relative inline-block">
                      <a data-target="headers-2" onclick="toggleTarget(event)" class="inline-block p-2 text-gray-500 hover:text-gray-700" href="">  Languages <i class="fas fa-caret-down"></i></a>
                      <div data-selector="headers-2" style="display: none;">
                        <div class="absolute z-50 w-32 py-1 bg-white border rounded">
                          <ul>
                            <li><a href="#" class="block px-3 py-1 hover:bg-gray-300">VN</a></li>
                            <li><a href="#" class="block px-3 py-1 hover:bg-gray-300">English</a></li>
                            <li><a href="#" class="block px-3 py-1 hover:bg-gray-300">Russian </a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="container items-center px-2 py-2 border-b md:flex md:justify-between md:flex-wrap">
                <a class="py-2 " href="#">
                  <img class="h-8 mr-8" src="https://i0.wp.com/uphinh.org/images/2020/02/02/l.png">
                </a>
                <div class="py-2 ">
                  <form class="inline-flex" action="" method="post">
                    <input type="text" class="px-3 py-2 border rounded-l" placeholder="Search">
                    <select class="px-3 py-2 -mx-px text-gray-600 border" name="category_name">
          						<option value="">All type</option>
                      <option value="codex">Special</option>
          						<option value="comments">Only best</option>
          						<option value="content">Latest</option>
          				</select>
                  <button class="px-3 py-2 text-white bg-teal-500 border border-teal-500 rounded-r hover:bg-teal-600" type="submit">
      			        <i class="fa fa-search"></i>
      			      </button>
                  </form>
                </div>
                <div class="w-full py-2 md:w-auto">
                  <span class="relative inline-block w-12 h-12 p-3 mr-1 text-center text-gray-600 border rounded-full">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="absolute top-0 right-0 px-2 -m-1 text-sm leading-normal text-white bg-red-500 rounded-full leading-nose">0</span>
                  </span>
                  <span class="relative inline-block w-12 h-12 p-3 mr-1 text-center text-gray-600 border rounded-full">
                    <i class="fa fa-heart"></i>
                  </span>
                  <a href="#">
                    <span class="inline-flex">
                      <span class="relative inline-block w-12 h-12 p-3 mr-2 text-center text-gray-600 border rounded-full">
                        <i class="fa fa-user"></i>
                      </span>
                      <div class="">
                         <p class="text-sm text-gray-500">Sign in | Join</p>
                         My account <i class="fa fa-caret-down"></i>
                      </div>
                    </span>
                  </a>
                </div>
              </div>

              <div class="p-6">
                Use any container for content body... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>

          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="footers">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Site footers</h1>
            <div class="p-1 border">
              <div class="p-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
              <div class="container py-4 border-t md:flex md:flex-wrap">
                <div class="w-full px-6 py-4 xl:w-4/12">
                  <img class="h-8 mr-8" src="https://i0.wp.com/uphinh.org/images/2020/02/02/l.png">
                  <p class="my-6">Some short text about company like You might remember the Dell computer commercials in which a youth reports this exciting news to his friends.</p>
                  <div class="">
                    <a href="" class="inline-block w-10 h-10 p-1 text-xl text-center border border-gray-300 rounded hover:border-gray-500"><i class="fab fa-facebook-f"></i></a>
                    <a href="" class="inline-block w-10 h-10 p-1 text-xl text-center border border-gray-300 rounded hover:border-gray-500"><i class="fab fa-instagram"></i></a>
                    <a href="" class="inline-block w-10 h-10 p-1 text-xl text-center border border-gray-300 rounded hover:border-gray-500"><i class="fab fa-youtube"></i></a>
                    <a href="" class="inline-block w-10 h-10 p-1 text-xl text-center border border-gray-300 rounded hover:border-gray-500"><i class="fab fa-twitter"></i></a>
                  </div>
                </div>
                <div class="w-full px-6 py-4 md:w-1/4 xl:w-2/12">
                  <h6 class="mb-4 font-bold text-black">About</h6>
                  <ul>
                    <li class="block mb-2"><a href="#" class="">About us</a></li>
                    <li class="block mb-2"><a href="#" class="">Services</a></li>
                    <li class="block mb-2"><a href="#" class="">Rules and terms</a></li>
                    <li class="block mb-2"><a href="#" class="">Blogs</a></li>
                  </ul>
                </div>
                <div class="w-full px-6 py-4 md:w-1/4 xl:w-2/12">
                  <h6 class="mb-4 font-bold text-black">Services</h6>
                  <ul>
                    <li class="block mb-2"><a href="#" class="">Help center</a></li>
                    <li class="block mb-2"><a href="#" class="">Money refund</a></li>
                    <li class="block mb-2"><a href="#" class="">Terms and Policy</a></li>
                    <li class="block mb-2"><a href="#" class="">Open dispute</a></li>
                  </ul>
                </div>
                <div class="w-full p-4 px-6 py-4 md:w-1/4 xl:w-2/12">
                  <h6 class="mb-4 font-bold text-black">For users</h6>
                  <ul>
                    <li class="block mb-2"><a href="#" class="">User Login</a></li>
                    <li class="block mb-2"><a href="#" class="">User register</a></li>
                    <li class="block mb-2"><a href="#" class="">Account Setting</a></li>
                    <li class="block mb-2"><a href="#" class="">My Orders</a></li>
                    <li class="block mb-2"><a href="#" class="">My Wishlist</a></li>
                  </ul>
                </div>
                <div class="w-full px-6 py-4 md:w-1/4 xl:w-2/12">
                  <h6 class="mb-4 font-bold text-black">Our app</h6>
                  <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/misc/appstore.png"><br>
                  <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/misc/playmarket.png">

                </div>
              </div>
              <div class="container">
                <div class="p-4 border-t">
                  © 2019 Company All rights resetved
                  <span class="float-right">
                    <a href="#">Privacy &amp; Cookies</a>
                    <a href="#">Accessibility</a>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="p-1 border-b lg:px-10 lg:py-16" id="carousels">
          <div class="container mx-auto">
            <h1 class="mb-10 text-3xl font-bold">Carousels</h1>

            <div class="lg:flex">
              <div class="w-full lg:w-1/2">
                <div class="m-3">
                  <h3 class="mb-4"><span class="font-bold">SINGLE SLIDER</span> <span class="text-sm">OWL PLUGIN</span></h3>

                  <div class="relative overflow-hidden  z-10">
                    <div class="float-left transition duration-1000 ease-in-out">
                      <div class="float-left" style="display: none;">
                        <img class="w-full" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide1.jpg" alt="">
                      </div>
                      <div class="float-left carousel-item">
                        <img class="w-full" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide2.jpg" alt="">
                      </div>
                      <div class="float-left carousel-item" style="display: none;">
                        <img class="w-full" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide3.jpg" alt="">
                      </div>
                    </div>
                    <div onclick="" class="absolute left-0 flex items-center justify-center w-1/6 h-full text-5xl text-white opacity-75 cursor-pointer hover:opacity-100">
                      <i class="fas fa-chevron-left"></i>
                    </div>
                    <div onclick="" class="absolute right-0 flex items-center justify-center w-1/6 h-full text-5xl text-white opacity-75 cursor-pointer hover:opacity-100">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-1/2">
                <div class="m-2 ">
                  <h3 class="mb-4"><span class="font-bold">SINGLE SLIDER</span> <span class="font-sm">BOOTSTRAP</span></h3>
                  <div class="relative overflow-hidden  z-10">
                    <img class="hidden w-full" style="display: block;" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide1.jpg" alt="">
                    <img class="hidden w-full" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide2.jpg" alt="">
                    <img class="hidden w-full" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide3.jpg" alt="">
                    <div onclick="" class="absolute top-0 left-0 z-50 flex items-center justify-center w-1/6 h-full text-5xl text-white opacity-75 cursor-pointer hover:opacity-100">
                      <i class="fas fa-chevron-left"></i>
                    </div>
                    <div onclick="" class="absolute top-0 right-0 z-50 flex items-center justify-center w-1/6 h-full text-5xl text-white opacity-75 cursor-pointer hover:opacity-100">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                    <div class="absolute bottom-0 w-full mb-4 text-center">
                      <span class="inline-block w-3 h-3 mx-2 border border-white rounded-full"></span>
                      <span class="inline-block w-3 h-3 mx-2 border border-white rounded-full"></span>
                      <span class="inline-block w-3 h-3 mx-2 border border-white rounded-full"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-2 m-y">
              <h3 class="mb-4"><span class="font-bold">CAROUSEL ITEMS</span> <span class="text-sm">OWL PLUGIN</span></h3>

              <div class="relative product-carousel">
                <div class="product-carousel-inner">
                  <div class="float-left w-full product-carousel-item md:w-1/2 lg:w-1/4">
                    <div class="p-2 m-2 text-center border rounded-lg">
                      <img class="mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="">
                      <div class="my-4">
                        <a href="#" class="font-bold text-teal-500 hover:text-teal-600">First item name</a>
                      </div>
                    </div>
                  </div>
                  <div class="float-left w-full product-carousel-item md:w-1/2 lg:w-1/4">
                    <div class="p-2 m-2 text-center border rounded-lg">
                      <img class="mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="">
                      <div class="my-4">
                        <a href="#" class="font-bold text-teal-500 hover:text-teal-600">First item name</a>
                      </div>
                    </div>
                  </div>
                  <div class="float-left w-full product-carousel-item md:w-1/2 lg:w-1/4">
                    <div class="p-2 m-2 text-center border rounded-lg">
                      <img class="mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="">
                      <div class="my-4">
                        <a href="#" class="font-bold text-teal-500 hover:text-teal-600">First item name</a>
                      </div>
                    </div>
                  </div>
                  <div class="float-left w-full product-carousel-item md:w-1/2 lg:w-1/4">
                    <div class="p-2 m-2 text-center border rounded-lg">
                      <img class="mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="">
                      <div class="my-4">
                        <a href="#" class="font-bold text-teal-500 hover:text-teal-600">First item name</a>
                      </div>
                    </div>
                  </div>
                  <div class="float-left w-full product-carousel-item md:w-1/2 lg:w-1/4">
                    <div class="p-2 m-2 text-center border rounded-lg">
                      <img class="mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="">
                      <div class="my-4">
                        <a href="#" class="font-bold text-teal-500 hover:text-teal-600">First item name</a>
                      </div>
                    </div>
                  </div>
                  <div class="float-left w-full product-carousel-item md:w-1/2 lg:w-1/4">
                    <div class="p-2 m-2 text-center border rounded-lg">
                      <img class="mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="">
                      <div class="my-4">
                        <a href="#" class="font-bold text-teal-500 hover:text-teal-600">First item name</a>
                      </div>
                    </div>
                  </div>
                  <div class="float-left w-full product-carousel-item md:w-1/2 lg:w-1/4">
                    <div class="p-2 m-2 text-center border rounded-lg">
                      <img class="mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="">
                      <div class="my-4">
                        <a href="#" class="font-bold text-teal-500 hover:text-teal-600">First item name</a>
                      </div>
                    </div>
                  </div>
                  <div class="float-left w-full product-carousel-item md:w-1/2 lg:w-1/4">
                    <div class="p-2 m-2 text-center border rounded-lg">
                      <img class="mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="">
                      <div class="my-4">
                        <a href="#" class="font-bold text-teal-500 hover:text-teal-600">First item name</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </section>


      </main>
    </div>
@stop


@push('js')
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
@endpush
