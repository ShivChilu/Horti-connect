<?php include 'includes/header.php'; ?>
<script src="https://cdn.tailwindcss.com"></script>
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row gap-6">
        <!-- Value Addition Navigation -->
        <!-- <div class="w-full md:w-1/4 bg-white dark:bg-gray-800 rounded-lg shadow p-4 h-fit sticky top-24">
            <h3 class="text-lg font-bold mb-4 text-gray-800 dark:text-white">Value Addition</h3>
            
            <ul class="space-y-2">
                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg bg-green-100 dark:bg-gray-700 text-green-800 dark:text-green-400">
                        <i class="fas fa-lightbulb mr-3 text-green-600 dark:text-green-400"></i>
                        <span>Ideas & Techniques</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300">
                        <i class="fas fa-calculator mr-3 text-gray-500 dark:text-gray-400"></i>
                        <span>Profit Calculator</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300">
                        <i class="fas fa-industry mr-3 text-gray-500 dark:text-gray-400"></i>
                        <span>Processing Units</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300">
                        <i class="fas fa-book mr-3 text-gray-500 dark:text-gray-400"></i>
                        <span>Training & Guides</span>
                    </a>
                </li>
            </ul>
            
            <div class="mt-6 p-4 bg-purple-50 dark:bg-gray-700 rounded-lg">
                <h4 class="text-sm font-medium text-purple-800 dark:text-purple-400 mb-2">Need help with processing?</h4>
                <p class="text-xs text-purple-600 dark:text-purple-300 mb-3">Connect with our value addition experts.</p>
                <button class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 px-4 rounded-md text-sm transition duration-300">
                    Contact Expert
                </button>
            </div>
        </div> -->
        
        <!-- Main Content -->
        <div class="w-full md:w-full>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 mb-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Value Addition Ideas</h2>
                    
                    <div class="flex items-center space-x-2 mt-4 md:mt-0">
                        <div class="relative">
                            <input type="text" placeholder="Search by crop..." class="pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white text-sm w-full md:w-64">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Value Addition Categories -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    <!-- Category 1 -->
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300 group">
                        <div class="h-48 bg-gray-200 dark:bg-gray-600 relative overflow-hidden">
                            <img src="assets/images/dryfruits.png" alt="Dried Fruits" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                            <h3 class="absolute bottom-4 left-4 text-xl font-bold text-white">Drying & Dehydration</h3>
                        </div>
                        <div class="p-4">
                            <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Extend shelf life and create new products like dried fruits, vegetables, and herbs.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xs text-gray-500 dark:text-gray-400">12 techniques</span>
                                <button class="text-green-600 dark:text-green-400 hover:text-green-800 dark:hover:text-green-300 text-sm font-medium">
                                    Explore <i class="fas fa-chevron-right ml-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category 2 -->
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300 group">
                        <div class="h-48 bg-gray-200 dark:bg-gray-600 relative overflow-hidden">
                            <img src="assets/images/jammaking.png" alt="Jam Making" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                            <h3 class="absolute bottom-4 left-4 text-xl font-bold text-white">Processing & Canning</h3>
                        </div>
                        <div class="p-4">
                            <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Create jams, pickles, sauces, and canned goods from fresh produce.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xs text-gray-500 dark:text-gray-400">8 techniques</span>
                                <button class="text-green-600 dark:text-green-400 hover:text-green-800 dark:hover:text-green-300 text-sm font-medium">
                                    Explore <i class="fas fa-chevron-right ml-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category 3 -->
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300 group">
                        <div class="h-48 bg-gray-200 dark:bg-gray-600 relative overflow-hidden">
                            <img src="assets/images/extraction.png" alt="Essential Oils" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                            <h3 class="absolute bottom-4 left-4 text-xl font-bold text-white">Extraction</h3>
                        </div>
                        <div class="p-4">
                            <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Produce essential oils, juices, and concentrates from crops.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xs text-gray-500 dark:text-gray-400">5 techniques</span>
                                <button class="text-green-600 dark:text-green-400 hover:text-green-800 dark:hover:text-green-300 text-sm font-medium">
                                    Explore <i class="fas fa-chevron-right ml-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Popular Value Addition Techniques -->
                <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Popular Techniques</h3>
                
                <div class="space-y-4">
                    <!-- Technique 1 -->
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-1/4 h-48 bg-gray-200 dark:bg-gray-600">
                                <img src="assets/images/tomatopaste.png" alt="Tomato Paste" class="w-full h-full object-cover">
                            </div>
                            <div class="md:w-3/4 p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">Tomato Paste Production</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-300 mb-2">
                                            <i class="fas fa-clock text-green-600 dark:text-green-400 mr-1"></i> 
                                            2-3 days process • 50-70% profit increase
                                        </p>
                                    </div>
                                    <div class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs font-bold px-2 py-1 rounded">
                                        Most Popular
                                    </div>
                                </div>
                                
                                <p class="text-sm text-gray-700 dark:text-gray-300 mt-2">
                                    Transform fresh tomatoes into concentrated paste that can be stored for months and sold at higher prices.
                                </p>
                                
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs rounded-full">
                                        <i class="fas fa-rupee-sign mr-1"></i> Low Investment
                                    </span>
                                    <span class="px-2 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 text-xs rounded-full">
                                        <i class="fas fa-chart-line mr-1"></i> High Demand
                                    </span>
                                    <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 text-xs rounded-full">
                                        <i class="fas fa-cogs mr-1"></i> Simple Process
                                    </span>
                                </div>
                                
                                <div class="mt-4 flex flex-col sm:flex-row sm:items-center sm:justify-between">
                                    <div class="flex items-center">
                                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                                        <span class="text-sm text-gray-600 dark:text-gray-300">4.8 (120 reviews)</span>
                                    </div>
                                    <div class="mt-2 sm:mt-0">
                                        <button class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md text-sm transition duration-300 mr-2">
                                            View Details
                                        </button>
                                        <button class="bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 text-gray-800 dark:text-white py-2 px-4 rounded-md text-sm transition duration-300">
                                            Save for Later
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Technique 2 -->
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-1/4 h-48 bg-gray-200 dark:bg-gray-600">
                                <img src="assets/images/potatochips.png" alt="Potato Chips" class="w-full h-full object-cover">
                            </div>
                            <div class="md:w-3/4 p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">Potato Chips Manufacturing</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-300 mb-2">
                                            <i class="fas fa-clock text-green-600 dark:text-green-400 mr-1"></i> 
                                            1-2 days process • 100-150% profit increase
                                        </p>
                                    </div>
                                    <div class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs font-bold px-2 py-1 rounded">
                                        Trending
                                    </div>
                                </div>
                                
                                <p class="text-sm text-gray-700 dark:text-gray-300 mt-2">
                                    Turn potatoes into crispy chips with various flavors to cater to local markets and retailers.
                                </p>
                                
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs rounded-full">
                                        <i class="fas fa-rupee-sign mr-1"></i> Medium Investment
                                    </span>
                                    <span class="px-2 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 text-xs rounded-full">
                                        <i class="fas fa-chart-line mr-1"></i> High Demand
                                    </span>
                                    <span class="px-2 py-1 bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 text-xs rounded-full">
                                        <i class="fas fa-cogs mr-1"></i> Moderate Process
                                    </span>
                                </div>
                                
                                <div class="mt-4 flex flex-col sm:flex-row sm:items-center sm:justify-between">
                                    <div class="flex items-center">
                                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                                        <span class="text-sm text-gray-600 dark:text-gray-300">4.6 (85 reviews)</span>
                                    </div>
                                    <div class="mt-2 sm:mt-0">
                                        <button class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md text-sm transition duration-300 mr-2">
                                            View Details
                                        </button>
                                        <button class="bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 text-gray-800 dark:text-white py-2 px-4 rounded-md text-sm transition duration-300">
                                            Save for Later
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- More techniques can be added here -->
                </div>
                
                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <nav class="inline-flex rounded-md shadow">
                        <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#" class="px-3 py-2 border-t border-b border-gray-300 dark:border-gray-600 bg-green-600 text-white">
                            1
                        </a>
                        <a href="#" class="px-3 py-2 border-t border-b border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600">
                            2
                        </a>
                        <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
            </div>
            
            <!-- Profit Calculator -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Value Addition Profit Calculator</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Select Crop</label>
                            <select class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white">
                                <option>Tomatoes</option>
                                <option>Potatoes</option>
                                <option>Onions</option>
                                <option>Bananas</option>
                                <option>Mangoes</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Select Value Addition Technique</label>
                            <select class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white">
                                <option>Tomato Paste</option>
                                <option>Tomato Sauce</option>
                                <option>Sun-Dried Tomatoes</option>
                                <option>Tomato Juice</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Input Quantity (kg)</label>
                            <input type="number" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white" placeholder="e.g. 100">
                        </div>
                        
                        <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md transition duration-300">
                            Calculate Profit Potential
                        </button>
                    </div>
                    
                    <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                        <h4 class="text-lg font-bold text-gray-800 dark:text-white mb-2">Estimated Results</h4>
                        
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600 dark:text-gray-300">Current Market Price:</span>
                                <span class="text-sm font-medium text-gray-800 dark:text-white">₹45/kg</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600 dark:text-gray-300">Processed Product Value:</span>
                                <span class="text-sm font-medium text-gray-800 dark:text-white">₹120/kg</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600 dark:text-gray-300">Processing Cost:</span>
                                <span class="text-sm font-medium text-gray-800 dark:text-white">₹20/kg</span>
                            </div>
                            <div class="border-t border-gray-200 dark:border-gray-600 my-2"></div>
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600 dark:text-gray-300">Profit Increase:</span>
                                <span class="text-sm font-bold text-green-600 dark:text-green-400">122%</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600 dark:text-gray-300">Total Additional Profit:</span>
                                <span class="text-sm font-bold text-green-600 dark:text-green-400">₹5,500</span>
                            </div>
                        </div>
                        
                        <div class="mt-4 bg-yellow-50 dark:bg-yellow-900 p-3 rounded-lg">
                            <h5 class="text-sm font-medium text-yellow-800 dark:text-yellow-200 mb-1">Note:</h5>
                            <p class="text-xs text-yellow-700 dark:text-yellow-300">These are estimates based on average market conditions. Actual results may vary.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>