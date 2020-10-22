<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Laravel</title>
  </head>

  <body class="antialiased">
    <div
      class="relative flex justify-center min-h-screen bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0"
    >
      <div class="max-w-6xl px-6 mx-auto lg:px-8">
        <h1 class="text-4xl font-bold">Pizzas List</h1>
      </div>
      <div>
        <p>{{ $type }} - {{ $base }} - {{ $price }}</p>
      </div>
    </div>
  </body>
</html>
