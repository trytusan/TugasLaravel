<x-admin-layout>
    <main class="flex-1 p-6 bg-gradient-to-r from-purple-100 to-purple-700 overflow-auto">
        <h1 class="text-4xl font-bold mb-6 text-gray-800">Manage Orders</h1>

        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="w-full table-auto">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">Order ID</th>
                        <th class="px-6 py-3 text-left">User</th>
                        <th class="px-6 py-3 text-left">Total Items</th>
                        <th class="px-6 py-3 text-left">Status</th>
                        <th class="px-6 py-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr>
                        <td class="px-6 py-4">#ORD123</td>
                        <td class="px-6 py-4">John Doe</td>
                        <td class="px-6 py-4">3</td>
                        <td class="px-6 py-4">
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full">Pending</span>
                        </td>
                        <td class="px-6 py-4">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">View</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">#ORD124</td>
                        <td class="px-6 py-4">Alice Smith</td>
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full">Completed</span>
                        </td>
                        <td class="px-6 py-4">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">View</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">#ORD125</td>
                        <td class="px-6 py-4">Michael Johnson</td>
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">
                            <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full">Overdue</span>
                        </td>
                        <td class="px-6 py-4">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">View</button>
                        </td>
                </tbody>
            </table>
        </div>
        <div id="orderDetailModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-white p-6 rounded-lg w-1/2 max-w-4xl">
                <h2 class="text-2xl font-bold mb-4">Order #ORD123 Details</h2>
                <div class="space-y-4">
                    <p><strong>User:</strong> John Doe</p>
                    <p><strong>Items:</strong> Mountain Bike, Tent, Sleeping Bag</p>
                    <p><strong>Rent Duration:</strong> 3 Days</p>
                    <p><strong>Total Price:</strong> $120.00</p>
                    <p><strong>Status:</strong> Pending</p>
                    <div class="mt-4 flex gap-4">
                        <button class="bg-green-500 text-white px-4 py-2 rounded-lg">Mark as Completed</button>
                        <button class="bg-red-500 text-white px-4 py-2 rounded-lg">Cancel Order</button>
                    </div>
                    <button id="closeModalBtn" class="mt-4 bg-gray-500 text-white px-4 py-2 rounded-lg">Close</button>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>