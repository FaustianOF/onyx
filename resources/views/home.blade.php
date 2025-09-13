<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONYX - Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/png" href="{{ asset('images/onyxlogo16.png') }}">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700;900&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Roboto Slab', serif;
    }
    body {
      overflow-y: scroll;
    }

    body::-webkit-scrollbar {
      width: 0;
      background: transparent;
    }
  </style>
</head>
<body class="bg-[#1A1A1A] text-[#FAF8F3] opacity-0 translate-y-5 transition-all duration-700 ease-out">
    
  <header class="w-full px-10 py-6 flex items-center justify-between absolute top-0 left-0 z-30">
    <div class="flex items-center">
      <img src="{{ asset('images/onyxlogo.png') }}" alt="Onyx Logo" class="w-24 h-24">
      <span class="text-2xl font-regular ml-0">ONYX</span>
    </div>

    <nav class="hidden md:flex space-x-20 text-lg font-medium">
      <a href="#" class="hover:text-orange-500">HOME</a>
      <a href="#" class="hover:text-orange-500">MAN</a>
      <a href="#" class="hover:text-orange-500">WOMEN</a>
      <a href="#" class="hover:text-orange-500">KIDS</a>
      <a href="#" class="hover:text-orange-500">SALE</a>
    </nav>

    <div class="flex items-center space-x-8">
      <img src="{{ asset('images/search.png') }}" alt="Search" class="w-6 h-6 cursor-pointer">
      <img src="{{ asset('images/cart.png') }}" alt="Cart" class="w-6 h-6 cursor-pointer">
      <img src="{{ asset('images/profile.jpg') }}" alt="Profile" class="w-10 h-11 rounded-full cursor-pointer">
    </div>
  </header>

  <!-- HERO -->
  <section class="relative w-full h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-[60%] z-0">
      <h1 class="text-[260px] font-semibold tracking-[0.01em] whitespace-nowrap leading-none">
        <span class="text-[#FAF8F3]">Air</span>
        <span class="text-orange-600">Jordan</span>
      </h1>
    </div>

    <img src="{{ asset('images/image-removebg-preview (1).png') }}" 
         alt="Air Jordan" class="absolute top-1/2 left-1/2 transform -translate-x-[60%] -translate-y-[55%] rotate-[-35deg] w-[750px] h-[850px] object-contain z-10">

    <div class="absolute bottom-10 left-16 flex flex-col space-y-3 z-20">
      <span class="text-[16px] font-semibold">Choose Color :</span>
      <div class="flex space-x-4">
        <div class="w-[39px] h-[39px] rounded-full cursor-pointer transform transition-transform duration-200 hover:scale-110" style="background-color:#6C635F;"></div>
        <div class="w-[39px] h-[39px] rounded-full cursor-pointer transform transition-transform duration-200 hover:scale-110" style="background-color:#2E3562;"></div>
        <div class="w-[39px] h-[39px] rounded-full cursor-pointer transform transition-transform duration-200 hover:scale-110" style="background-color:#B6263F;"></div>
        <div class="w-[39px] h-[39px] rounded-full cursor-pointer border transform transition-transform duration-200 hover:scale-110" style="background-color:#EAEAEC;"></div>
      </div>
    </div>
    <div class="absolute bottom-10 right-10 max-w-md text-left z-20">
      <h2 class="font-bold text-[16px] uppercase">Inspiration</h2>
      <p class="text-gray-400 mt-2 text-[12px] leading-relaxed">
        The Air Jordan 1 Mid "Court Orange" is inspired by the classic 1985 model, 
        combining purple (luxury and creativity) with black and white (elegance and neutrality). 
        Its texture is both sporty and premium, a symbol of lifestyle. 
        For Onyx, this could be the inspiration for a bold yet elegant color palette.
      </p>
    </div>
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex space-x-6 z-20">
      <button class="bg-orange-600 hover:bg-orange-700 px-8 py-3 rounded-md text-lg font-semibold text-[#000000] shadow-lg transition">
        Add To Cart
      </button>
      <button class="border border-gray-400 hover:border-orange-600 hover:text-orange-600 px-8 py-3 rounded-md text-lg font-semibold text-[#FAF8F3] transition">
        Buy Now
      </button>
    </div>
  </section>
  <section class="bg-[#1A1A1A] py-20" id="featured"> <!-- Featured Shoes DISPLAY -->
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex justify-between items-center mb-10">
        <div class="flex flex-wrap gap-3">
          <button data-filter="all" class="filter-btn bg-[#FF5900] hover:bg-[#e65a00] text-black px-4 py-2 rounded-md font-semibold transition duration-300">
            New Arrivals
          </button>
          <button data-filter="running" class="filter-btn border border-gray-500/60 text-[#FAF8F3] px-4 py-2 rounded-md hover:border-[#FF5900] hover:text-[#FF5900] transition">Running</button>
          <button data-filter="football" class="filter-btn border border-gray-500/60 text-[#FAF8F3] px-4 py-2 rounded-md hover:border-[#FF5900] hover:text-[#FF5900] transition">Football</button>
          <button data-filter="bestseller" class="filter-btn border border-gray-500/60 text-[#FAF8F3] px-4 py-2 rounded-md hover:border-[#FF5900] hover:text-[#FF5900] transition">Best Seller</button>
        </div>
        <button id="viewAllBtn" class="text-sm uppercase tracking-wider hover:text-[#FF5900]">View All</button>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8" id="product-grid"> <!-- Shoes Display-Price -->
        <article data-category="bestseller" class="product-card group relative rounded-2xl overflow-hidden bg-[#1F1F1F] border border-neutral-800/70
               transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_14px_40px_rgba(255,89,0,0.15)]
               hover:ring-1 hover:ring-[#FF5900]/40">
          <span class="absolute left-0 top-6 z-30 bg-[#FF5900] text-[#000000] text-[11px] font-extrabold rounded-r-md px-2 py-3"
                style="writing-mode: vertical-rl; text-orientation: mixed;">New</span>
          <div class="relative z-10 h-64 flex items-center justify-center bg-[#242424]">
            <img src="{{ asset('images/display1.png') }}" alt="PUMA x ROSÉ"
                 class="max-h-56 object-contain transition-transform duration-300 group-hover:scale-105" />
          </div>
          <div class="z-10 p-5 bg-[#222] transition-colors duration-300 group-hover:bg-[#262626]">
            <p class="text-sm text-gray-400">Lifestyle Women</p>
            <h3 class="mt-1 text-[17px] font-normal leading-snug text-[#FAF8F3]">PUMA x ROSÉ Speedcat</h3>
            <p class="mt-3 font-normal text-[#FAF8F3]">Rp 2.119.000</p>
          </div>
        </article>
        <article data-category="running" class="product-card group relative rounded-2xl overflow-hidden bg-[#1F1F1F] border border-neutral-800/70
               transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_14px_40px_rgba(255,89,0,0.15)]
               hover:ring-1 hover:ring-[#FF5900]/40">
          <span class="absolute left-0 top-6 z-30 bg-[#FF5900] text-[#000000] text-[11px] font-extrabold rounded-r-md px-2 py-3"
                style="writing-mode: vertical-rl; text-orientation: mixed;">New</span>
          <div class="relative z-10 h-64 flex items-center justify-center bg-[#242424]">
            <img src="{{ asset('images/display2.png') }}" alt="Adizero"
                 class="max-h-56 object-contain transition-transform duration-300 group-hover:scale-105" />
          </div>
          <div class="z-10 p-5 bg-[#222] transition-colors duration-300 group-hover:bg-[#262626]">
            <p class="text-sm text-gray-400">Running Man</p>
            <h3 class="mt-1 text-[17px] font-normal leading-snug text-[#FAF8F3]">Adizero Boston 13 Shoes</h3>
            <p class="mt-3 font-normal text-[#FAF8F3]">Rp 2.500.000</p>
          </div>
        </article>
        <article data-category="football" class="product-card group relative rounded-2xl overflow-hidden bg-[#1F1F1F] border border-neutral-800/70
               transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_14px_40px_rgba(255,89,0,0.15)]
               hover:ring-1 hover:ring-[#FF5900]/40">
          <span class="absolute left-0 top-6 z-30 bg-[#FF5900] text-[#000000] text-[11px] font-extrabold rounded-r-md px-2 py-3"
                style="writing-mode: vertical-rl; text-orientation: mixed;">New</span>
          <div class="relative z-10 h-64 flex items-center justify-center bg-[#242424]">
            <img src="{{ asset('images/display3.png') }}" alt="Terra"
                 class="max-h-56 object-contain transition-transform duration-300 group-hover:scale-105" />
          </div>
          <div class="z-10 p-5 bg-[#222] transition-colors duration-300 group-hover:bg-[#262626]">
            <p class="text-sm text-gray-400">Lifestyle Women</p>
            <h3 class="mt-1 text-[17px] font-normal leading-snug text-[#FAF8F3]">Nike Terra Manta</h3>
            <p class="mt-3 font-normal text-[#FAF8F3]">Rp 2.500.000</p>
          </div>
        </article>
        <article data-category="running" class="product-card group relative rounded-2xl overflow-hidden bg-[#1F1F1F] border border-neutral-800/70
               transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_14px_40px_rgba(255,89,0,0.15)]
               hover:ring-1 hover:ring-[#FF5900]/40">
          <span class="absolute left-0 top-6 z-30 bg-[#FF5900] text-[#000000] text-[11px] font-extrabold rounded-r-md px-2 py-3"
                style="writing-mode: vertical-rl; text-orientation: mixed;">New</span>
          <div class="relative z-10 h-64 flex items-center justify-center bg-[#242424]">
            <img src="{{ asset('images/display4.png') }}" alt="Vaporfly"
                 class="max-h-56 object-contain transition-transform duration-300 group-hover:scale-105" />
          </div>
          <div class="z-10 p-5 bg-[#222] transition-colors duration-300 group-hover:bg-[#262626]">
            <p class="text-sm text-gray-400">Running Man</p>
            <h3 class="mt-1 text-[17px] font-normal leading-snug text-[#FAF8F3]">Nike Vaporfly 4</h3>
            <p class="mt-3 font-normal text-[#FAF8F3]">Rp 3.789.000</p>
          </div>
        </article>
      </div>
      <div id="extra-products" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-10 hidden"> <!-- Hidden Grid (BELUM SEMPURNA) -->
        <article data-category="bestseller" class="product-card group relative rounded-2xl overflow-hidden bg-[#1F1F1F] border border-neutral-800/70
               transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_14px_40px_rgba(255,89,0,0.15)]
               hover:ring-1 hover:ring-[#FF5900]/40">
          <span class="absolute left-0 top-6 z-30 bg-[#FF5900] text-[#000000] text-[11px] font-extrabold rounded-r-md px-2 py-3"
                style="writing-mode: vertical-rl; text-orientation: mixed;">New</span>
          <div class="relative z-10 h-64 flex items-center justify-center bg-[#242424]">
            <img src="{{ asset('images/display1.png') }}" alt="PUMA x ROSÉ"
                 class="max-h-56 object-contain transition-transform duration-300 group-hover:scale-105" />
          </div>
          <div class="z-10 p-5 bg-[#222] transition-colors duration-300 group-hover:bg-[#262626]">
            <p class="text-sm text-gray-400">Lifestyle Women</p>
            <h3 class="mt-1 text-[17px] font-normal leading-snug text-[#FAF8F3]">PUMA x ROSÉ Speedcat</h3>
            <p class="mt-3 font-normal text-[#FAF8F3]">Rp 2.119.000</p>
          </div>
        </article>
        <article data-category="running" class="product-card group relative rounded-2xl overflow-hidden bg-[#1F1F1F] border border-neutral-800/70
               transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_14px_40px_rgba(255,89,0,0.15)]
               hover:ring-1 hover:ring-[#FF5900]/40">
          <span class="absolute left-0 top-6 z-30 bg-[#FF5900] text-[#000000] text-[11px] font-extrabold rounded-r-md px-2 py-3"
                style="writing-mode: vertical-rl; text-orientation: mixed;">New</span>
          <div class="relative z-10 h-64 flex items-center justify-center bg-[#242424]">
            <img src="{{ asset('images/display2.png') }}" alt="Adizero"
                 class="max-h-56 object-contain transition-transform duration-300 group-hover:scale-105" />
          </div>
          <div class="z-10 p-5 bg-[#222] transition-colors duration-300 group-hover:bg-[#262626]">
            <p class="text-sm text-gray-400">Running Man</p>
            <h3 class="mt-1 text-[17px] font-normal leading-snug text-[#FAF8F3]">Adizero Boston 13 Shoes</h3>
            <p class="mt-3 font-normal text-[#FAF8F3]">Rp 2.500.000</p>
          </div>
        </article>
        <article data-category="football" class="product-card group relative rounded-2xl overflow-hidden bg-[#1F1F1F] border border-neutral-800/70
               transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_14px_40px_rgba(255,89,0,0.15)]
               hover:ring-1 hover:ring-[#FF5900]/40">
          <span class="absolute left-0 top-6 z-30 bg-[#FF5900] text-[#000000] text-[11px] font-extrabold rounded-r-md px-2 py-3"
                style="writing-mode: vertical-rl; text-orientation: mixed;">New</span>
          <div class="relative z-10 h-64 flex items-center justify-center bg-[#242424]">
            <img src="{{ asset('images/display3.png') }}" alt="Terra"
                 class="max-h-56 object-contain transition-transform duration-300 group-hover:scale-105" />
          </div>
          <div class="z-10 p-5 bg-[#222] transition-colors duration-300 group-hover:bg-[#262626]">
            <p class="text-sm text-gray-400">Lifestyle Women</p>
            <h3 class="mt-1 text-[17px] font-normal leading-snug text-[#FAF8F3]">Nike Terra Manta</h3>
            <p class="mt-3 font-normal text-[#FAF8F3]">Rp 2.500.000</p>
          </div>
        </article>
        <article data-category="running" class="product-card group relative rounded-2xl overflow-hidden bg-[#1F1F1F] border border-neutral-800/70
               transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_14px_40px_rgba(255,89,0,0.15)]
               hover:ring-1 hover:ring-[#FF5900]/40">
          <span class="absolute left-0 top-6 z-30 bg-[#FF5900] text-[#000000] text-[11px] font-extrabold rounded-r-md px-2 py-3"
                style="writing-mode: vertical-rl; text-orientation: mixed;">New</span>
          <div class="relative z-10 h-64 flex items-center justify-center bg-[#242424]">
            <img src="{{ asset('images/display4.png') }}" alt="Vaporfly"
                 class="max-h-56 object-contain transition-transform duration-300 group-hover:scale-105" />
          </div>
          <div class="z-10 p-5 bg-[#222] transition-colors duration-300 group-hover:bg-[#262626]">
            <p class="text-sm text-gray-400">Running Man</p>
            <h3 class="mt-1 text-[17px] font-normal leading-snug text-[#FAF8F3]">Nike Vaporfly 4</h3>
            <p class="mt-3 font-normal text-[#FAF8F3]">Rp 3.789.000</p>
          </div>
        </article>
    </div>
  </section>
  <section class="bg-[#1A1A1A] py-20"> <!-- Section Shoes TYPE -->
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="relative w-[402px] h-[275px] rounded-lg overflow-hidden group">
          <img src="{{ asset('images/category1.png') }}" alt="Running"
               class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105">
          <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition"></div>
          <button class="absolute bottom-6 left-6 ml-2 bg-[#FF5900] text-black px-5 py-2 rounded-md font-semibold shadow-md hover:bg-orange-600 transition">
            Running
          </button>
        </div>
        <div class="relative w-[402px] h-[275px] rounded-lg overflow-hidden group">
          <img src="{{ asset('images/category2.png') }}" alt="Football"
               class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105">
          <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition"></div>
          <button class="absolute bottom-6 left-6 ml-2 bg-[#FF5900] text-black px-5 py-2 rounded-md font-semibold shadow-md hover:bg-orange-600 transition">
            Football
          </button>
        </div>
        <div class="relative w-[402px] h-[275px] rounded-lg overflow-hidden group">
          <img src="{{ asset('images/category3.png') }}" alt="Basketball"
               class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105">
          <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition"></div>
          <button class="absolute bottom-6 left-6 ml-2 bg-[#FF5900] text-black px-5 py-2 rounded-md font-semibold shadow-md hover:bg-orange-600 transition">
            Basketball
          </button>
        </div>
      </div>
    </div>
  </section>
<section class="bg-[#1A1A1A] text-white px-8 py-12"> <!-- Section Hot/News -->
  <h1 class="text-3xl font-extrabold mb-8 mr-6">WHAT'S HOT</h1>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2">
    <div class="bg-[#262626] w-[245px] rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:-translate-y-2 hover:shadow-[0_0_20px_#f97316]">
      <div class="overflow-hidden">
        <img src="{{ asset('images/hot1.png') }}" alt="Hot 1" class="w-full h-[350px] object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4">
        <h3 class="font-semibold">PUMA x ROSÉ Speedcat</h3>
        <p class="text-sm text-gray-400 mb-3 line-clamp-2">Elegance meets motorsport heritage.</p>
        <button class="text-sm font-medium text-white hover:text-orange-400">Complete</button>
      </div>
    </div>
    <div class="bg-[#262626] w-[245px] rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:-translate-y-2 hover:shadow-[0_0_20px_#f97316]">
      <div class="overflow-hidden">
        <img src="{{ asset('images/hot2.png') }}" alt="Hot 2" class="w-full h-[350px] object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4">
        <h3 class="font-semibold">Predator by Beckham</h3>
        <p class="text-sm text-gray-400 mb-3 line-clamp-2">It had to be pink.</p>
        <button class="text-sm font-medium text-white hover:text-orange-400">Buy Now</button>
      </div>
    </div>
    <div class="bg-[#262626] w-[245px] rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:-translate-y-2 hover:shadow-[0_0_20px_#f97316]">
      <div class="overflow-hidden">
        <img src="{{ asset('images/hot3.png') }}" alt="Hot 3" class="w-full h-[350px] object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4">
        <h3 class="font-semibold">JA 3 'Channel 12' EP</h3>
        <p class="text-sm text-gray-400 mb-3 line-clamp-2">Bold colors, built for performance.</p>
        <button class="text-sm font-medium text-white hover:text-orange-400">Buy Now</button>
      </div>
    </div>
    <div class="bg-[#262626] w-[245px] rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:-translate-y-2 hover:shadow-[0_0_20px_#f97316]">
      <div class="overflow-hidden">
        <img src="{{ asset('images/hot4.png') }}" alt="Hot 4" class="w-full h-[350px] object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4">
        <h3 class="font-semibold">Jordan x Travis Scott</h3>
        <p class="text-sm text-gray-400 mb-3 line-clamp-2">Iconic streetwear with Travis' touch.</p>
        <button class="text-sm font-medium text-white hover:text-orange-400">Buy Now</button>
      </div>
    </div>
    <div class="bg-[#262626] w-[245px] rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:-translate-y-2 hover:shadow-[0_0_20px_#f97316]">
      <div class="overflow-hidden">
        <img src="{{ asset('images/hot5.png') }}" alt="Hot 5" class="w-full h-[350px] object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4">
        <h3 class="font-semibold">Puma x Playstation</h3>
        <p class="text-sm text-gray-400 mb-3 line-clamp-2">Gaming vibes meet modern sport style.</p>
        <button class="text-sm font-medium text-white hover:text-orange-400">Buy Now</button>
      </div>
    </div>
  </div>
</section>
<footer class="bg-[#1A1A1A] text-white py-8 px-6"> <!-- Bagian FOOTER !! -->
  <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 border-t border-white-700 pt-8">
<div>
  <div class="flex items-center space-x-2 mb-4">
    <img src="images/onyxlogo.png" alt="ONYX Logo" class="w-16 h-16 object-contain">
    <h1 class="text-4xl font-bold">ONYX</h1>
  </div>
</div>
    <div>
      <h2 class="font-bold mb-3">Product</h2>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:underline">Shoe</a></li>
      </ul>
      <h2 class="font-bold mt-5 mb-3">Featured</h2>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:underline">New Arrivals</a></li>
        <li><a href="#" class="hover:underline">Sale</a></li>
        <li><a href="#" class="hover:underline">Last Chance</a></li>
      </ul>
    </div>
    <div>
      <h2 class="font-bold mb-3">Sport</h2>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:underline">Nike Vomero Plus</a></li>
        <li><a href="#" class="hover:underline">Scoot Zeros II</a></li>
        <li><a href="#" class="hover:underline">Nike Pegasus Premium LV8</a></li>
        <li><a href="#" class="hover:underline">Genetics Basketball Shoes</a></li>
        <li><a href="#" class="hover:underline">Copa Pure 3 Club Firm/Multi-Ground</a></li>
        <li><a href="#" class="hover:underline">JA 3 'Channel 12' EP</a></li>
        <li><a href="#" class="hover:underline">Nike Phantom 6</a></li>
      </ul>
    </div>
    <div class="grid grid-cols-2 gap-6">
      <div>
        <h2 class="font-bold mb-3">About ONYX</h2>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:underline">Company</a></li>
          <li><a href="#" class="hover:underline">Company News</a></li>
          <li><a href="#" class="hover:underline">Investor</a></li>
          <li><a href="#" class="hover:underline">Carrier</a></li>
        </ul>
      </div>
      <div>
        <h2 class="font-bold mb-3">Help</h2>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:underline">Get Help</a></li>
          <li><a href="#" class="hover:underline">Order Status</a></li>
          <li><a href="#" class="hover:underline">Delivery</a></li>
          <li><a href="#" class="hover:underline">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="text-center text-xs text-gray-400 border-t border-white-700 mt-8 pt-4">
    Privacy Policy | Terms and Conditions © 2025 ONYX.Inc All rights reserved
  </div>
</footer>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      document.body.classList.remove("opacity-0", "translate-y-5");
      document.body.classList.add("opacity-100", "translate-y-0");
      const filterBtns = document.querySelectorAll(".filter-btn");
      const productCards = document.querySelectorAll(".product-card");
      filterBtns.forEach(btn => {
        btn.addEventListener("click", () => {
          const filter = btn.getAttribute("data-filter");
          productCards.forEach(card => {
            if (filter === "all" || card.getAttribute("data-category") === filter) {
              card.style.display = "block";
            } else {
              card.style.display = "none";
            }
          });
          filterBtns.forEach(b => b.classList.remove("bg-[#FF5900]", "text-black"));
          btn.classList.add("bg-[#FF5900]", "text-black");
        });
      });
      const viewAllBtn = document.getElementById("viewAllBtn");
      const extraProducts = document.getElementById("extra-products");
      let expanded = false;
      viewAllBtn.addEventListener("click", () => {
        expanded = !expanded;
        if (expanded) {
          extraProducts.classList.remove("hidden");
          viewAllBtn.textContent = "View Less";
        } else {
          extraProducts.classList.add("hidden");
          viewAllBtn.textContent = "View All";
        }
      });
    });
  </script>
</body>
</html>
