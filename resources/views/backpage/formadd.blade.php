<x-admin-layout>
        <h2 class="text-3xl font-extrabold text-purple-800 mb-6 text-center">Add New Item</h2>
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Name Input -->
            <div>
                <label for="add_name" class="block text-purple-900 font-bold mb-2">Name:</label>
                <input type="text" id="add_name" name="name"
                    class="w-full border border-purple-300 rounded-lg p-3 focus:ring focus:ring-purple-400 focus:outline-none"
                    required>
            </div>

            <!-- Description Input -->
            <div>
                <label for="add_description" class="block text-purple-900 font-bold mb-2">Description:</label>
                <textarea id="add_description" name="description"
                    class="w-full border border-purple-300 rounded-lg p-3 focus:ring focus:ring-purple-400 focus:outline-none"
                    required></textarea>
            </div>

            <!-- Price per Day Input -->
            <div>
                <label for="add_price_per_day" class="block text-purple-900 font-bold mb-2">Price per Day:</label>
                <input type="number" id="add_price_per_day" name="price_per_day"
                    class="w-full border border-purple-300 rounded-lg p-3 focus:ring focus:ring-purple-400 focus:outline-none"
                    required>
            </div>

            <!-- Image Input -->
            <div>
                <label for="add_image" class="block text-purple-900 font-bold mb-2">Image:</label>
                <input type="file" id="add_image" name="image"
                    class="w-full border border-purple-300 rounded-lg p-3 focus:ring focus:ring-purple-400 focus:outline-none">
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-between items-center">
                <a href="{{ route('products.index') }}"
                    class="px-4 py-2 bg-gray-500 text-white rounded-md transition hover:bg-gray-600">
                    Cancel
                </a>
                <button type="submit"
                    class="px-6 py-3 bg-purple-600 text-white rounded-md font-bold shadow-md transition hover:bg-purple-700">
                    Save
                </button>
            </div>
        </form>
</x-admin-layout>