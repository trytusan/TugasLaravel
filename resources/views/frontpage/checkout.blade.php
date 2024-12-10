<x-home-layout>
    <section class="p-10">
        <div class="bg-white p-10 rounded-3xl shadow-xl max-w-lg mx-auto">
            <h2 class="text-3xl font-bold text-center text-gray-700">Enter Payment Details</h2>
            <form action="confirm.html" method="post" class="space-y-6 mt-8">
                <div>
                    <label for="name" class="block text-gray-700 font-semibold">Name:</label>
                    <input type="text" id="name" name="name"
                        class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-purple-500"
                        required>
                </div>
                <div>
                    <label for="address" class="block text-gray-700 font-semibold">Address:</label>
                    <input type="text" id="address" name="address"
                        class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-purple-500"
                        required>
                </div>
                <div>
                    <label for="payment" class="block text-gray-700 font-semibold">Payment Method:</label>
                    <select id="payment" name="payment"
                        class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="dana">DANA</option>
                        <option value="gopay">GOPAY</option>
                    </select>
                </div>
                <button type="submit"
                    class="w-full bg-gradient-to-r from-gray-700 to-gray-800 text-white py-3 rounded-full hover:from-gray-600 hover:to-gray-700 transition transform hover:-translate-y-1">Confirm
                    Rental</button>
            </form>
        </div>
    </section>
</x-home-layout>