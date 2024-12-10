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
    </main> 
</x-admin-layout>