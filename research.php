<?php include '../includes/header.php'; ?>

<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row gap-6">
        <!-- Research Navigation -->
        <div class="w-full md:w-1/4 bg-white dark:bg-gray-800 rounded-lg shadow p-4 h-fit sticky top-24">
            <h3 class="text-lg font-bold mb-4 text-gray-800 dark:text-white">Market Research</h3>
            
            <ul class="space-y-2">
                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg bg-green-100 dark:bg-gray-700 text-green-800 dark:text-green-400">
                        <i class="fas fa-chart-line mr-3 text-green-600 dark:text-green-400"></i>
                        <span>Price Trends</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300">
                        <i class="fas fa-map-marked-alt mr-3 text-gray-500 dark:text-gray-400"></i>
                        <span>Regional Analysis</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300">
                        <i class="fas fa-calendar-alt mr-3 text-gray-500 dark:text-gray-400"></i>
                        <span>Seasonal Trends</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300">
                        <i class="fas fa-file-alt mr-3 text-gray-500 dark:text-gray-400"></i>
                        <span>Reports & Insights</span>
                    </a>
                </li>
            </ul>
            
            <div class="mt-6 p-4 bg-blue-50 dark:bg-gray-700 rounded-lg">
                <h4 class="text-sm font-medium text-blue-800 dark:text-blue-400 mb-2">Need custom research?</h4>
                <p class="text-xs text-blue-600 dark:text-blue-300 mb-3">Our agricultural experts can provide tailored market analysis.</p>
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md text-sm transition duration-300">
                    Request Analysis
                </button>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="w-full md:w-3/4">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 mb-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Market Research & Insights</h2>
                    
                    <div class="flex items-center space-x-2 mt-4 md:mt-0">
                        <div class="relative">
                            <input type="text" placeholder="Search research..." class="pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white text-sm w-full md:w-64">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Price Trends Dashboard -->
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-4 mb-6">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Price Trends Dashboard</h3>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Select Crop</label>
                            <select id="cropSelect" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white">
                                <option>Tomatoes</option>
                                <option>Potatoes</option>
                                <option>Onions</option>
                                <option>Bananas</option>
                                <option>Mangoes</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Select Market</label>
                            <select id="marketSelect" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white">
                                <option>All India</option>
                                <option>North India</option>
                                <option>South India</option>
                                <option>East India</option>
                                <option>West India</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="h-96">
                        <canvas id="priceTrendsChart"></canvas>
                    </div>
                    
                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div class="bg-green-50 dark:bg-gray-600 p-3 rounded-lg">
                            <h4 class="text-sm font-medium text-green-800 dark:text-green-400">Current Price</h4>
                            <p class="text-2xl font-bold">₹45 <span class="text-sm text-green-600 dark:text-green-400">+12%</span></p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">vs last month</p>
                        </div>
                        <div class="bg-blue-50 dark:bg-gray-600 p-3 rounded-lg">
                            <h4 class="text-sm font-medium text-blue-800 dark:text-blue-400">Price Range</h4>
                            <p class="text-2xl font-bold">₹38 - ₹52</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">last 6 months</p>
                        </div>
                        <div class="bg-purple-50 dark:bg-gray-600 p-3 rounded-lg">
                            <h4 class="text-sm font-medium text-purple-800 dark:text-purple-400">Best Time to Sell</h4>
                            <p class="text-2xl font-bold">Aug - Oct</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">peak prices</p>
                        </div>
                    </div>
                </div>
                
                <!-- Regional Price Comparison -->
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-4 mb-6">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Regional Price Comparison</h3>
                    
                    <div class="h-80 mb-4">
                        <canvas id="regionalPriceChart"></canvas>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                            <thead class="bg-gray-50 dark:bg-gray-600">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Region</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Current Price (₹/kg)</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Monthly Change</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Demand Level</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-600">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">North India</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">₹48</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600 dark:text-green-400">+15%</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs font-bold bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full">High</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">South India</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">₹42</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600 dark:text-green-400">+8%</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs font-bold bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 rounded-full">Medium</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">East India</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">₹40</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-red-500 dark:text-red-400">-3%</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs font-bold bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 rounded-full">Low</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">West India</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">₹45</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600 dark:text-green-400">+12%</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs font-bold bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full">High</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Research Reports -->
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-4">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Latest Research Reports</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Report 1 -->
                        <div class="bg-white dark:bg-gray-600 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                            <div class="h-40 bg-gray-200 dark:bg-gray-500">
                                <img src="../assets/images/tomato-report.jpg" alt="Tomato Report" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-lg font-bold text-gray-800 dark:text-white">Tomato Market Outlook 2023</h4>
                                    <span class="text-xs bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded">New</span>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Comprehensive analysis of tomato market trends, pricing, and future projections.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xs text-gray-500 dark:text-gray-400">Published: 15 Jul 2023</span>
                                    <button class="text-green-600 dark:text-green-400 hover:text-green-800 dark:hover:text-green-300 text-sm font-medium">
                                        Download <i class="fas fa-download ml-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Report 2 -->
                        <div class="bg-white dark:bg-gray-600 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                            <div class="h-40 bg-gray-200 dark:bg-gray-500">
                                <img src="../assets/images/cold-chain.jpg" alt="Cold Chain" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-lg font-bold text-gray-800 dark:text-white">Cold Storage Capacity in India</h4>
                                    <span class="text-xs bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-1 rounded">Updated</span>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">State-wise analysis of cold storage facilities and capacity utilization.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xs text-gray-500 dark:text-gray-400">Published: 5 Jul 2023</span>
                                    <button class="text-green-600 dark:text-green-400 hover:text-green-800 dark:hover:text-green-300 text-sm font-medium">
                                        Download <i class="fas fa-download ml-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Report 3 -->
                        <div class="bg-white dark:bg-gray-600 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                            <div class="h-40 bg-gray-200 dark:bg-gray-500">
                                <img src="../assets/images/export.jpg" alt="Export" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-lg font-bold text-gray-800 dark:text-white">Export Opportunities for Horticulture</h4>
                                    <span class="text-xs bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-2 py-1 rounded">Trending</span>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Key international markets and requirements for Indian horticultural products.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xs text-gray-500 dark:text-gray-400">Published: 28 Jun 2023</span>
                                    <button class="text-green-600 dark:text-green-400 hover:text-green-800 dark:hover:text-green-300 text-sm font-medium">
                                        Download <i class="fas fa-download ml-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 text-center">
                        <button class="bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 text-gray-800 dark:text-white py-2 px-6 rounded-md transition duration-300">
                            View All Reports
                        </button>
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
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [
                {
                    label: 'Tomato Price (₹/kg)',
                    data: [32, 38, 42, 45, 40, 48, 52],
                    borderColor: '#10B981',
                    backgroundColor: 'rgba(16, 185, 129, 0.05)',
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
    
    // Regional Price Chart
    const regionalCtx = document.getElementById('regionalPriceChart').getContext('2d');
    const regionalChart = new Chart(regionalCtx, {
        type: 'bar',
        data: {
            labels: ['North', 'South', 'East', 'West'],
            datasets: [{
                label: 'Current Price (₹/kg)',
                data: [48, 42, 40, 45],
                backgroundColor: [
                    'rgba(16, 185, 129, 0.8)',
                    'rgba(59, 130, 246, 0.8)',
                    'rgba(245, 158, 11, 0.8)',
                    'rgba(139, 92, 246, 0.8)'
                ],
                borderColor: [
                    'rgba(16, 185, 129, 1)',
                    'rgba(59, 130, 246, 1)',
                    'rgba(245, 158, 11, 1)',
                    'rgba(139, 92, 246, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
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
    
    // Update charts when dropdowns change
    document.getElementById('cropSelect').addEventListener('change', function() {
        // In a real app, this would fetch new data based on selection
        priceChart.data.datasets[0].label = this.value + ' Price (₹/kg)';
        priceChart.update();
    });
    
    document.getElementById('marketSelect').addEventListener('change', function() {
        // In a real app, this would fetch new data based on selection
        priceChart.update();
    });
</script>

<?php include '../includes/footer.php'; ?>