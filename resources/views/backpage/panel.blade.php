<x-admin-layout>
    <h1 class="text-4xl font-bold mb-6 text-gray-800">Dashboard</h1>

    <!-- Dashboard Stats Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Total Rental Items -->
        <div class="p-6 bg-purple-100 rounded-xl shadow-md text-center">
            <h2 class="text-2xl font-bold">Total Rental Items</h2>
            <p class="text-xl mt-2">350</p>
            <p class="text-sm text-gray-600 mt-2">Total number of items available for rent.</p>
        </div>

        <!-- Active Rentals -->
        <div class="p-6 bg-green-100 rounded-xl shadow-md text-center">
            <h2 class="text-2xl font-bold">Active Rentals</h2>
            <p class="text-xl mt-2">80</p>
            <p class="text-sm text-gray-600 mt-2">Current active rentals in progress.</p>
        </div>

        <!-- Overdue Rentals -->
        <div class="p-6 bg-red-100 rounded-xl shadow-md text-center">
            <h2 class="text-2xl font-bold">Overdue Rentals</h2>
            <p class="text-xl mt-2">5</p>
            <p class="text-sm text-gray-600 mt-2">Rentals that are overdue and need attention.</p>
        </div>
    </div>

    <!-- Additional Information Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
        <!-- Recent Activity -->
        <div class="p-6 bg-white rounded-xl shadow-md">
            <h2 class="text-2xl font-bold mb-4">Recent Rentals</h2>
            <ul class="space-y-3 text-gray-700">
                <li>Item "Mountain Bike" rented by User #123 - 2 hours ago</li>
                <li>Item "Camera" rented by User #456 - 1 day ago</li>
                <li>Item "Laptop" returned by User #789 - 2 days ago</li>
                <li>Item "Projector" rented by User #101 - 3 days ago</li>
            </ul>
        </div>

        <!-- Rental Summary -->
        <div class="p-6 bg-white rounded-xl shadow-md">
            <h2 class="text-2xl font-bold mb-4">Rental Summary</h2>
            <div class="space-y-3 text-gray-700">
                <p>Total Rentals Today: 15</p>
                <p>Total Rentals This Week: 70</p>
                <p>Returned Items This Week: 30</p>
                <p>Pending Returns: 10</p>
            </div>
        </div>
    </div>
</x-admin-layout>