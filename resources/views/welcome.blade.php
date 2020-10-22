<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Laravel</title>
    <style>
      body {
        font-family: "Nunito";
      }
    </style>
  </head>

  <body class="antialiased">
    <div
      class="relative flex justify-center min-h-screen bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0"
    >
      @if (Route::has('login'))
      <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
        @auth
        <a
          href="{{ url('/dashboard') }}"
          class="text-sm text-gray-700 underline"
          >Dashboard</a
        >
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"
          >Login</a
        >

        @if (Route::has('register'))
        <a
          href="{{ route('register') }}"
          class="ml-4 text-sm text-gray-700 underline"
          >Register</a
        >
        @endif @endif
      </div>
      @endif

      <div class="max-w-6xl px-6 mx-auto lg:px-8">
        <h1 class="text-4xl font-bold">Pizza House</h1>
        <h2>The North's Best Pizzas</h2>
      </div>
    </div>
  </body>
</html>
