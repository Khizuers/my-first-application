<x-layout>
    <x-slot:heading>
        🍴 Contact QuickBite
    </x-slot:heading>

    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12">
        
        <!-- Left: Contact Info -->
        <div class="space-y-6">
            <h2 class="text-3xl font-bold text-orange-600">We’d Love to Hear From You!</h2>
            <p class="text-gray-600">
                Got a craving, suggestion, or question about QuickBite?  
                Reach out and we’ll serve you a quick response 🍕✨
            </p>

            <div class="space-y-5">
                <div class="flex items-center gap-3">
                    <span class="text-orange-500 text-2xl">📍</span>
                    <p class="text-gray-700">123 Food Street, Manila, PH</p>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-orange-500 text-2xl">📧</span>
                    <p class="text-gray-700">support@quickbite.com</p>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-orange-500 text-2xl">📞</span>
                    <p class="text-gray-700">+63 912 345 6789</p>
                </div>
            </div>

            <!-- Social Links -->
            <div class="flex gap-4 mt-8">
                <a href="#" class="text-gray-500 hover:text-orange-600 text-2xl">🌐</a>
                <a href="#" class="text-gray-500 hover:text-orange-600 text-2xl">🐦</a>
                <a href="#" class="text-gray-500 hover:text-orange-600 text-2xl">📘</a>
                <a href="#" class="text-gray-500 hover:text-orange-600 text-2xl">📸</a>
            </div>
        </div>

        <!-- Right: Contact Form -->
        <div class="bg-white shadow-xl rounded-2xl p-8 border border-orange-100">
            <h3 class="text-2xl font-semibold text-gray-900 mb-6">Send Us a Message 🍔</h3>
            
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                    <input type="text" name="name"
                           placeholder="Enter your full name"
                           class="w-full px-4 py-3 border rounded-lg focus:ring-orange-500 focus:border-orange-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" name="email"
                           placeholder="Enter your email"
                           class="w-full px-4 py-3 border rounded-lg focus:ring-orange-500 focus:border-orange-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                    <textarea name="message" rows="5"
                              placeholder="What’s on your mind?"
                              class="w-full px-4 py-3 border rounded-lg focus:ring-orange-500 focus:border-orange-500"></textarea>
                </div>
                <div>
                    <button type="submit"
                            class="w-full bg-orange-500 text-white px-6 py-3 rounded-lg font-medium hover:bg-orange-600 transition">
                        🚀 Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
