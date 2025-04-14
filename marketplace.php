<?php include 'includes/header.php'; ?>
<script src="https://cdn.tailwindcss.com"></script>
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row gap-6">
        <!-- Filters Sidebar -->
        <div class="w-full md:w-1/4 bg-white dark:bg-gray-800 rounded-lg shadow p-4 h-fit sticky top-24">
            <h3 class="text-lg font-bold mb-4 text-gray-800 dark:text-white">Filters</h3>
            
            <!-- Search -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Search</label>
                <input type="text" placeholder="Search crops..." class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white">
            </div>
            
            <!-- Crop Type -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Crop Type</label>
                <select class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white">
                    <option>All Crops</option>
                    <option>Fruits</option>
                    <option>Vegetables</option>
                    <option>Flowers</option>
                    <option>Herbs</option>
                </select>
            </div>
            
            <!-- Price Range -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Price Range (₹/kg)</label>
                <div class="flex items-center space-x-2">
                    <input type="number" placeholder="Min" class="w-1/2 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white">
                    <span>-</span>
                    <input type="number" placeholder="Max" class="w-1/2 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white">
                </div>
            </div>
            
            <!-- Location -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Location</label>
                <select class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white">
                    <option>All Regions</option>
                    <option>North India</option>
                    <option>South India</option>
                    <option>East India</option>
                    <option>West India</option>
                </select>
            </div>
            
            <!-- Certification -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Certification</label>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600">
                        <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">Organic</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600">
                        <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">GAP Certified</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600">
                        <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">Fair Trade</span>
                    </label>
                </div>
            </div>
            
            <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md transition duration-300">
                Apply Filters
            </button>
        </div>
        
        <!-- Main Content -->
        <div class="w-full md:w-3/4">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 mb-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Available Crops</h2>
                    
                    <div class="flex items-center space-x-2 mt-4 md:mt-0">
                        <span class="text-sm text-gray-600 dark:text-gray-300">Sort by:</span>
                        <select class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white text-sm">
                            <option>Latest</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Popularity</option>
                        </select>
                    </div>
                </div>
                
                <!-- Crop Listings -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Crop Card 1 -->
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="relative h-48 bg-gray-200 dark:bg-gray-600">
                            <img src="assets/images/tomato.avif" alt="Tomatoes" class="w-full h-full object-cover">
                            <div class="absolute top-2 right-2 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-full">
                                Organic
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-1">Tomatoes</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mb-2">Hybrid F1 - Maharashtra</p>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold text-green-600 dark:text-green-400">₹45/kg</span>
                                <span class="text-sm text-green-600 dark:text-green-400 flex items-center">
                                    <i class="fas fa-arrow-up mr-1"></i> 12% this week
                                </span>
                            </div>
                            <div class="mt-4 pt-3 border-t border-gray-200 dark:border-gray-600">
                                <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400">
                                    <span>Available: 500kg</span>
                                    <span>Harvest: 15 Aug</span>
                                </div>
                            </div>
                            <button class="w-full mt-4 bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md transition duration-300">
                                View Details
                            </button>
                        </div>
                    </div>
                    
                    <!-- Crop Card 2 -->
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="relative h-48 bg-gray-200 dark:bg-gray-600">
                            <img src="assets/images/potato.webp" alt="Potatoes" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-1">Potatoes</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mb-2">Kufri Jyoti - Uttar Pradesh</p>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold text-green-600 dark:text-green-400">₹22/kg</span>
                                <span class="text-sm text-red-500 dark:text-red-400 flex items-center">
                                    <i class="fas fa-arrow-down mr-1"></i> 5% this week
                                </span>
                            </div>
                            <div class="mt-4 pt-3 border-t border-gray-200 dark:border-gray-600">
                                <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400">
                                    <span>Available: 1200kg</span>
                                    <span>Harvest: 5 Sep</span>
                                </div>
                            </div>
                            <button class="w-full mt-4 bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md transition duration-300">
                                View Details
                            </button>
                        </div>
                    </div>
                    
                    <!-- Crop Card 3 -->
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="relative h-48 bg-gray-200 dark:bg-gray-600">
                            <img src="assets/images/onion.jpg" alt="Onions" class="w-full h-full object-cover">
                            <div class="absolute top-2 right-2 bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded-full">
                                GAP Certified
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-1">Onions</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mb-2">Nasik Red - Karnataka</p>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold text-green-600 dark:text-green-400">₹30/kg</span>
                                <span class="text-sm text-green-600 dark:text-green-400 flex items-center">
                                    <i class="fas fa-arrow-up mr-1"></i> 8% this week
                                </span>
                            </div>
                            <div class="mt-4 pt-3 border-t border-gray-200 dark:border-gray-600">
                                <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400">
                                    <span>Available: 800kg</span>
                                    <span>Harvest: 25 Aug</span>
                                </div>
                            </div>
                            <button class="w-full mt-4 bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md transition duration-300">
                                View Details
                            </button>
                        </div>
                    </div>
                    
                    <!-- More crop cards can be added here -->
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
                        <a href="#" class="px-3 py-2 border-t border-b border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600">
                            3
                        </a>
                        <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
            </div>
            
            <!-- Price Trends Section -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Price Trends</h3>
                <div class="h-80">
                    <canvas id="priceTrendsChart"></canvas>
                </div>
                <div class="mt-4 grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="bg-green-50 dark:bg-gray-700 p-3 rounded-lg">
                        <h4 class="text-sm font-medium text-green-800 dark:text-green-400">Tomatoes</h4>
                        <p class="text-2xl font-bold">₹45 <span class="text-sm text-green-600 dark:text-green-400">+12%</span></p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Avg: ₹40 this month</p>
                    </div>
                    <div class="bg-red-50 dark:bg-gray-700 p-3 rounded-lg">
                        <h4 class="text-sm font-medium text-red-800 dark:text-red-400">Potatoes</h4>
                        <p class="text-2xl font-bold">₹22 <span class="text-sm text-red-600 dark:text-red-400">-5%</span></p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Avg: ₹24 this month</p>
                    </div>
                    <div class="bg-blue-50 dark:bg-gray-700 p-3 rounded-lg">
                        <h4 class="text-sm font-medium text-blue-800 dark:text-blue-400">Onions</h4>
                        <p class="text-2xl font-bold">₹30 <span class="text-sm text-blue-600 dark:text-blue-400">+8%</span></p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Avg: ₹28 this month</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Price Trends Chart
    const priceCtx = document.getElementById('priceTrendsChart').getContext('2d');
    const priceChart = new Chart(priceCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [
                {
                    label: 'Tomatoes (₹/kg)',
                    data: [32, 38, 42, 45, 40, 48],
                    borderColor: '#10B981',
                    backgroundColor: 'rgba(16, 185, 129, 0.05)',
                    tension: 0.4,
                    fill: true,
                    borderWidth: 2
                },
                {
                    label: 'Potatoes (₹/kg)',
                    data: [20, 22, 25, 23, 21, 19],
                    borderColor: '#F59E0B',
                    backgroundColor: 'rgba(245, 158, 11, 0.05)',
                    tension: 0.4,
                    fill: true,
                    borderWidth: 2
                },
                {
                    label: 'Onions (₹/kg)',
                    data: [25, 28, 26, 30, 32, 29],
                    borderColor: '#3B82F6',
                    backgroundColor: 'rgba(59, 130, 246, 0.05)',
                    tension: 0.4,
                    fill: true,
                    borderWidth: 2
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    mode: 'index',
                    intersect: false,
                }
            },
            scales: {
                y: {
                    beginAtZero: false,
                    grid: {
                        drawBorder: false
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
</script>

<?php include 'includes/footer.php'; ?>