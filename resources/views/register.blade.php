<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONYX - Register</title>
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
        <h2 class="text-lg font-medium text-white">Create Your Account</h2>
      </div>
      <form method="POST" action="{{ route('register.post') }}" class="space-y-5">
        @csrf
        <div>
          <label class="block text-sm text-gray-300 mb-2">Full Name</label>
          <input type="text" name="name" placeholder="Your Name" required
                 class="w-full px-4 py-3 rounded-md bg-transparent border border-gray-500 text-white placeholder-gray-400 focus:border-orange-500 focus:ring-1 focus:ring-orange-500 outline-none">
        </div>
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
        <div>
          <label class="block text-sm text-gray-300 mb-2">Confirm Password</label>
          <input type="password" name="password_confirmation" placeholder="****************" required
                 class="w-full px-4 py-3 rounded-md bg-transparent border border-gray-500 text-white placeholder-gray-400 focus:border-orange-500 focus:ring-1 focus:ring-orange-500 outline-none">
        </div>
        <button type="submit"
                class="w-full bg-orange-600 hover:bg-orange-700 text-white py-3 rounded-md font-semibold">
          Register
        </button>
        
        <p class="mt-6 text-center text-gray-400 text-sm">
          Already have an account? 
          <a href="{{ route('login.show') }}" class="text-orange-500 hover:underline">Login</a>
        </p>
      </form>
    </div>
    <div class="hidden md:block w-1/2">
      <img src="{{ asset('images/Shoesmodel.png') }}" alt="Shoes" class="w-full h-full object-cover">
    </div>
  </div>
</body>
</html>
