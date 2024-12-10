<x-home-layout>
    <h2 class="text-3xl font-bold text-center mb-5 p-1/2 text-gray-700">Available Items for Rent</h2>
    <div class="flex flex-wrap justify-center gap-8">
        @foreach ($datas as $item)
            <div class="p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition hover:border-gray-400 border-transparent border-2 w-[10px] h-[10px]">
                <h3 class="text-2xl font-semibold mb-4 text-gray-800">{{ $item->name }}</h3>
                <div class="overflow-hidden border border-purple-300 rounded-xl shadow-lg">
                <img src="{{ asset($item->path . $item->image) }}" alt="Image"
                        class="w-full h-48 object-cover transform hover:scale-105 transition duration-500 ease-in-out">
                </div>
                <p class="mt-4 text-gray-500">{{ $item->description }}</p>
                <a href="{{ route('product.itemdetails', ['id' => $item->id]) }}" 
                    class="mt-4 inline-block text-purple-700 font-semibold hover:text-purple-900 transition">View Details</a>
            </div>
        @endforeach
    </div>

    <div class="mt-8 text-center">
        {{ $datas->links() }} 
    </div>
</x-home-layout>
