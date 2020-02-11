@extends('layouts.app')
@section('content')
    <div class="lg:flex">
      <aside class="w-full lg:w-64 lg:sticky lg:top-0 h-64 lg:h-screen overflow-y-auto border lg:border-r ">
        <nav class="lg:pt-20 text-gray-600 overflow-y-auto">
          <a class="text-teal-600 font-bold py-2 px-3 block mb-1 text-sm" href="#colors">CONTENT</a>
          <ul class="menu-aside">
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#colors">Colors</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#typography">Typography</a> </li>
      		</ul>
          <a class="text-teal-600 font-bold py-2 px-3 block mb-1 text-sm" href="#alerts">COMPONENTS</a>
          <ul class="menu-aside">
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#alerts">Alerts</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#buttons">Buttons</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#forms">Form elements</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#badges">Badges and ratings</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#cards">Cards and boxes</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#images">Images</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#navbar">Navbar</a> </li>
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#icontext">Icon with text</a> </li>
      		</ul>
          <a class="text-teal-600 font-bold py-2 px-3 block mb-1 text-sm" href="#product_basic">BLOCKS</a>
          <ul class="menu-aside">
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#product_basic">Product grid</a> </li>
            <li> <a class="py-2 px-3 block hover:bg-gray-200" href="#product_list">Product list</a> </li>
            <li> <a class="py-2 px-3 block hover:bg-gray-200" href="#product_detail">Product detail</a> </li>
            <li> <a class="py-2 px-3 block hover:bg-gray-200" href="#filters">Filters</a> </li>
            <li> <a class="py-2 px-3 block hover:bg-gray-200" href="#forms">Forms</a> </li>
            <li> <a class="py-2 px-3 block hover:bg-gray-200" href="#shopping_cart">Shopping cart</a> </li>
            <li> <a class="py-2 px-3 block hover:bg-gray-200" href="#features">Features</a> </li>
            <li> <a class="py-2 px-3 block hover:bg-gray-200" href="#headers">Site headers</a> </li>
            <li> <a class="py-2 px-3 block hover:bg-gray-200" href="#footers">Site footers</a> </li>
          </ul>
          <a class="text-teal-600 font-bold py-2 px-3 block mb-1 text-sm" href="#carousels">MORE</a>
          <ul class="menu-aside">
      			<li> <a class="py-2 px-3 block hover:bg-gray-200" href="#carousels">Carousels</a> </li>
          </ul>
        </nav>
      </aside>
      <main class="w-full pt-4 lg:pt-12 text-gray-700">
        <section class="p-1 lg:px-10 lg:py-16 border-b" id="colors">
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

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="typography">
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

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="typography">
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

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="buttons">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Buttons</h1>
            <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded mb-2">Primary</button>
            <button type="button" class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded mb-2">Secondary</button>
            <button type="button" class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded mb-2">Success</button>
            <button type="button" class="bg-red-700 hover:bg-red-800 text-white font-bold py-2 px-4 rounded mb-2">Danger</button>
            <button type="button" class="bg-orange-700 hover:bg-orange-800 text-white font-bold py-2 px-4 rounded mb-2">Warning</button>
            <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded mb-2">Info</button>
            <button type="button" class="hover:border-gray-500 font-bold py-2 px-4 rounded border mb-2">Light</button>
            <button type="button" class="bg-gray-800 hover:bg-black text-white font-bold py-2 px-4 rounded mb-2">Dark</button>
            <br><br><br>
            <button type="button" class="text-teal-700 hover:bg-teal-700 border border-teal-700 hover:text-white font-bold py-2 px-4 rounded mb-2">Primary</button>
            <button type="button" class="text-gray-700 hover:bg-gray-700 border border-gray-700 hover:text-white font-bold py-2 px-4 rounded mb-2">Secondary</button>
            <button type="button" class="text-green-700 hover:bg-green-700 border border-green-700 hover:text-white font-bold py-2 px-4 rounded mb-2">Success</button>
            <button type="button" class="text-red-700 hover:bg-red-700 border border-red-700 hover:text-white font-bold py-2 px-4 rounded mb-2">Danger</button>
            <button type="button" class="text-orange-700 hover:bg-orange-700 border border-orange-700 hover:text-white font-bold py-2 px-4 rounded mb-2">Warning</button>
            <button type="button" class="text-teal-700 hover:bg-teal-700 border border-teal-700 hover:text-white font-bold py-2 px-4 rounded mb-2">Info</button>
            <button type="button" class="hover:bg-gray-500 hover:text-gray-700 text-gray-400 font-bold py-2 px-4 rounded border mb-2">Light</button>
            <button type="button" class="text-gray-700 hover:bg-gray-700 border border-gray-700 hover:text-white font-bold py-2 px-4 rounded mb-2">Dark</button>
            <br><br><br>
            <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded-full mb-2">Rounded pill</button>
            <button type="button" class="text-teal-700 hover:bg-teal-700 border border-teal-700 hover:text-white font-bold py-2 px-4 rounded-full mb-2">Rounded pill</button>
            <button type="button" class="w-10 bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 rounded-full mb-2"><i class="fa fa-user"></i></button>
            <button type="button" class="text-teal-700 hover:bg-teal-700 border border-teal-700 hover:text-white font-bold py-2 w-10 rounded-full mb-2"><i class="fa fa-user"></i></button>
            <br><br><br>
            <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded mb-2">Button <i class="fa fa-shopping-cart"></i></button>
            <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded mb-2"><i class="fa fa-shopping-cart"></i> With icon</button>
            <button type="button" class="w-10 bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 rounded mb-2"><i class="fa fa-user"></i></button>
            <br><br><br>
            <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-1 px-2 text-sm rounded mb-2">Small</button>
            <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded mb-2">Normal</button>
            <button type="button" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-3 px-6 text-2xl rounded mb-2">Large</button>
          </div>
        </section>

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="forms">
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
                <label class="block"><input type="checkbox" class="form-checkbox text-teal-500" checked><span class="ml-2">Checked</span></label><br>
                <label class="block"><input type="checkbox" class="form-checkbox text-teal-500" unchecked><span class="ml-2">Unchecked</span></label><br>
                <label class="block"><input type="checkbox" class="form-checkbox text-teal-500" checked disabled><span class="ml-2">Disabled checked</span></label><br>
                <label class="block"><input type="checkbox" class="form-checkbox text-teal-500" unchecked disabled><span class="ml-2">Disabled unchecked</span></label><br>
              </div>
              <div class="w-full md:w1/3 p-4 mb-6">
                <h3 class="text-sm font-bold mb-4">CUSTOM RADIOS</h3>
                <label class="block"><input type="radio" class="form-radio text-teal-500" name="myselection1" value="" checked><span class="ml-2">Checked</span></label><br>
                <label class="block"><input type="radio" class="form-radio text-teal-500" name="myselection1" value=""><span class="ml-2">Unchecked</span></label><br>
                <label class="block"><input type="radio" class="form-radio text-teal-500" name="myselection2" value="" checked disabled><span class="ml-2">Disabled checked</span></label><br>
                <label class="block"><input type="radio" class="form-radio text-teal-500" name="myselection2" value="" disabled><span class="ml-2">Disabled unchecked</span></label><br>
              </div>
            </div>
          </div>
        </section>

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="badges">
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

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="cards">
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

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="images">
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

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="navbars">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Navbars</h1>
            <h3 class="text-sm font-bold mb-4">BASIC NAVBAR</h3>
            <nav class="px-4 py-3  border flex justify-between items-center flex-wrap lg:flex-no-wrap">
              <a class="text-2xl mr-3">Brand</a>
              <a data-target="navbars-1" onclick="toggleTarget(event)" href="#"  class="text-2xl mr-2 lg:hidden"><i class="fas fa-bars"></i></a>
              <div data-selector="navbars" class="lg:block w-full">
                <div class="lg:flex lg:justify-between">
                  <ul class="text-xl lg:inline-block">
                    <li class="lg:inline-block"><a href="#" class="py-3 inline-block lg:px-4">Home</a></li>
                    <li class="lg:inline-block"><a href="#" class="py-3 inline-block lg:px-4">Link</a></li>
                    <li class="lg:inline-block"><a data-target="navbars-2" onclick="toggleTarget(event)" href="#" class="py-3 inline-block lg:px-4">DropDown <i class="fas fa-sort-down"></i></a>
                      <div class="" data-selector="navbars-2" style="display: none;">
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

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="icontext">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Icon with text</h1>

            <h3 class="text-sm font-bold mb-4">BASIC</h3>
            <div class="container md:flex rounded border pt-6">
              <div class="w-full lg:w-1/3 p-4 mb-6">

                <span class="h-12 w-12 inline-block bg-gray-300 text-gray-700 p-3 text-center mr-1">
                  <i class="fa fa-user"></i>
                </span> Some more short text

              </div>
              <div class="w-full lg:w-1/3 p-4 mb-6">
                <span class="h-12 w-12 inline-block bg-teal-500 text-white p-3 text-center mr-1 rounded-full">
                  <i class="fa fa-user"></i>
                </span> Some more short text
              </div>
              <div class="w-full lg:w-1/3 p-4 mb-6">
                <span class="">
                  <img class="h-12 w-12 rounded-full border inline-block mr-1 -mt-2" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/avatars/avatar2.jpg" alt="">
                  Some more short text
                </span>

              </div>
            </div>

            <br><br>
            <h3 class="text-sm font-bold mb-4">ALIGNED TOP</h3>
            <div class="container md:flex rounded border pt-6">
              <div class="w-full lg:w-1/3 p-4 mb-6">
                <span class="h-12 w-12 inline-block bg-teal-500 text-white p-3 text-center mr-2 rounded-full float-left">
                  <i class="fa fa-user"></i>
                </span>
                <h6 class="font-bold">Mr. John Doe</h6>
                <p class="text-gray-500 text-sm">Some description like Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="w-full lg:w-1/3 p-4 mb-6">
                <span class="h-12 w-12 inline-block text-teal-500 border border-teal-500 p-3 text-center mr-2 rounded-full float-left">
                  <i class="fa fa-user"></i>
                </span>
                <h6 class="font-bold">Mr. John Doe</h6>
                <p class="text-gray-500 text-sm">Some description like Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="w-full lg:w-1/3 p-4 mb-6">
                <span class="">
                  <img class="h-12 w-12 rounded-full border inline-block mr-2 float-left" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/avatars/avatar2.jpg" alt="">
                  <h6 class="font-bold">Mr. John Doe</h6>
                  <p class="text-gray-500 text-sm">Some description like Lorem ipsum dolor sit amet.</p>
                </span>
              </div>
            </div>
            <br><br>
            <h3 class="text-sm font-bold mb-4">WITH NOTIFICATION</h3>
            <div class="rounded border p-6">
              <span class="mr-3 mb-2 block lg:inline-block">
                <span class="h-12 w-12 inline-block bg-teal-500 text-white p-3 text-center mr-1 rounded-full relative">
                  <i class="fa fa-user"></i>
                  <span class="px-2 leading-normal bg-red-500 absolute top-0 right-0 rounded-full text-white -m-1 text-sm leading-nose">2</span>
                </span> Some more short text
              </span>

              <span class="mr-3 mb-2 block lg:inline-block">
                <span class="h-12 w-12 inline-block text-teal-500 border border-teal-500 p-3 text-center mr-1 rounded-full relative">
                  <i class="fa fa-envelope text-primary"></i>
                  <span class="px-2 leading-normal bg-red-500 absolute top-0 right-0 rounded-full text-white -m-1 text-sm leading-nose">3</span>
                </span> New messages
              </span>

              <span class="mr-3 mb-2 block lg:inline-block">
                <span class="h-12 w-12 inline-block bg-gray-300 text-teal-500 p-3 text-center mr-1 rounded-full relative">
                  <i class="fa fa-shopping-cart text-primary"></i>
                  <span class="px-2 leading-normal bg-red-500 absolute top-0 right-0 rounded-full text-white -m-1 text-sm leading-nose">1</span>
                </span> Shopping cart
              </span>

              <span class="">
                <span class="relative">
                  <img class="h-12 w-12 rounded-full border inline-block mr-1 -mt-2" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/avatars/avatar2.jpg" alt="">
                  <span class="px-2 leading-normal bg-red-500 absolute top-0 right-0 rounded-full text-white -mt-4 text-sm leading-nose">4</span>
                </span>
                Hi, Username
              </span>

            </div>

            <br><br>
            <h3 class="text-sm font-bold mb-4">ALIGNED TOP</h3>
            <div class="rounded border p-6">

              <span class="mr-8">
                <span class="relative mr-2 text-teal-500">
                  <i class="fa fa-bell"></i>
                  <span class="px-2 leading-normal bg-red-500 absolute top-0 right-0 rounded-full text-white -mt-4 -mr-3 text-sm leading-nose">0</span>
                </span>
                <a data-target="icontext-1" onclick="toggleTarget(event)"  href="#">Some notification </a>
                <i class="text-teal-500 fas fa-caret-down"></i>
                <div class="" data-selector="icontext-1" style="display: none;">
                  <div class="py-1 absolute border rounded bg-white">
                    <a class="p-2 block hover:bg-gray-300" href="#">Some notification text</a>
                    <a class="p-2 block hover:bg-gray-300" href="#">Another notification</a>
                    <a class="p-2 block hover:bg-gray-300" href="#">Something else here</a>
                  </div>
                </div>
              </span>

            </div>
          </div>
        </section>

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="product_basic">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Product grid</h1>

            <div class="container sm:flex sm:flex-wrap">

              <div class="w-full sm:w-1/2 xl:w-1/4">
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

              <div class="w-full sm:w-1/2 xl:w-1/4">
                <div class="m-2 border rounded relative hover:shadow-lg">
                  <div class="text-center border-b relative">
                    <div class="bottom-0 text-center w-full bg-black opacity-50 text-white py-2 absolute">Quick View</div>
                    <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg">
                    <span class="absolute top-0 right-0 px-3 py-2 text-gray-400 hover:text-teal-500 cursor-pointer"><i class="fa fa-heart"></i></span>

                  </div>
                  <div class="p-3">
                    <a class="block" href="#">Leather Sleeve - Macbook 13’’</a>
                    <div class="font-bold mt-2">$3753.00</div>
                  </div>
                </div>
              </div>

              <div class="w-full sm:w-1/2 xl:w-1/4">
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

              <div class="w-full sm:w-1/2 xl:w-1/4">
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

              <div class="w-full sm:w-1/2 xl:w-1/4">
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

              <div class="w-full sm:w-1/2 xl:w-1/4">
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

              <div class="w-full sm:w-1/2 xl:w-1/4">
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

              <div class="w-full sm:w-1/2 xl:w-1/4">
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

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="product_list">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Product list</h1>

            <div class="max-w-4xl p-6 border rounded lg:flex">
              <div class="w-full lg:w-1/3">
                <a href="#">
                  <img class=" max-w-xs  lg:max-w-full mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/11.jpg">
                </a>
              </div>
              <div class="w-full lg:w-2/3 relative lg:ml-8">
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
            <div class="max-w-4xl p-6 border rounded lg:flex">
              <div class="w-full lg:w-1/4">
                <a href="#">
                  <img class="max-w-xs  lg:max-w-full mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/11.jpg">
                </a>
              </div>
              <div class="w-full lg:w-2/4 lg:mx-8">
                <a class="text-xl font-bold block mb-2 mt-6">Apple Watch Series 4 - Space Gray</a>
                <div class="mb-4">
                  <span class="text-orange-400 mr-3"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star text-gray-500"></i></span>
                  <span class="text-sm text-gray-600 mr-3">132 reviews</span>
                  <span class="text-sm text-teal-500 mr-3"><i class="fa fa-clipboard-check"></i> orders</span>
                </div>
                <p>The largest Apple Watch display yet. Electrical heart sensor. Re-engineered Digital Crown with haptic feedback. Entirely familiar, yet completely redesigned, Apple Watch Series 4 resets the standard for what a watch can be.</p>
              </div>
              <div class="w-full lg:w-1/4">
                <div class="mt-2">
                  <span class="text-xl font-bold">$56</span> <del class="ml-2 text-gray-600">$98</del>
                  <p class="text-sm text-teal-500">Free shipping</p>
                  <br>
                  <p>
                    <a href="#" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Buy now</a>
                    <a href+"#" class="text-teal-700 hover:bg-teal-700 border border-teal-700 hover:text-white font-bold py-2 px-4 rounded mb-4 inline-block">Details</a>
                  </p>
                  <a href="#" class="text-teal-500 text-sm hover:text-teal-700"><i class="fa fa-heart"></i> Add to wishlist</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="product_detail">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Product detail</h1>
            <br><br>
            <div class="border overflow-hidden rounded lg:flex">
                <div class="w-full lg:w-1/2">
                  <div class="p-8">
                    <div class="">
                      <img class="mx-auto lg:max-w-full" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/12.jpg" alt="">
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
                      <span class="w-40 font-bold text-xl inline-block">Model#</span> Odsy-1000<br>
                      <span class="w-40 font-bold text-xl inline-block">Color</span> Brown<br>
                      <span class="w-40 font-bold text-xl inline-block">Delivery</span> Russia, USA, and Europe<br>
                    </div>
                    <div class="xl:flex">
                      <div class="w-full xl:w-1/3">
                        Quantity<br><br>
                        <span class="mr-6">
                          <span class=""><button class="p-2 w-10 inline-block border rounded-l" type="button"> + </button></span>
                          <input class="p-2 w-10 text-center border-t border-b -mx-1 " type="text" value="1">
                          <span class=""><button class="p-2 w-10 inline-block border rounded-r" type="button"> − </button></span>
                        </span>
                      </div>
                      <div class="w-full xl:w-2/3 mt-3 xl:mt-0">
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

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="filters">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Filters</h1>
            <div class="p-2 md:p-4 border rounded flex justify-between">
              <div class="">
                Category
        				<select class="ml-2 p-2 border rounded">
        					<option>Clothes</option>
        					<option>Electronics</option>
        					<option>Home Items</option>
        					<option>Foods</option>
        				</select>
              </div>
              <div class="inline-flex">
          			  <button type="button" class="py-2 px-3 font-bold bg-teal-500 text-white border border-teal-500 rounded-l">Featured</button>
          			  <button type="button" class="py-2 px-3 font-bold border border-teal-500 text-teal-500 hover:text-white hover:bg-teal-500 ">New Items</button>
          			  <button type="button" class="py-2 px-3 font-bold border border-teal-500 text-teal-500 rounded-r -ml-px hover:text-white hover:bg-teal-500">On Sale</button>
              </div>
            </div>
            <br><br>

            <div class="lg:flex lg:flex-wrap">
              <div class="w-full lg:w-1/3">
                <div class="m-2 p-4 border rounded">
                  <h3 class="text-lg font-bold mb-4">Product type</h3>
                  <ul>
                    <li class="mb-2"><a href="#">People<span class="float-right px-1 bg-gray-300 rounded text-sm">120</span></a></li>
                    <li class="mb-2"><a href="#">Watches<span class="float-right px-1 bg-gray-300 rounded text-sm">45</span></a></li>
                    <li class="mb-2"><a href="#">Cinema<span class="float-right px-1 bg-gray-300 rounded text-sm">63</span></a></li>
                    <li class="mb-2"><a href="#">Clothes<span class="float-right px-1 bg-gray-300 rounded text-sm">16</span></a></li>
                    <li class="mb-2"><a href="#">Home items<span class="float-right px-1 bg-gray-300 rounded text-sm">74</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="m-2 p-3 border rounded">
                  <h3 class="text-lg font-bold  mb-4">Rating</h3>
                  <label class="block mb-2">
                    <input type="checkbox" class="form-checkbox text-teal-500" checked="">
                    <span class="ml-2 text-orange-500">
                      <i class="fa fa-star mr-1"></i><i class="fa fa-star mr-1"></i><i class="fa fa-star mr-1"></i><i class="fa fa-star mr-1"></i><i class="fa fa-star mr-1"></i>
                    </span>
                  </label>
                  <label class="block mb-2">
                    <input type="checkbox" class="form-checkbox text-teal-500" checked="">
                    <span class="ml-2 text-orange-500">
                      <i class="fa fa-star mr-1"></i><i class="fa fa-star mr-1"></i><i class="fa fa-star mr-1"></i><i class="fa fa-star mr-1"></i>
                    </span>
                  </label>
                  <label class="block mb-2">
                  <input type="checkbox" class="form-checkbox text-teal-500" unchecked>
                    <span class="ml-2 text-orange-500">
                      <i class="fa fa-star mr-1"></i><i class="fa fa-star mr-1"></i><i class="fa fa-star mr-1"></i>
                    </span>
                  </label>
                  <label class="block mb-2">
                    <input type="checkbox" class="form-checkbox text-teal-500" checked="">
                    <span class="ml-2 text-orange-500">
                      <i class="fa fa-star mr-1"></i><i class="fa fa-star mr-1"></i>
                    </span>
                  </label>
                  <label class="block mb-2">
                    <input type="checkbox" class="form-checkbox text-teal-500" unchecked>
                    <span class="ml-2 text-orange-500">
                      <i class="fa fa-star mr-1"></i><i class="fa fa-star mr-1"></i>
                    </span>
                  </label>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="m-2 p-3 border rounded">
                  <h3 class="text-lg font-bold  mb-4">Brands</h3>
                  <label class="block  mb-2"><input type="checkbox" class="form-checkbox text-teal-500" checked=""><span class="ml-2">Mercedes</span></label>
                  <label class="block  mb-2"><input type="checkbox" class="form-checkbox text-teal-500" unchecked=""><span class="ml-2">Toyota</span></label>
                  <label class="block  mb-2"><input type="checkbox" class="form-checkbox text-teal-500" checked=""><span class="ml-2">Mitsubishi</span></label>
                  <label class="block  mb-2"><input type="checkbox" class="form-checkbox text-teal-500" checked=""><span class="ml-2">Nissan</span></label>
                  <label class="block  mb-2"><input type="checkbox" class="form-checkbox text-teal-500" unchecked=""><span class="ml-2">Vinfast</span></label>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="m-2 p-3 border rounded">
                  <h3 class="text-lg font-bold  mb-4">Brands count</h3>
                  <label class="block  mb-2">
                    <input type="checkbox" class="form-checkbox text-teal-500" checked="">
                    <span class="ml-2">
                      Mercedes<span class="float-right px-1 bg-gray-300 rounded text-sm">91</span>
                    </span>
                  </label>
                  <label class="block  mb-2">
                    <input type="checkbox" class="form-checkbox text-teal-500" unchecked="">
                    <span class="ml-2">
                      Toyota<span class="float-right px-1 bg-gray-300 rounded text-sm">35</span>
                    </span>
                  </label>
                  <label class="block  mb-2">
                    <input type="checkbox" class="form-checkbox text-teal-500" unchecked="">
                    <span class="ml-2">
                      Mitsubishi<span class="float-right px-1 bg-gray-300 rounded text-sm">72</span>
                    </span>
                  </label>
                  <label class="block  mb-2">
                    <input type="checkbox" class="form-checkbox text-teal-500" checked="">
                    <span class="ml-2">
                      Nissan<span class="float-right px-1 bg-gray-300 rounded text-sm">53</span>
                    </span>
                  </label>
                  <label class="block  mb-2">
                    <input type="checkbox" class="form-checkbox text-teal-500" checked="">
                    <span class="ml-2">
                      Vinfast<span class="float-right px-1 bg-gray-300 rounded text-sm">62</span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="m-2 p-3 border rounded">
                  <h3 class="text-lg font-bold  mb-4">Colors</h3>
                  <div class="flex flex-wrap">
                    <label class="w-1/2 mb-2"><input type="checkbox" class="form-checkbox text-teal-500" checked=""><span class="ml-2">Red</span></label>
                    <label class="w-1/2 mb-2"><input type="checkbox" class="form-checkbox text-teal-500" unchecked=""><span class="ml-2">Green</span></label>
                    <label class="w-1/2 mb-2"><input type="checkbox" class="form-checkbox text-teal-500" unchecked=""><span class="ml-2">White</span></label>
                    <label class="w-1/2 mb-2"><input type="checkbox" class="form-checkbox text-teal-500" checked=""><span class="ml-2">Yellow</span></label>
                    <label class="w-1/2 mb-2"><input type="checkbox" class="form-checkbox text-teal-500" checked=""><span class="ml-2">Blue</span></label>
                    <label class="w-1/2 mb-2"><input type="checkbox" class="form-checkbox text-teal-500" checked=""><span class="ml-2">Orange</span></label>
                    <label class="w-1/2 mb-2"><input type="checkbox" class="form-checkbox text-teal-500" unchecked=""><span class="ml-2">Brown</span></label>
                    <label class="w-1/2 mb-2"><input type="checkbox" class="form-checkbox text-teal-500" checked=""><span class="ml-2">Violet</span></label>
                    <label class="w-1/2 mb-2"><input type="checkbox" class="form-checkbox text-teal-500" unchecked=""><span class="ml-2">Black</span></label>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="m-2 p-3 border rounded">
                  <h3 class="text-lg font-bold  mb-4">Price range</h3>
                  <input type="range" class="w-full" min="0" max="100" name="">
                  <div class="flex py-2">
                    <div class="w-1/2 pr-1">
                      <label>Min</label>
                      <input class="border rounded p-2 w-full" placeholder="$0" type="number">
                    </div>
                    <div class="w-1/2 pl-1">
                      <label class="text-right block">Max</label>
                      <input class="border rounded p-2 w-full" placeholder="$1,0000" type="number">
                    </div>
                  </div>
                  <button class="text-center w-full p-2 text-white bg-teal-500 rounded mt-2 mb-1 hover:bg-teal-600">Apply</button>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="m-2 p-3 border rounded">
                  <h3 class="text-lg font-bold  mb-4">Buying</h3>
                  <label class="block mb-2"><input type="radio" class="form-radio text-teal-500" name="buying" value="" checked=""><span class="ml-2">All listing</span></label>
                  <label class="block mb-2"><input type="radio" class="form-radio text-teal-500" name="buying" value=""><span class="ml-2">Auctions</span></label>
                  <label class="block mb-2"><input type="radio" class="form-radio text-teal-500" name="buying" value=""><span class="ml-2">Buy now</span></label>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="m-2 p-3 border rounded">
                  <h3 class="text-lg font-bold  mb-4">Sizes</h3>
                  <label class="inline-block mr-3"><input type="checkbox" class="form-checkbox text-teal-500" checked=""><span class="ml-2">Yellow</span></label>
                  <label class="inline-block mr-3"><input type="checkbox" class="form-checkbox text-teal-500" checked=""><span class="ml-2">Blue</span></label>
                  <label class="inline-block mr-3"><input type="checkbox" class="form-checkbox text-teal-500" checked=""><span class="ml-2">Orange</span></label>
                  <label class="inline-block mr-3"><input type="checkbox" class="form-checkbox text-teal-500" unchecked=""><span class="ml-2">Brown</span></label>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="m-2 p-3 border rounded">
                  <h3 class="text-lg font-bold  mb-4">Search</h3>
                  <div class="input-group inline-flex">
              			<input type="text" placeholder="Keyword" class="px-4 py-2 border rounded-l" name="">
              			<span class="px-4 py-2  border border-teal-500 bg-teal-500 text-white rounded-r"> <button> <i class="fa fa-search"></i></button></span>
              		</div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="forms">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Forms</h1>
            <div class="lg:flex lg:flex-wrap">
              <div class="w-full lg:w-1/2">
                <div class="m-3 p-3 border rounded">
                  <h3 class="text-lg font-bold  mb-4">Sign up</h3>
                  <div class="flex mb-4">
                    <div class="px-1 w-1/2">
                      <label>First name</label>
                      <input type="text" class="w-full border rounded py-2 px-3 mt-1" placeholder="">
                    </div>
                    <div class="px-1 w-1/2">
                      <label>Last name</label>
                      <input type="text" class="w-full border rounded py-2 px-3 mt-1" placeholder="">
                    </div>
                  </div>
                  <div class="mb-4 px-1">
                    <label>Email</label>
                    <input type="text" class="w-full border rounded py-2 px-3 mt-1" placeholder="">
                    <p class="text-sm text-gray-500">We'll never share your email with anyone else.</p>
                  </div>
                  <div class="flex mb-4">
                    <div class="px-1 w-1/2">
                      <label>Create password</label>
                      <input type="password" class="w-full border rounded py-2 px-3 mt-1" placeholder="">
                    </div>
                    <div class="px-1 w-1/2">
                      <label>Repeat password</label>
                      <input type="password" class="w-full border rounded py-2 px-3 mt-1" placeholder="">
                    </div>
                  </div>
                  <div class=" mx-1">
                    <button type="submit" class="w-full text-center p-2 bg-teal-500 text-white font-bold mt-2 mb-4  rounded hover:bg-teal-600"> Register  </button>
                  </div>
                  <div class="border-t text-center p-2">
                    Have an account? <a class="text-teal-500" href="#">Log In</a>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-1/2">
                <div class="m-3 p-3 border rounded">
                  <h3 class="text-lg font-bold  mb-4">Profile</h3>

                  <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/avatars/avatar1.jpg" class="rounded-full border w-20 h-20 mb-4" alt="">

                  <div class="flex mb-4">
                    <div class="px-1 w-1/2">
                      <label>Name</label>
                      <input type="text" class="w-full border rounded py-2 px-3 mt-1" placeholder="" value="Komol">
                    </div>
                    <div class="px-1 w-1/2">
                      <label>Email</label>
                      <input type="text" class="w-full border rounded py-2 px-3 mt-1" placeholder="" value="Kuchkarov">
                    </div>
                  </div>

                  <div class="flex mb-4">
                    <div class="px-1 w-1/2">
                      <label>Country</label>
                      <select class="w-full border rounded py-2 px-3 mt-1">
              			    <option> Choose...</option>
              			      <option>Uzbekistan</option>
              			      <option>Russia</option>
              			      <option selected="">United States</option>
              			      <option>India</option>
              			      <option>Afganistan</option>
              			  </select>
                    </div>
                    <div class="px-1 w-1/2">
                      <label>City</label>
                      <input type="text" class="w-full border rounded py-2 px-3 mt-1" placeholder="">
                    </div>
                  </div>

                  <div class="flex mb-4">
                    <div class="px-1 w-1/2">
                      <label>Zip</label>
                      <input type="text" class="w-full border rounded py-2 px-3 mt-1" placeholder="" value="123009">
                    </div>
                    <div class="px-1 w-1/2">
                      <label>Phone</label>
                      <input type="text" class="w-full border rounded py-2 px-3 mt-1" placeholder="" value="+123456789">
                    </div>
                  </div>
                  <div class=" mx-1">
                    <button type="submit" class="w-full text-center p-2 bg-teal-500 text-white font-bold mt-2 rounded hover:bg-teal-600"> Register  </button>
                  </div>

                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="m-3 p-4 border rounded">
                  <h3 class="text-lg font-bold  mb-4">Sign in</h3>
                  <a href="#" class="block mb-4 bg-blue-800 hover:bg-blue-900 text-white p-2 text-center font-bold rounded"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</a>
                  <a href="#" class="block mb-4 bg-red-500 hover:bg-red-600 text-white p-2 text-center font-bold rounded"><i class="fab fa-google mr-2"></i> Sign in with Facebook</a>

                  <label>Email</label>
                  <input type="text" class="w-full border rounded py-2 px-3 mt-1 mb-4" placeholder="" placehoder="tailwin@css">
                  <label>Password</label><a class="float-right text-teal-500" href="#">Forgot</a>
                  <input type="password" class="w-full border rounded py-2 px-3 mt-1 mb-4" placeholder="" placehoder="******">
                  <label class="mb-4"><input type="checkbox" class="form-checkbox text-teal-500" checked=""><span class="ml-2">Remember</span></label>
                  <button type="submit" class="w-full text-center p-2 bg-teal-500 text-white font-bold mt-2 mb-2 rounded hover:bg-teal-600"> Login  </button>


                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="m-3 p-4 border rounded">
                  <h3 class="text-lg font-bold  mb-4">Feedback</h3>
                  <label>Email</label>
                  <input type="text" class="w-full border rounded py-2 px-3 mt-1 mb-4" placeholder="" placehoder="tailwin@css">
                  <label>What is message about?</label>
                  <select class="w-full border rounded py-2 px-3 mt-1 mb-4">
            				<option>Select</option>
            				<option>Technical issue</option>
            				<option>Money refund</option>
            				<option>Recommendation</option>
            			</select>
                  <label>What is message about?</label>
                  <textarea class="w-full border rounded py-2 px-3 mt-1 mb-4" rows="5"></textarea>
                  <button type="submit" class="w-full text-center p-2 bg-teal-500 text-white font-bold mt-2 mb-2 rounded hover:bg-teal-600"> Send  </button>
                </div>
              </div>
              <div class="w-full lg:w-1/3">
                <div class="m-2 p-4 border rounded">
                  <h3 class="text-lg font-bold  mb-4">Payment</h3>
                  <label>Name on card</label>
                  <input type="text" class="w-full border rounded py-2 px-3 mt-1 mb-4" placeholder="" placehoder="Ex. John Smith">
                  <label>Card number</label>
                  <div class="mb-4 flex border rounded relative">
                    <input type="text" class="py-2 px-3 rounded-l w-full" name="cardNumber" placeholder="">
                    <div class="bg-gray-400 py-2 px-3 absolute right-0">
                      <i class="fab fa-cc-visa"></i>
                      <i class="fab fa-cc-amex"></i>
                      <i class="fab fa-cc-mastercard"></i>
                    </div>
                  </div>
                  <div class="sm:flex">
                    <div class="w-full sm:w-2/3">
                      <label class="block">Expiration</label>
                      <select class="mb-4 border rounded py-2 px-3 w-20">
              				  <option>MM</option>
              				  <option>01 - Janiary</option>
              				  <option>02 - February</option>
              				  <option>03 - February</option>
              				</select>
                      <span class="mx-1">/</span>
                      <select class="mb-4 border rounded py-2 px-3 w-20">
              				  <option>YY</option>
              				  <option>2018</option>
              				  <option>2019</option>
              				</select>
                    </div>
                    <div class="w-full sm:w-1/3">
                      <label class="block">CVV</label>
                      <input class="mb-4 border rounded py-2 px-3 lg:w-20 w-full" required="" type="text">
                    </div>
                  </div>
                  <div class="mb-4 bg-green-200 border border-green-300 text-green-600 px-3 py-2 rounded">
                    <i class="fa fa-lock"></i> Some secureity information
                  </div>
                  <button type="submit" class="w-full text-center p-2 bg-teal-500 text-white font-bold mt-2 mb-2 rounded hover:bg-teal-600">  Confirm    </button>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="shopping_cart">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Shopping cart</h1>
            <div class="lg:flex lg:flex-wrap">
              <div class="w-full xl:w-3/4">
                <div class="m-3 p-4 border rounded">
                  <table class="table-fixed w-full">
                    <tr>
                      <th class="w-1/2 lg:w-5/12 text-left p-2 text-sm text-gray-600">PRODUCT</th>
                      <th class="w-1/4 lg:w-2/12 text-left p-2 text-sm text-gray-600">QUANTITY</th>
                      <th class="w-1/4 lg:w-2/12 text-left p-2 text-sm text-gray-600">PRICE</th>
                      <th class="w-0 lg:w-3/12 text-left p-2 text-sm text-gray-600"></th>
                    </tr>
                    <tbody>
                      <tr>
                        <td class="p-2">
                          <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="" class="hidden lg:block w-16 w-16 float-left">
                          <div class="pl-0 md:pl-20">
                            <a href="#" class="block mb-2">Camera Canon EOS M50 Kit</a>
                            <p class="text-sm text-gray-500">Matrix: 25 Mpx <br> Brand: Canon</p>
                          </div>
                        </td>
                        <td class="p-2">
                          <select class="w-20 border rounded py-2 px-3">
                    				<option>1</option>
                    				<option>2</option>
                    				<option>3</option>
                    				<option>4</option>
                    			</select>
                        </td>
                        <td class="p-2">
                          <div class="text-xl font-bold">$1156.00</div>
                          <p class="font-sm text-gray-500">$315.20 each</p>
                        </td>
                        <td class="text-center p-2 hidden lg:table-cell">
                          <a href="#" class="py-2 px-3 rounded border font-bold"><i class="fa fa-heart"></i></a>
                          <a href="#" class="py-2 px-3 rounded border mr-2 font-bold">Remove</a>
                        </td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td class="p-2">
                          <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg" alt="" class="hidden lg:block w-16 w-16 float-left">
                          <div class="pl-0 md:pl-20">
                            <a href="#" class="block mb-2">ADATA Premier ONE microSDXC</a>
                            <p class="text-sm text-gray-500">Size: 256 GB <br> Brand: ADATA</p>
                          </div>
                        </td>
                        <td class="p-2">
                          <select class="w-20 border rounded py-2 px-3">
                    				<option>1</option>
                    				<option>2</option>
                    				<option>3</option>
                    				<option>4</option>
                    			</select>
                        </td>
                        <td class="p-2">
                          <div class="text-xl font-bold">$149.97</div>
                          <p class="font-sm text-gray-500">$75.00 each</p>
                        </td>
                        <td class="text-center p-2 hidden lg:table-cell">
                          <a href="#" class="py-2 px-3 rounded border font-bold"><i class="fa fa-heart"></i></a>
                          <a href="#" class="py-2 px-3 rounded border mr-2 font-bold">Remove</a>
                        </td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td class="p-2">
                          <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/3.jpg" alt="" class="hidden lg:block w-16 w-16 float-left">
                          <div class="pl-0 md:pl-20">
                            <a href="#" class="block mb-2">Gamepad Sony DualShock 4</a>
                            <p class="text-sm text-gray-500">Version: CUH-ZCT2E <br> Brand: Sony</p>
                          </div>
                        </td>
                        <td class="p-2">
                          <select class="w-20 border rounded py-2 px-3">
                    				<option>1</option>
                    				<option>2</option>
                    				<option>3</option>
                    				<option>4</option>
                    			</select>
                        </td>
                        <td class="p-2">
                          <div class="text-xl font-bold">$98.00</div>
                          <p class="font-sm text-gray-500">$578.00 each</p>
                        </td>
                        <td class="text-center p-2 hidden lg:table-cell">
                          <a href="#" class="py-2 px-3 rounded border font-bold"><i class="fa fa-heart"></i></a>
                          <a href="#" class="py-2 px-3 rounded border mr-2 font-bold">Remove</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="border-t pt-4  pl-4">
                    <i class="icon text-success fa fa-truck text-teal-500"></i> Free Delivery within 1-2 weeks
                  </div>
                </div>
              </div>
              <div class="w-full xl:w-1/4">
                <div class="m-3 p-4 border rounded">
                  <label>Have coupon?</label>
                  <div class="relative mt-1">
                    <input type="text" class="py-2 px-3 border  rounded-l" name="" placeholder="Coupon code">
                    <button class="py-2 px-3 font-bold text-white bg-teal-500 absolute right-0 border border-teal-500 rounded-r">Apply</button>
                  </div>
                </div>
                <div class="m-3 p-4 border rounded">
                  <p class="my-1">Total price:<span class="float-right">$69.97</span></p>
                  <p class="my-1">Discount:<span class="float-right text-red-500">- $10.00</span></p>
                  <p class="my-1">Total:<span class="float-right font-bold">$59.97</span></p>
                  <hr class="my-4">
                  <div class="text-center">
                    <img class="mx-auto max-w-full w-40" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/misc/payments.png" alt="">
                    <a href="#" class="block p-2 bg-teal-500 text-white font-bold mt-4 rounded hover:bg-teal-600"> Make Purchase </a>
                    <a href="#" class="block p-2 border hover:border-gray-500 font-bold mt-2 rounded"> Continue Shopping</a>
                  </div>
                </div>
              </div>
            </div>
            <br><br>
            <div class="lg:flex lg:flex-wrap">
              <div class="w-full xl:w-3/4">
                <div class="m-3 p-4 border rounded">
                  <h4 class="text-xl font-bold">Review cart</h4>
                  <div class="p-4 border-b xl:flex xl:flex-wrap">
                    <div class="w-full xl:w-1/2 mb-4">
                      <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" class="w-12 h-12 border float-left">
                      <div class="pl-16">
                        <p>Name of the product goes here or title</p>
                        <span>2x $290 = Total: $430</span>
                      </div>
                    </div>
                    <div class="w-full xl:w-1/2 mb-4">
                      <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg" class="w-12 h-12 border float-left">
                      <div class="pl-16">
                        <p>Name of the product goes here or title</p>
                        <span>2x $290 = Total: $430</span>
                      </div>
                    </div>
                    <div class="w-full xl:w-1/2 mb-4">
                      <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/3.jpg" class="w-12 h-12 border float-left">
                      <div class="pl-16">
                        <p>Name of the product goes here or title</p>
                        <span>2x $290 = Total: $430</span>
                      </div>
                    </div>
                    <div class="w-full xl:w-1/2 mb-4">
                      <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/4.jpg" class="w-12 h-12 border float-left">
                      <div class="pl-16">
                        <p>Name of the product goes here or title</p>
                        <span>2x $290 = Total: $430</span>
                      </div>
                    </div>
                  </div>
                  <div class="p-4 md:flex md:flex-wrap font-bold">
                    <div class="w-full md:w-10/12">
                      Subtotal: <span class="float-right text-gray-600">2 items</span>
                    </div>
                    <div class="w-full md:w-2/12 text-right text-black mb-3">
                      $1,568
                    </div>
                    <div class="w-full md:w-10/12">
                      Discount: <span class="float-right text-gray-600">10% offer</span>
                    </div>
                    <div class="w-full md:w-2/12 text-right text-red-600 mb-3">
                      $29
                    </div>
                    <div class="w-full md:w-10/12">
                      Delivery charge: <span class="float-right text-gray-600">Express delivery</span>
                    </div>
                    <div class="w-full md:w-2/12 text-right text-black mb-3">
                      $120
                    </div>
                    <div class="w-full md:w-10/12">
                      Tax: <span class="float-right text-gray-600">5%</span>
                    </div>
                    <div class="w-full md:w-2/12 text-right text-green-600 mb-3">
                      $7
                    </div>
                    <div class="w-full">
                      Total: <span class="float-right text-black text-xl">$1,650</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full xl:w-1/4">
                <div class="m-3 p-4 border rounded">
                  Dropdown sample
                  <a data-target="shopping_cart-1" onclick="toggleTarget(event)" href="#" class="text-center block p-2 bg-teal-500 text-white font-bold mt-4 rounded hover:bg-teal-600">Show cart <i class="fas fa-caret-down"></i></a>
                  <div data-selector="shopping_cart-1" style="display: none;">
                    <div class="mt-2 absolute p-3 bg-white border rounded max-w-xs">
                      <div class="mb-3 overflow-hidden">
                        <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" class="w-20 h-20 p-2 border float-left">
                        <div class="pl-24">
                          Some other item name is here
                          <p class="font-bold">$250<span class="float-right text-teal-500"><i class="fa fa-trash"></i></span></p>
                        </div>
                      </div>
                      <div class="mb-3 overflow-hidden">
                        <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg" class="w-20 h-20 p-2 border float-left">
                        <div class="pl-24">
                          Some other item name is here
                          <p class="font-bold">$250<span class="float-right text-teal-500"><i class="fa fa-trash"></i></span></p>
                        </div>
                      </div>
                      <div class="mb-3 overflow-hidden">
                        <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/3.jpg" class="w-20 h-20 p-2 border float-left">
                        <div class="pl-24">
                          Some other item name is here
                          <p class="font-bold">$250<span class="float-right text-teal-500"><i class="fa fa-trash"></i></span></p>
                        </div>
                      </div>
                      <div class=" border-t py-4  text-center">Subtotal: <span class="font-bold">$1200</span></div>
                      <a href="#" class="block p-2 bg-teal-500 text-center text-white font-bold rounded hover:bg-teal-600"> CheckOut </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="features">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Features</h1>
            <div class="lg:flex lg:flex-wrap">

              <div class="w-full lg:w-1/2 xl:w-1/4">
                <div class="m-3 p-6 border rounded text-center">
                  <span class="w-16 h-16 rounded-full bg-teal-600 inline-block text-white text-3xl p-2">
                    <i class="fa fa-user"></i>
                  </span>
                  <h3 class="text-xl font-bold my-4 text-black">
                    Creative Strategy & solution
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
              </div>

              <div class="w-full lg:w-1/2 xl:w-1/4">
                <div class="m-3 p-6 border rounded text-center">
                  <span class="w-16 h-16 rounded-full bg-red-600 inline-block text-white text-3xl p-2">
                    <i class="fa fa-truck"></i>
                  </span>
                  <h3 class="text-xl font-bold my-4 text-black">
                    Creative Strategy & solution
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
              </div>

              <div class="w-full lg:w-1/2 xl:w-1/4">
                <div class="m-3 p-6 border rounded text-center">
                  <span class="w-16 h-16 rounded-full bg-green-600 inline-block text-white text-3xl p-2">
                    <i class="fa fa-star"></i>
                  </span>
                  <h3 class="text-xl font-bold my-4 text-black">
                    Creative Strategy & solution
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
              </div>

              <div class="w-full lg:w-1/2 xl:w-1/4">
                <div class="m-3 p-6 border rounded text-center">
                  <span class="w-16 h-16 rounded-full bg-gray-600 inline-block text-white text-3xl p-2">
                    <i class="far fa-clock"></i>
                  </span>
                  <h3 class="text-xl font-bold my-4 text-black">
                    Creative Strategy & solution
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
              </div>

            </div>

            <br><br>
            <div class="lg:flex lg:flex-wrap">
              <div class="w-full xl:w-1/3">
                <div class="m-3 p-4 border rounded">
                  <span class="w-12 h-12 rounded-full bg-teal-600 inline-block text-white text-xl p-2 float-left text-center"><i class="fa fa-money-bill-alt"></i></span>
                  <div class="pl-16">
                    <h4 class="font-bold mb-1">Reasonable prices</h4>
                    <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor</p>
                  </div>
                </div>
              </div>
              <div class="w-full xl:w-1/3">
                <div class="m-3 p-4 border rounded">
                  <span class="w-12 h-12 rounded-full bg-gray-700 inline-block text-white text-xl p-2 float-left text-center"><i class="fa fa-comment-dots"></i></span>
                  <div class="pl-16">
                    <h4 class="font-bold mb-1">Reasonable prices</h4>
                    <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor</p>
                  </div>
                </div>
              </div>
              <div class="w-full xl:w-1/3">
                <div class="m-3 p-4 border rounded">
                  <span class="w-12 h-12 rounded-full bg-green-600 inline-block text-white text-xl p-2 float-left text-center"><i class="fa fa-truck"></i></span>
                  <div class="pl-16">
                    <h4 class="font-bold mb-1">Reasonable prices</h4>
                    <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="m-3 p-2 border rounded">
              <div class="lg:flex lg:flex-wrap">

                <div class="w-full xl:w-1/3 p-4">
                  <i class="fa fa-2x fa-truck text-teal-600"></i>
                  <h3 class="font-bold text-xl my-2 text-black">Fast delivery</h3>
                  <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
                <div class="w-full xl:w-1/3 p-4">
                  <i class="fa fa-2x fa-landmark text-teal-600"></i>
                  <h3 class="font-bold text-xl my-2 text-black">Creative Strategy</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
                <div class="w-full xl:w-1/3 p-4">
                  <i class="fa fa-2x fa-lock text-teal-600"></i>
                  <h3 class="font-bold text-xl my-2 text-black">Fast delivery</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
              </div>

            </div>

          </div>
        </section>

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="headers">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Site headers</h1>

            <div class="border p-1">
              <div class="container lg:flex lg:justify-between px-2 border-b">
                <div class="hidden lg:block">
                  <a href="#" class="p-2 inline-block text-gray-500 hover:text-gray-700"><i class="fab fa-facebook"></i></a>
                  <a href="#" class="p-2 inline-block text-gray-500 hover:text-gray-700"><i class="fab fa-instagram"></i></a>
                  <a href="#" class="p-2 inline-block text-gray-500 hover:text-gray-700"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="w-full lg:w-auto">
                  <ul>
                    <li class="inline-block"><a class="p-2 text-gray-500 hover:text-gray-700 inline-block" href=""> Delivery</a></li>
                    <li class="inline-block"><a class="p-2 text-gray-500 hover:text-gray-700 inline-block" href="">  Help </a></li>
                    <li class="inline-block relative">
                      <a data-target="headers" onclick="toggleTarget(event)" class="p-2 text-gray-500 hover:text-gray-700 inline-block" href="">  USD <i class="fas fa-caret-down"></i></a>
                      <div data-selector="headers" style="display: none;">
                        <div class="absolute py-1 border rounded bg-white w-32 z-50">
                          <ul>
                            <li><a href="#" class="block py-1 px-3 hover:bg-gray-300">VND</a></li>
                            <li><a href="#" class="block py-1 px-3 hover:bg-gray-300">AED</a></li>
                            <li><a href="#" class="block py-1 px-3 hover:bg-gray-300">EUR</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="inline-block relative">
                      <a data-target="headers-2" onclick="toggleTarget(event)" class="p-2 text-gray-500 hover:text-gray-700 inline-block" href="">  Languages <i class="fas fa-caret-down"></i></a>
                      <div data-selector="headers-2" style="display: none;">
                        <div class="absolute py-1 border rounded bg-white w-32 z-50">
                          <ul>
                            <li><a href="#" class="block py-1 px-3 hover:bg-gray-300">VN</a></li>
                            <li><a href="#" class="block py-1 px-3 hover:bg-gray-300">English</a></li>
                            <li><a href="#" class="block py-1 px-3 hover:bg-gray-300">Russian </a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="container md:flex md:justify-between md:flex-wrap py-2 px-2 items-center border-b">
                <a class=" py-2" href="#">
                  <img class="h-8 mr-8" src="https://i0.wp.com/uphinh.org/images/2020/02/02/l.png">
                </a>
                <div class=" py-2">
                  <form class="inline-flex" action="" method="post">
                    <input type="text" class="border rounded-l py-2 px-3" placeholder="Search">
                    <select class="border py-2 px-3 -mx-px text-gray-600" name="category_name">
          						<option value="">All type</option>
                      <option value="codex">Special</option>
          						<option value="comments">Only best</option>
          						<option value="content">Latest</option>
          				</select>
                  <button class="border border-teal-500 text-white bg-teal-500 hover:bg-teal-600 rounded-r py-2 px-3" type="submit">
      			        <i class="fa fa-search"></i>
      			      </button>
                  </form>
                </div>
                <div class=" py-2 w-full md:w-auto">
                  <span class="h-12 w-12 inline-block text-gray-600 border p-3 text-center mr-1 rounded-full relative">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="px-2 leading-normal bg-red-500 absolute top-0 right-0 rounded-full text-white -m-1 text-sm leading-nose">0</span>
                  </span>
                  <span class="h-12 w-12 inline-block text-gray-600 border p-3 text-center mr-1 rounded-full relative">
                    <i class="fa fa-heart"></i>
                  </span>
                  <a href="#">
                    <span class="inline-flex">
                      <span class="h-12 w-12 inline-block text-gray-600 border p-3 text-center mr-2 rounded-full relative">
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

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="footers">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Site footers</h1>
            <div class="p-1 border">
              <div class="p-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
              <div class="container py-4 border-t md:flex md:flex-wrap">
                <div class="w-full px-6 py-4 xl:w-4/12">
                  <img class="h-8 mr-8" src="https://i0.wp.com/uphinh.org/images/2020/02/02/l.png">
                  <p class="my-6">Some short text about company like You might remember the Dell computer commercials in which a youth reports this exciting news to his friends.</p>
                  <div class="">
                    <a href="" class="h-10 w-10 inline-block border border-gray-300 hover:border-gray-500 p-1 text-center text-xl rounded"><i class="fab fa-facebook-f"></i></a>
                    <a href="" class="h-10 w-10 inline-block border border-gray-300 hover:border-gray-500 p-1 text-center text-xl rounded"><i class="fab fa-instagram"></i></a>
                    <a href="" class="h-10 w-10 inline-block border border-gray-300 hover:border-gray-500 p-1 text-center text-xl rounded"><i class="fab fa-youtube"></i></a>
                    <a href="" class="h-10 w-10 inline-block border border-gray-300 hover:border-gray-500 p-1 text-center text-xl rounded"><i class="fab fa-twitter"></i></a>
                  </div>
                </div>
                <div class="w-full  px-6 py-4 md:w-1/4 xl:w-2/12">
                  <h6 class="font-bold mb-4 text-black">About</h6>
                  <ul>
                    <li class="block mb-2"><a href="#" class="">About us</a></li>
                    <li class="block mb-2"><a href="#" class="">Services</a></li>
                    <li class="block mb-2"><a href="#" class="">Rules and terms</a></li>
                    <li class="block mb-2"><a href="#" class="">Blogs</a></li>
                  </ul>
                </div>
                <div class="w-full  px-6 py-4 md:w-1/4 xl:w-2/12">
                  <h6 class="font-bold mb-4 text-black">Services</h6>
                  <ul>
                    <li class="block mb-2"><a href="#" class="">Help center</a></li>
                    <li class="block mb-2"><a href="#" class="">Money refund</a></li>
                    <li class="block mb-2"><a href="#" class="">Terms and Policy</a></li>
                    <li class="block mb-2"><a href="#" class="">Open dispute</a></li>
                  </ul>
                </div>
                <div class="w-full  px-6 py-4 p-4 md:w-1/4 xl:w-2/12">
                  <h6 class="font-bold mb-4 text-black">For users</h6>
                  <ul>
                    <li class="block mb-2"><a href="#" class="">User Login</a></li>
                    <li class="block mb-2"><a href="#" class="">User register</a></li>
                    <li class="block mb-2"><a href="#" class="">Account Setting</a></li>
                    <li class="block mb-2"><a href="#" class="">My Orders</a></li>
                    <li class="block mb-2"><a href="#" class="">My Wishlist</a></li>
                  </ul>
                </div>
                <div class="w-full  px-6 py-4 md:w-1/4 xl:w-2/12">
                  <h6 class="font-bold mb-4 text-black">Our app</h6>
                  <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/misc/appstore.png"><br>
                  <img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/misc/playmarket.png">

                </div>
              </div>
              <div class="container">
                <div class="border-t p-4">
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

        <section class="p-1 lg:px-10 lg:py-16 border-b" id="carousels">
          <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-10">Carousels</h1>

            <div class="lg:flex">
              <div class="w-full lg:w-1/2">
                <div class="m-3">
                  <h3 class="mb-4"><span class="font-bold">SINGLE SLIDER</span> <span class="text-sm">OWL PLUGIN</span></h3>

                  <div class="carousel1 relative overflow-hidden">
                    <div class="carousel-inner float-left transition duration-1000 ease-in-out">
                      <div class="carousel-item  float-left">
                        <img class="w-full" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide1.jpg" alt="">
                      </div>
                      <div class="carousel-item float-left">
                        <img class="w-full" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide2.jpg" alt="">
                      </div>
                      <div class="carousel-item float-left">
                        <img class="w-full" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide3.jpg" alt="">
                      </div>
                    </div>
                    <div onclick="previousCarousel()" class="absolute h-full flex items-center w-1/6 justify-center text-white opacity-75 cursor-pointer left-0 text-5xl hover:opacity-100">
                      <i class="fas fa-chevron-left"></i>
                    </div>
                    <div onclick="nextCarousel()" class="absolute h-full flex items-center w-1/6 justify-center text-white opacity-75 cursor-pointer right-0 text-5xl hover:opacity-100">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-1/2">
                <div class=" m-2">
                  <h3 class="mb-4"><span class="font-bold">SINGLE SLIDER</span> <span class="font-sm">BOOTSTRAP</span></h3>
                  <div class="carousel2 relative overflow-hidden">
                    <img class="slide w-full hidden" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide1.jpg" alt="">
                    <img class="slide w-full hidden" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide2.jpg" alt="">
                    <img class="slide w-full hidden" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide3.jpg" alt="">
                    <div onclick="changeSlide(-1)" class="z-50 absolute top-0 h-full flex items-center w-1/6 justify-center text-white opacity-75 cursor-pointer left-0 text-5xl hover:opacity-100">
                      <i class="fas fa-chevron-left"></i>
                    </div>
                    <div onclick="changeSlide(1)" class="z-50 absolute top-0 h-full flex items-center w-1/6 justify-center text-white opacity-75 cursor-pointer right-0 text-5xl hover:opacity-100">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                    <div class="absolute w-full bottom-0 mb-4 text-center">
                      <span class="dot w-3 h-3 inline-block rounded-full border border-white mx-2"></span>
                      <span class="dot w-3 h-3 inline-block rounded-full border border-white mx-2"></span>
                      <span class="dot w-3 h-3 inline-block rounded-full border border-white mx-2"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-2 m-y">
              <h3 mb-4=""><span class="font-bold">CAROUSEL ITEMS</span> <span class="text-sm">OWL PLUGIN</span></h3>

              <div class="product-carousel relative">
                <div class="product-carousel-inner">
                  <div class="product-carousel-item float-left w-full md:w-1/2 lg:w-1/4">
                    <div class="m-2 p-2 border rounded-lg text-center">
                      <img class="mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="">
                      <div class="my-4">
                        <a href="#" class="font-bold text-teal-500 hover:text-teal-600">First item name</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-carousel-item float-left w-full md:w-1/2 lg:w-1/4">
                    <div class="m-2 p-2 border rounded-lg text-center">
                      <img class="mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="">
                      <div class="my-4">
                        <a href="#" class="font-bold text-teal-500 hover:text-teal-600">First item name</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-carousel-item float-left w-full md:w-1/2 lg:w-1/4">
                    <div class="m-2 p-2 border rounded-lg text-center">
                      <img class="mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="">
                      <div class="my-4">
                        <a href="#" class="font-bold text-teal-500 hover:text-teal-600">First item name</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-carousel-item float-left w-full md:w-1/2 lg:w-1/4">
                    <div class="m-2 p-2 border rounded-lg text-center">
                      <img class="mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="">
                      <div class="my-4">
                        <a href="#" class="font-bold text-teal-500 hover:text-teal-600">First item name</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-carousel-item float-left w-full md:w-1/2 lg:w-1/4">
                    <div class="m-2 p-2 border rounded-lg text-center">
                      <img class="mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="">
                      <div class="my-4">
                        <a href="#" class="font-bold text-teal-500 hover:text-teal-600">First item name</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-carousel-item float-left w-full md:w-1/2 lg:w-1/4">
                    <div class="m-2 p-2 border rounded-lg text-center">
                      <img class="mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="">
                      <div class="my-4">
                        <a href="#" class="font-bold text-teal-500 hover:text-teal-600">First item name</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-carousel-item float-left w-full md:w-1/2 lg:w-1/4">
                    <div class="m-2 p-2 border rounded-lg text-center">
                      <img class="mx-auto" src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" alt="">
                      <div class="my-4">
                        <a href="#" class="font-bold text-teal-500 hover:text-teal-600">First item name</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-carousel-item float-left w-full md:w-1/2 lg:w-1/4">
                    <div class="m-2 p-2 border rounded-lg text-center">
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

    slide = document.getElementsByClassName('slide');
    dot = document.getElementsByClassName('dot');

    indexSlide = 0;

    function styleSlide(n){
      slide[n].style.display = 'block';
      dot[n].style.background = 'white';
    }

    styleSlide(indexSlide);

    function changeSlide(n){
      indexSlide += n;
      if(indexSlide == slide.length){
        indexSlide = 0;
      };

      if(indexSlide < 0){
        indexSlide = slide.length -1;
      };
      showSlide(indexSlide);
    }

    function showSlide(n){
      for(i=0; i<slide.length;i++){
        slide[i].style.display = 'none';
        dot[i].style.background = 'none';
      }
      styleSlide(n);
    };


    carouselWidth = document.getElementsByClassName('carousel1')[0].offsetWidth;
    carouselItem = document.getElementsByClassName('carousel-item');
    carouselInner = document.getElementsByClassName('carousel-inner')

    carouselInner[0].style.width = carouselItem.length * carouselWidth + "px";

    for(i=0; i<carouselItem.length; i++){
      carouselItem[i].style.width = carouselWidth + "px";
    }

    translateX = 0;

    function nextCarousel() {
      translateX -= carouselWidth;
      if(translateX == - carouselItem.length * carouselWidth){
        translateX = 0;
      }
      carouselInner[0].style.transform = 'translateX(' + translateX +'px';
    }

    function previousCarousel() {
      if(translateX == 0){
        translateX = - carouselItem.length * carouselWidth + slideWidth;
      } else {
        translateX += slideWidth;
      }
      carouselInner[0].style.transform = 'translateX(' + translateX +'px';
    }




  </script>
@endpush
