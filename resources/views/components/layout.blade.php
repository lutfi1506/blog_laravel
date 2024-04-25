<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }} </title>
  @vite('resources/css/app.css')
  @vite('resources/js/alpine.js')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body class="h-full bg-gray-100">
  <x-partials.navbar />
  <x-partials.header title="{{ $title }}" />

  <main>
    <div class="mx-auto max-w-7xl px-3 py-6 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>
</body>

</html>
