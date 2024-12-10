<x-admin-layout>
    @foreach ($datas as $product)
                <h2 class="text-3xl font-extrabold text-purple-800 mb-6 text-center">Edit Item: {{ $product->name }}</h2>
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data"
                    class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Name Input -->
                    <div>
                        <label for="name" class="block text-purple-900 font-bold mb-2">Name:</label>
                        <input type="text" id="name" name="name" value="{{ $product->name }}"
                            class="w-full border border-purple-300 rounded-lg p-3 focus:ring focus:ring-purple-400 focus:outline-none"
                            required>
                    </div>

                    <!-- Description Input -->
                    <div>
                        <label for="description" class="block text-purple-900 font-bold mb-2">Description:</label>
                        <textarea id="description" name="description"
                            class="w-full border border-purple-300 rounded-lg p-3 focus:ring focus:ring-purple-400 focus:outline-none"
                            required>{{ $product->description }}</textarea>
                    </div>

                    <!-- Price per Day Input -->
                    <div>
                        <label for="price_per_day" class="block text-purple-900 font-bold mb-2">Price per Day:</label>
                        <input type="number" id="price_per_day" name="price_per_day" value="{{ $product->price_per_day }}"
                            class="w-full border border-purple-300 rounded-lg p-3 focus:ring focus:ring-purple-400 focus:outline-none"
                            required>
                    </div>

                    <!-- Image Input -->
                    <div>
                        <label for="image" class="block text-purple-900 font-bold mb-2">Image:</label>
                        <input type="file" id="image" name="image"
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
    @endforeach
</x-admin-layout>