<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>                                                                                                                           
</head>
<body>
<body class="bg-gray-100">

<div class="bg-gray-300">
  <header class="absolute inset-x-0 top-0 z-50">
  <nav id="header" class="fixed top-0 z-30 w-full text-white">
      <div class="container flex flex-wrap items-center justify-between w-full py-2 mx-auto mt-0">
        <div class="flex items-center pl-4">
          <a class="text-2xl font-bold text-black no-underline toggleColour hover:no-underline lg:text-4xl" href="#">
            <!--Icon from: http://www.potlabicons.com/ -->
            KOMIKFO
          </a>
        </div>
        <div class="block pr-4 lg:hidden">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 transition duration-300 ease-in-out transform hover:text-gray-900 focus:outline-none focus:shadow-outline hover:scale-105">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>MENU</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="z-20 flex-grow hidden w-full p-4 mt-2 text-black bg-white lg:flex lg:items-center lg:w-auto lg:mt-0 lg:bg-transparent lg:p-0" id="nav-content">
          <ul class="items-center justify-end flex-1 list-reset lg:flex">
            <li class="mr-3">
              <a class="inline-block px-4 py-2 font-bold text-black no-underline hover:rounded-full hover:bg-teal-400 hover:text-xl hover:font-semibold" href="/">Home</a>
            </li>
            <li class="mr-3">
              <a class="inline-block px-4 py-2 text-black no-underline hover:rounded-full hover:bg-teal-400 hover:text-xl hover:font-semibold" href="/wisata">Daftar Komik</a>
            </li>
            <li class="mr-3">
              <a href="/ticketpage" class="inline-block px-4 py-2 text-black no-underline hover:rounded-full hover:bg-teal-400 hover:text-xl hover:font-semibold" href="/tiketpage">About Us</a>
            </li>
          </ul>

          @if (Route::has('login'))
                <div class="px-4 py-2 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105 hover:bg-teal-400">
                    @auth
                    <!-- <button id="navAction" class="px-8 py-4 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105"> -->
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">    {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-bla">LOG IN</a>

                        @if (Route::has('register'))
                        <!-- <button id="navAction" class="px-8 py-4 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105"> -->
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">REGISTER</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
      </div>
      <hr class="py-0 my-0 border-b border-gray-100 opacity-25" />
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    
  </header>
  <div class="relative px-6 isolate pt-14 lg:px-8">
    <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="max-w-2xl py-32 mx-auto sm:py-48 lg:py-56">
      <div class="hidden sm:mb-8 sm:flex sm:justify-center">
        <div class="relative px-3 py-1 text-sm leading-6 text-gray-600 rounded-full ring-1 ring-gray-900/10 hover:ring-gray-900/20">
          Announcing our next round of funding. <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
        </div>
      </div>
      <div class="text-center">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Welcome to Komikfo basic comic</h1>
        <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
        <div class="flex items-center justify-center mt-10 gap-x-6">
        <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 transition duration-300 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>
<section class="text-center mt-14">
    <h1 class="mb-6 text-3xl font-bold text-gray-600">
        Explore the World of Comics with Komikfo
    </h1>

    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
        <div class="mb-8">
            <h3 class="text-lg font-semibold text-gray-500">1. Discover Diverse Comics</h3>
            <p class="text-gray-400 text">Start your journey by exploring a wide range of comics. Discover stories from various genres and artists, all in one place.</p>
        </div>
        <div class="mb-8">
            <h3 class="text-lg font-semibold text-gray-500">2. Immerse Yourself in Engaging Plots</h3>
            <p class="text-gray-400 text">Immerse yourself in captivating plots and narratives. Dive into the world of characters and adventures that will keep you hooked from panel to panel.</p>
        </div>
        <div class="mb-8">
            <h3 class="text-lg font-semibold text-gray-500">3. Share Your Thoughts with the Community</h3>
            <p class="text-gray-400 text">Join our community and share your thoughts about your favorite comics. Engage with fellow enthusiasts and recommend hidden gems to others.</p>
        </div>
    </div>
</section>
<footer class="py-4 text-white bg-gray-800">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Your Website. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>