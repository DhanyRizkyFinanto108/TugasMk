<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login Page</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-red-500 min-h-screen flex items-center justify-center">
  <div class="bg-yellow-400 p-8 rounded-lg shadow-lg w-80">
    <h2 class="text-center text-2xl font-bold mb-6 text-black">Login</h2>
    <form>
      <div class="mb-4">
        <label for="username" class="block text-sm font-medium text-black mb-2">Username</label>
        <input type="text" id="username" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter username">
      </div>
      <div class="mb-6">
        <label for="password" class="block text-sm font-medium text-black mb-2">Password</label>
        <input type="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter password">
      </div>
      <div class="flex justify-center">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">Login</button>
      </div>
    </form>
  </div>
</body>
</html>
