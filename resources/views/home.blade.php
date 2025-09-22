<x-layout>
    <x-slot:heading>
        🍔 Welcome to QuickBite
    </x-slot:heading>

    <div class="max-w-6xl mx-auto text-center space-y-8">
        <h1 class="text-4xl font-extrabold text-orange-600">
            Fast, Fresh, and Delicious!
        </h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Order your favorite meals in just a few clicks.  
            QuickBite brings tasty food straight to your door 🚀.
        </p>

        <!-- Featured Food Section -->
        <div class="grid md:grid-cols-3 gap-8 mt-10">
            <div class="bg-white rounded-xl shadow-md p-6 hover:scale-105 transition">
                <img src="https://source.unsplash.com/300x200/?burger" class="rounded-lg w-full mb-4">
                <h3 class="text-xl font-bold">Juicy Burgers</h3>
                <p class="text-gray-600">Made with 100% fresh beef and love 🍔.</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 hover:scale-105 transition">
                <img src="https://source.unsplash.com/300x200/?pizza" class="rounded-lg w-full mb-4">
                <h3 class="text-xl font-bold">Cheesy Pizza</h3>
                <p class="text-gray-600">Hot, cheesy, and packed with flavor 🍕.</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 hover:scale-105 transition">
                <img src="https://source.unsplash.com/300x200/?fries" class="rounded-lg w-full mb-4">
                <h3 class="text-xl font-bold">Crispy Fries</h3>
                <p class="text-gray-600">Golden, crunchy, and simply irresistible 🍟.</p>
            </div>
        </div>
    </div>
</x-layout>
