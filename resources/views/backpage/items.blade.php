<x-admin-layout>
    <main>
        <h1 class="text-4xl font-bold mb-6 text-gray-800">Manage Items</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Search, Filter, and Bulk Delete -->
        <div class="flex flex-col md:flex-row md:justify-between items-center mb-6 space-y-4 md:space-y-0">
            <!-- Search and Filter -->
            <div class="flex items-center space-x-4 w-full">
                <!-- Search Input -->
                <input type="text" name="search" id="searchInput" placeholder="Search items..."
                    class="border rounded-lg p-2 w-full md:w-1/3 focus:outline-none focus:ring-2 focus:ring-purple-600"
                    value="{{ request('search') }}">

                <!-- Filter Dropdown -->
                <form class="flex items-center space-x-2">
                    <select name="filter"
                        class="bg-gray-100 border border-gray-300 text-sm text-gray-700 py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-700">
                        <option value="" disabled selected>All Price</option>
                        <option value="5">Kurang dari 50,000</option>
                        <option value="4">Kurang dari 100,000</option>
                        <option value="3">Kurang dari 500,000</option>
                    </select>
                    <button type="submit"
                        class="bg-blue-600 text-white py-2 px-4 text-sm rounded-md hover:bg-purple-800 transition">
                        Search
                    </button>
                </form>
            </div>

            <!-- Bulk Delete Form -->
            <form id="deleteSelectedForm" action="{{ route('products.bulkDelete') }}" method="POST"
                class="flex space-x-2">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deleteSelectedItems()"
                    class="px-4 py-2 bg-red-600 text-white rounded-lg font-semibold transition hover:bg-red-700">
                    Delete Selected
                </button>
                <input type="hidden" name="selected_ids" id="selected_ids">
            </form>
        </div>

        <!-- Add New Item Button -->
        <a href="{{ route('backpage.formadd') }}"
            class="absolute top-4 right-4 px-5 py-2 bg-purple-600 text-white rounded-full font-semibold transition transform hover:bg-purple-700">
            Add New Item
        </a>

        <!-- Items Table -->
        <table id="itemsTable" class="table-auto w-full text-left bg-white rounded-lg shadow-lg overflow-hidden">
            <thead class="bg-purple-600 text-white">
                <tr>
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2 text-center">Actions</th>
                    <th class="px-4 py-2 text-center">Select</th>
                </tr>
            </thead>
            <tbody>
                <?php $idx = ($datas->currentPage() - 1) * $datas->perPage() + 1; ?>
                @foreach ($datas as $product)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $idx++ }}</td>
                        <td class="px-4 py-2">{{ $product->name }}</td>
                        <td class="px-4 py-2">{{ $product->description }}</td>
                        <td class="px-4 py-2">{{ $product->price_per_day }}</td>
                        <td class="px-4 py-2">
                            @if ($product->image)
                                <img src="{{ asset($product->path . $product->image) }}" alt="Image"
                                    class="h-12 w-12 rounded-md">
                            @else
                                No Image
                            @endif
                        </td>
                        <td class="px-5 py-3 text-center">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('backpage.formedit', $product->id) }}"
                                    class="px-3 py-1 bg-blue-500 text-white rounded-md text-sm font-semibold transition hover:bg-blue-600">
                                    Edit
                                </a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-3 py-1 bg-red-500 text-white rounded-md text-sm font-semibold transition hover:bg-red-600"
                                        onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center">
                            <input type="checkbox" name="selected_products[]" value="{{ $product->id }}"
                                class="form-checkbox product-checkbox">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="mt-6 flex justify-center space-x-4 items-center">
            <!-- Previous Page -->
            @if ($datas->onFirstPage())
                <button class="px-4 py-2 bg-gray-400 text-white rounded-lg font-semibold cursor-not-allowed">
                    Previous
                </button>
            @else
                <a href="{{ $datas->appends(request()->query())->previousPageUrl() }}"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold transition hover:bg-blue-700">
                    Previous
                </a>
            @endif

            <!-- Page Info -->
            <span class="text-white font-semibold">
                Page {{ $datas->currentPage() }} of {{ $datas->lastPage() }}
            </span>

            <!-- Next Page -->
            @if ($datas->hasMorePages())
                <a href="{{ $datas->appends(request()->query())->nextPageUrl() }}"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold transition hover:bg-blue-700">
                    Next
                </a>
            @else
                <button class="px-4 py-2 bg-gray-400 text-white rounded-lg font-semibold cursor-not-allowed">
                    Next
                </button>
            @endif
        </div>

        <script src="{{ asset('assets/js/admin.js') }}"></script>
    </main>
</x-admin-layout>