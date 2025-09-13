<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONYX - Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/png" href="{{ asset('images/onyxlogo.png') }}">
  <style>
    body { font-family: 'Roboto', sans-serif; }
  </style>
</head>
<body class="bg-black flex items-center justify-center min-h-screen">
  <div class="flex w-full max-w-4xl bg-[#1A1A1A] rounded-2xl overflow-hidden shadow-2xl">
    <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
      <div class="flex flex-col items-center mb-6">
        <img src="{{ asset('images/onyxlogo.png') }}" alt="Onyx Logo" class="w-20 h-20 mb-0">
        <h2 class="text-lg font-medium text-white">Welcome User!</h2>
      </div>
      <form method="POST" action="{{ route('login.post') }}" class="space-y-5">
        @csrf
        <div>
          <label class="block text-sm text-gray-300 mb-2">Email Address</label>
          <input type="email" name="email" placeholder="Email" required
                 class="w-full px-4 py-3 rounded-md bg-transparent border border-gray-500 text-white placeholder-gray-400 focus:border-orange-500 focus:ring-1 focus:ring-orange-500 outline-none">
        </div>
        <div>
          <label class="block text-sm text-gray-300 mb-2">Password</label>
          <input type="password" name="password" placeholder="****************" required
                 class="w-full px-4 py-3 rounded-md bg-transparent border border-gray-500 text-white placeholder-gray-400 focus:border-orange-500 focus:ring-1 focus:ring-orange-500 outline-none">
        </div>
        <div class="flex items-center justify-between text-sm text-gray-400">
          <label class="flex items-center space-x-2">
            <input type="checkbox" class="form-checkbox text-orange-500">
            <span>Remember me</span>
          </label>
          <a href="#" class="hover:text-orange-500">Forgot Password?</a>
        </div>
        <button type="submit"
                class="w-full bg-orange-600 hover:bg-orange-700 text-white py-3 rounded-md font-semibold">
          Login
        </button>
        <div class="flex items-center my-4">
          <hr class="flex-grow border-gray-600">
          <span class="mx-2 text-gray-400">OR</span>
          <hr class="flex-grow border-gray-600">
        </div>
<div class="flex space-x-4">
  <button type="button" 
          class="flex items-center justify-center w-1/2 border border-gray-500 rounded-md py-2 hover:border-orange-500 text-white">
    <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google" class="w-5 h-5 mr-2"> 
    Google
  </button>
  <button type="button" 
          class="flex items-center justify-center w-1/2 border border-gray-500 rounded-md py-2 hover:border-orange-500 text-white">
    <img src="https://www.svgrepo.com/show/475647/facebook-color.svg" alt="Facebook" class="w-5 h-5 mr-2"> 
    Facebook
  </button>
</div>
      <p class="mt-6 text-center text-gray-400 text-sm">
        Don’t have an account? 
        <a href="#" class="text-orange-500 hover:underline">Sign In</a>
      </p>
    </div>
    <div class="hidden md:block w-1/2">
      <img src="{{ asset('images/Shoesmodel.png') }}" alt="Shoes" class="w-full h-full object-cover">
    </div>
  </div>
</body>
</html>
