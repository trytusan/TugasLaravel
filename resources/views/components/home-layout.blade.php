<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Store - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-b from-purple-200 to-purple-700 min-h-screen text-gray-800">

    <header class="relative bg-gradient-to-r from-gray-700 to-gray-800 p-5 text-white text-center shadow-2xl">
        <h1 class="text-4xl font-extrabold tracking-widest">Rental Store</h1>
        <p class="mt-2 font-light text-gray-200">Your best partner in rentals</p>
        <nav class="mt-4 space-x-4">
            <a href="{{route('landing')}}" class="px-5 py-2 bg-white text-gray-700 rounded-full font-semibold transition transform hover:-translate-y-1 hover:bg-purple-200">Home</a>
            <a href="{{route('checkout')}}" class="px-5 py-2 bg-white text-gray-700 rounded-full font-semibold transition transform hover:-translate-y-1 hover:bg-purple-200">Checkout</a>
            <a href="{{route('cart')}}" class="px-5 py-2 bg-white text-gray-700 rounded-full font-semibold transition transform hover:-translate-y-1 hover:bg-purple-200">Cart</a>
        </nav>

        <!-- Admin Button in Top Right -->
        <a href="{{route('backpage.panel')}}" 
           class="absolute top-5 right-5 px-5 py-2 bg-purple-600 text-white rounded-full font-semibold shadow-lg transition transform hover:-translate-y-1 hover:bg-purple-500">
            Admin
        </a>
    </header>
    
    <main class="p-10">
        {{$slot}}
    </main>

    <footer class="bg-gray-800 text-white py-6 mt-10">
        <div class="text-center">
            <p class="text-sm font-light">&copy; 2024 Rental Store. All rights reserved.</p>
            <p class="mt-2">
                <a href="#" class="text-purple-400 hover:underline">Privacy Policy</a>
                <span class="mx-2">|</span>
                <a href="#" class="text-purple-400 hover:underline">Terms of Service</a>
            </p>
        </div>
    </footer>

</body>
</html>
