<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
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
        </div>
      </div>
      <hr class="py-0 my-0 border-b border-gray-100 opacity-25" />
    </nav>
    <main>
    {{$slot}}
  </main>
</html>