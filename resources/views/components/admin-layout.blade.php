<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white flex flex-col shadow-xl">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-700">
            <h2 class="text-2xl font-bold text-center">Admin Panel</h2>
        </div>

        <!-- Navigation Links -->
        <nav class="flex-grow px-6 mt-4 space-y-2">
            <!-- Dashboard -->
            <a href="{{ route('panel') }}" class="flex items-center gap-3 px-4 py-2 rounded-lg 
                {{ request()->routeIs('panel') ? 'bg-gray-700' : 'hover:bg-gray-600' }} 
                transition duration-200 ease-in-out">
                <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 10h11M9 21h6M4 3h16c1.105 0 2 .895 2 2v14c0 1.105-.895 2-2 2H4c-1.105 0-2-.895-2-2V5c0-1.105.895-2 2-2z" />
                </svg>
                <span class="font-medium">Dashboard</span>
            </a>

            <!-- Items -->
            <a href="{{ route('items') }}" class="flex items-center gap-3 px-4 py-2 rounded-lg 
                {{ request()->routeIs('items') ? 'bg-gray-700' : 'hover:bg-gray-600' }} 
                transition duration-200 ease-in-out">
                <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 9v10M8 9v10M3 5h18l-1 14H4L3 5zm4 0V3a1 1 0 011-1h8a1 1 0 011 1v2" />
                </svg>
                <span class="font-medium">Items</span>
            </a>

            <!-- Orders -->
            <a href="{{ route('orders') }}" class="flex items-center gap-3 px-4 py-2 rounded-lg 
                {{ request()->routeIs('orders') ? 'bg-gray-700' : 'hover:bg-gray-600' }} 
                transition duration-200 ease-in-out">
                <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l4 4L7 9l-4-4z" />
                </svg>
                <span class="font-medium">Orders</span>
            </a>
        </nav>

        <!-- Back to Buyers Button -->
        <div class="px-6 py-4 border-t border-gray-700">
            <a href="{{ route('landing') }}"
                class="w-full block text-center px-4 py-2 bg-blue-500 text-white rounded-lg font-bold transition hover:bg-blue-600">
                Back to Buyers
            </a>
        </div>

    </aside>
    <main class="flex-grow p-6 bg-gradient-to-b from-purple-100 to-purple-700 overflow-y-auto">
        {{$slot}}
    </main>
</body>

</html>