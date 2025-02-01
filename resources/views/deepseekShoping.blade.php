<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Cards</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Product Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="relative">
                    <img src="https://via.placeholder.com/400x300" alt="Product" class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-red-500 text-white px-3 py-1 rounded-full text-sm">
                        Sale!
                    </span>
                </div>
                
                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-semibold text-gray-800">Wireless Headphones</h3>
                        <span class="text-lg font-bold text-blue-600">$199.99</span>
                    </div>
                    
                    <div class="mt-2 flex items-center">
                        <div class="flex text-yellow-400">
                            ★★★★★
                        </div>
                        <span class="text-gray-600 ml-2">(150 reviews)</span>
                    </div>
                    
                    <p class="mt-4 text-gray-600">
                        Premium noise-canceling wireless headphones with 30-hour battery life.
                    </p>
                    
                    <button class="mt-6 w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="relative">
                    <img src="https://via.placeholder.com/400x300" alt="Product" class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-green-500 text-white px-3 py-1 rounded-full text-sm">
                        New
                    </span>
                </div>
                
                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-semibold text-gray-800">Smart Watch Pro</h3>
                        <div class="flex flex-col items-end">
                            <span class="text-lg font-bold text-blue-600">$299.99</span>
                            <span class="text-sm text-gray-400 line-through">$349.99</span>
                        </div>
                    </div>
                    
                    <div class="mt-2 flex items-center">
                        <div class="flex text-yellow-400">
                            ★★★★☆
                        </div>
                        <span class="text-gray-600 ml-2">(89 reviews)</span>
                    </div>
                    
                    <p class="mt-4 text-gray-600">
                        Fitness tracking, heart rate monitor, and smartphone notifications.
                    </p>
                    
                    <button class="mt-6 w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="relative">
                    <img src="https://via.placeholder.com/400x300" alt="Product" class="w-full h-48 object-cover">
                </div>
                
                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-semibold text-gray-800">Wireless Keyboard</h3>
                        <span class="text-lg font-bold text-blue-600">$79.99</span>
                    </div>
                    
                    <div class="mt-2 flex items-center">
                        <div class="flex text-yellow-400">
                            ★★★★★
                        </div>
                        <span class="text-gray-600 ml-2">(204 reviews)</span>
                    </div>
                    
                    <p class="mt-4 text-gray-600">
                        Slim design mechanical keyboard with RGB backlighting.
                    </p>
                    
                    <button class="mt-6 w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition-colors duration-200">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>