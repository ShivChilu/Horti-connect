<?php include 'includes/header.php'; ?>
<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row gap-6">
        <!-- Storage Navigation -->
        <!-- <div class="w-full md:w-1/4 bg-white dark:bg-gray-800 rounded-lg shadow p-4 h-fit sticky top-24">
            <h3 class="text-lg font-bold mb-4 text-gray-800 dark:text-white">Storage Solutions</h3>
            
            <ul class="space-y-2">
                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg bg-green-100 dark:bg-gray-700 text-green-800 dark:text-green-400">
                        <i class="fas fa-warehouse mr-3 text-green-600 dark:text-green-400"></i>
                        <span>Find Storage</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300">
                        <i class="fas fa-calendar-alt mr-3 text-gray-500 dark:text-gray-400"></i>
                        <span>My Bookings</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300">
                        <i class="fas fa-chart-line mr-3 text-gray-500 dark:text-gray-400"></i>
                        <span>Storage Analytics</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300">
                        <i class="fas fa-question-circle mr-3 text-gray-500 dark:text-gray-400"></i>
                        <span>Storage Guide</span>
                    </a>
                </li>
            </ul>
            
            <div class="mt-6 p-4 bg-blue-50 dark:bg-gray-700 rounded-lg">
                <h4 class="text-sm font-medium text-blue-800 dark:text-blue-400 mb-2">Need urgent storage?</h4>
                <p class="text-xs text-blue-600 dark:text-blue-300 mb-3">We can help you find available cold storage near you.</p>
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md text-sm transition duration-300">
                    Emergency Storage
                </button>
            </div>
        </div> -->
        
        <!-- Main Content -->
        <div class="w-full md:full">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 mb-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Available Storage Facilities</h2>
                    
                    <div class="flex items-center space-x-2 mt-4 md:mt-0">
                        <div class="relative">
                            <!-- <input type="text" placeholder="Search location..." class="pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white text-sm w-full md:w-64"> -->
                            <!-- <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i> -->
                        </div>
                    </div>
                </div>
                
                <!-- Storage Map -->
                <!-- <div class="h-64 bg-gray-200 dark:bg-gray-700 rounded-lg mb-6 relative overflow-hidden"> -->
                    <!-- This would be replaced with an actual map component -->
                    <!-- <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center p-4 bg-white dark:bg-gray-600 bg-opacity-90 rounded-lg shadow">
                            <i class="fas fa-map-marked-alt text-3xl text-green-600 dark:text-green-400 mb-2"></i>
                            <p class="text-sm text-gray-700 dark:text-gray-200">Interactive map of storage facilities</p>
                        </div>
                    </div>
                </div> -->
                
                <!-- Storage Filters -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Storage Type</label>
                        <select class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white text-sm">
                            <option>All Types</option>
                            <option>Cold Storage</option>
                            <option>Controlled Atmosphere</option>
                            <option>Warehouse</option>
                            <option>Refrigerated</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Capacity (kg)</label>
                        <select class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white text-sm">
                            <option>Any Capacity</option>
                            <option>0-500 kg</option>
                            <option>500-2000 kg</option>
                            <option>2000-5000 kg</option>
                            <option>5000+ kg</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Duration</label>
                        <select class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white text-sm">
                            <option>Any Duration</option>
                            <option>1-7 days</option>
                            <option>1-4 weeks</option>
                            <option>1-6 months</option>
                            <option>6+ months</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Sort By</label>
                        <select class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white text-sm">
                            <option>Best Match</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Distance</option>
                        </select>
                    </div>
                </div>
                
                <!-- Storage Listings -->
                <div class="space-y-4">
                    <!-- Storage Facility 1 -->
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-1/3 h-48 bg-gray-200 dark:bg-gray-600 relative">
                                <img src="assets/images/greenvalley.png" alt="Cold Storage" class="w-full h-full object-cover">
                                <div class="absolute top-2 left-2 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded">
                                    Verified
                                </div>
                            </div>
                            <div class="md:w-2/3 p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">Green Valley Cold Storage</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-300 mb-2">
                                            <i class="fas fa-map-marker-alt text-green-600 dark:text-green-400 mr-1"></i> 
                                            Jalandhar, Punjab (12 km away)
                                        </p>
                                    </div>
                                    <div class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs font-bold px-2 py-1 rounded">
                                        4.8 ★
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-2 gap-4 mt-4">
                                    <div>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Storage Type</p>
                                        <p class="text-sm font-medium text-gray-700 dark:text-gray-200">Cold Storage</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Capacity Available</p>
                                        <p class="text-sm font-medium text-gray-700 dark:text-gray-200">800 kg</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Temperature Range</p>
                                        <p class="text-sm font-medium text-gray-700 dark:text-gray-200">2°C to 8°C</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Price</p>
                                        <p class="text-sm font-medium text-gray-700 dark:text-gray-200">₹15/kg/week</p>
                                    </div>
                                </div>
                                
                                <div class="mt-4 flex flex-col sm:flex-row sm:items-center sm:justify-between">
                                    <div class="flex items-center">
                                        <i class="fas fa-check-circle text-green-600 dark:text-green-400 mr-2"></i>
                                        <span class="text-xs text-gray-600 dark:text-gray-300">24/7 Monitoring • Insurance Available</span>
                                    </div>
                                    <button class="mt-2 sm:mt-0 bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md text-sm transition duration-300">
                                        Book Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Storage Facility 2 -->
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-1/3 h-48 bg-gray-200 dark:bg-gray-600 relative">
                                <img src="assets/images/agrofresh.png" alt="Warehouse" class="w-full h-full object-cover">
                            </div>
                            <div class="md:w-2/3 p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">AgroFresh Storage</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-300 mb-2">
                                            <i class="fas fa-map-marker-alt text-green-600 dark:text-green-400 mr-1"></i> 
                                            Ludhiana, Punjab (25 km away)
                                        </p>
                                    </div>
                                    <div class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs font-bold px-2 py-1 rounded">
                                        4.5 ★
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-2 gap-4 mt-4">
                                    <div>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Storage Type</p>
                                        <p class="text-sm font-medium text-gray-700 dark:text-gray-200">Controlled Atmosphere</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Capacity Available</p>
                                        <p class="text-sm font-medium text-gray-700 dark:text-gray-200">1500 kg</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Temperature Range</p>
                                        <p class="text-sm font-medium text-gray-700 dark:text-gray-200">0°C to 15°C</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Price</p>
                                        <p class="text-sm font-medium text-gray-700 dark:text-gray-200">₹20/kg/week</p>
                                    </div>
                                </div>
                                
                                <div class="mt-4 flex flex-col sm:flex-row sm:items-center sm:justify-between">
                                    <div class="flex items-center">
                                        <i class="fas fa-check-circle text-green-600 dark:text-green-400 mr-2"></i>
                                        <span class="text-xs text-gray-600 dark:text-gray-300">Humidity Control • Security</span>
                                    </div>
                                    <button class="mt-2 sm:mt-0 bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md text-sm transition duration-300">
                                        Book Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- More storage facilities can be added here -->
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
            
            <!-- Storage Tips Section -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Storage Tips for Your Crops</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-green-50 dark:bg-gray-700 p-4 rounded-lg">
                        <div class="flex items-start">
                            <div class="p-2 bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-400 rounded-full mr-3">
                                <i class="fas fa-temperature-low"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-green-800 dark:text-green-400 mb-1">Temperature Control</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-300">Maintain optimal temperatures to extend shelf life. Most vegetables require 0-4°C while fruits need 4-8°C.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-50 dark:bg-gray-700 p-4 rounded-lg">
                        <div class="flex items-start">
                            <div class="p-2 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full mr-3">
                                <i class="fas fa-tint"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-blue-800 dark:text-blue-400 mb-1">Humidity Management</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-300">Most crops need 85-95% humidity. Use humidifiers or moisture barriers as needed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-yellow-50 dark:bg-gray-700 p-4 rounded-lg">
                        <div class="flex items-start">
                            <div class="p-2 bg-yellow-100 dark:bg-yellow-900 text-yellow-600 dark:text-yellow-400 rounded-full mr-3">
                                <i class="fas fa-wind"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-yellow-800 dark:text-yellow-400 mb-1">Ventilation</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-300">Ensure proper air circulation to prevent condensation and mold growth.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-purple-50 dark:bg-gray-700 p-4 rounded-lg">
                        <div class="flex items-start">
                            <div class="p-2 bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-400 rounded-full mr-3">
                                <i class="fas fa-boxes"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-purple-800 dark:text-purple-400 mb-1">Packaging</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-300">Use breathable packaging materials to maintain quality during storage.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-6">
                    <button class="flex items-center text-green-600 dark:text-green-400 hover:text-green-800 dark:hover:text-green-300">
                        <i class="fas fa-book mr-2"></i>
                        <!-- <span>View Complete Storage Guide</span> -->
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>