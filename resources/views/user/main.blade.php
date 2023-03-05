<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('./resources/css/app.css')
</head>
<body>
    <nav class="bg-white shadow ">
        <div class="md:py-2 md:flex md:items-center md:justify-center">
            <div>
                <img src="image/head-logo.png" class="h-20 inline md:hidden" alt="" />
            </div>
            <ul class="md:flex md:items-center">
                <li class="mx-4 px-4 py-2 hover:bg-teal-100 duration-500">
                    <a href="" class="text-md hover:text-teal-500 duration-500">MENU</a>
                </li>
                <li class="mx-4 px-4 py-2 hover:bg-teal-100 duration-500">
                    <a href="" class="text-md hover:text-teal-500 duration-500">SHOP</a>
                </li>
                <li class="mx-4 px-4 py-2 hover:bg-teal-100 duration-500">
                    <a href="" class="text-md hover:text-teal-500 duration-500">OUR STORY</a>
                </li>
                <li class="mx-4 px-4 py-2 hover:bg-teal-100 duration-500">
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="inline-flex items-center" type="button">
                        WHERE TO BUY
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div id="dropdown" class="border-t-2 border-teal-500 hidden bg-white divide-y divide-gray-100 w-41 mt-5">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Market</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Wholesale</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Women Owned Business</a>
                          </li>
                        </ul>
                    </div>
                </li>
                <li class="mx-4 px-4 py-2 hover:bg-teal-100 duration-500">
                    <a href="" class="text-md hover:text-teal-500 duration-500">RECIPES</a>
                </li>
                <li class="mx-4 px-4 py-2 hover:bg-teal-100 duration-500">
                    <a href="" class="text-md hover:text-teal-500 duration-500">NEWS</a>
                </li>
                <li class="mx-4 px-4 py-2 hover:bg-teal-100 duration-500">
                    <a href="" class="text-md hover:text-teal-500 duration-500">CONTACT</a>
                </li>
            </ul>
        </div>      
    </nav>
    
    @yield('container')
    
</body>
</html>