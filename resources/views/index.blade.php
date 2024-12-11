<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Dhani Rizky</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-orange-500 min-h-screen flex flex-col items-center justify-center">
  <nav class="w-full bg-orange-600 py-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
      <div class="text-white text-xl font-bold">Website</div>
      <ul class="flex space-x-8 text-white">
        <li><a href="{{ route('home') }}" class="hover:underline">home</a></li>
        <li><a href="{{ route('about') }}" class="hover:underline">about</a></li>
        <li><a href="{{ route('login') }}" class="hover:underline">login</a></li>
      </ul>
    </div>
  </nav>

  <div class="text-center mt-12">
    <h1 class="text-4xl font-bold text-black mb-4">Hai Teman-Teman</h1>
    <p class="text-3xl font-semibold text-black">Nama Saya Dhani Rizky</p>
    <div class="mt-8">
      <img src="public/image/foto.jpeg" alt="Dhani Rizky" class="rounded-lg shadow-lg w-48 mx-auto">
    </div>
  </div>
</body>
</html>
