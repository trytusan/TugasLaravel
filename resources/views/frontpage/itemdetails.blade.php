<x-home-layout>
    <section class="p-10 flex justify-center">
        <div class="bg-white p-10 rounded-3xl shadow-xl max-w-lg">
            <img src="{{ asset($product->path . $product->image) }}" alt="Image"
                class="w-full h-64 object-cover rounded-xl mb-6">
            <h2 class="text-3xl font-bold text-gray-700">{{ $product['name'] }}</h2>
            <p class="mt-6 text-gray-600">{{ $product['description'] }}</p>
            <p class="mt-8 text-xl font-semibold text-gray-700">Price: <span class="text-purple-500">{{ number_format($product['price_per_day'], 0, ',', '.') }} per day</span></p>
            <button onclick="addToCart({{ $product['id'] }})"
                class="mt-8 w-full bg-gradient-to-r from-gray-700 to-gray-800 text-white py-3 rounded-full hover:from-gray-600 hover:to-gray-700 transition">Add
                to Cart</button>
        </div>
    </section>
    <script>
        function addToCart(productId) {
            alert(`Product ID ${productId} added to cart!`);
        }
    </script>
</x-home-layout>
