<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | HortiConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary: #10B981;
            --primary-dark: #059669;
        }
        .sidebar {
            transition: all 0.3s ease;
        }
        .dashboard-card {
            transition: all 0.3s ease;
            perspective: 1000px;
        }
        .dashboard-card:hover {
            transform: translateY(-5px) rotateX(2deg);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .crop-card {
            transition: all 0.3s ease;
            background-size: cover;
            background-position: center;
        }
        .crop-card:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px -5px rgba(0, 0, 0, 0.2);
        }
        .notification-dot {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }
        .progress-ring__circle {
            transition: stroke-dashoffset 0.5s;
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
        .map-container {
            height: 300px;
            border-radius: 0.5rem;
            overflow: hidden;
        }
        .animated-underline {
            position: relative;
        }
        .animated-underline::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: var(--primary);
            transition: width 0.3s ease;
        }
        .animated-underline:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Dashboard Layout -->
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="sidebar hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-white border-r border-gray-200">
                <div class="flex items-center justify-center h-16 px-4 bg-green-600">
                    <img class="h-16 w-auto" src="assets/images/logo1.png" alt="HortiConnect">
                </div>
                <div class="flex flex-col flex-grow px-4 py-4 overflow-y-auto">
                    <div class="space-y-1">
                        <a href="dashboard.php" class="flex items-center px-2 py-3 text-sm font-medium text-white rounded-md bg-green-100 text-green-800 group">
                            <i class="fas fa-tachometer-alt mr-3 text-green-600"></i>
                            Dashboard
                        </a>
                        <a href="storage.php" class="flex items-center px-2 py-3 text-sm font-medium text-gray-600 rounded-md hover:bg-green-50 hover:text-green-800 group">
                            <i class="fas fa-warehouse mr-3 text-gray-400 group-hover:text-green-600"></i>
                            Storage Solutions
                        </a>
                        <a href="value-add.php" class="flex items-center px-2 py-3 text-sm font-medium text-gray-600 rounded-md hover:bg-green-50 hover:text-green-800 group">
                            <i class="fas fa-industry mr-3 text-gray-400 group-hover:text-green-600"></i>
                            Value Addition
                        </a>
                        <a href="research.php" class="flex items-center px-2 py-3 text-sm font-medium text-gray-600 rounded-md hover:bg-green-50 hover:text-green-800 group">
                            <i class="fas fa-book mr-3 text-gray-400 group-hover:text-green-600"></i>
                            Research & Insights
                        </a>
                        <a href="profile.php" class="flex items-center px-2 py-3 text-sm font-medium text-gray-600 rounded-md hover:bg-green-50 hover:text-green-800 group">
                            <i class="fas fa-user mr-3 text-gray-400 group-hover:text-green-600"></i>
                            My Profile
                        </a>
                    </div>
                    
                    <div class="mt-auto mb-4">
                        <div class="p-4 bg-green-50 rounded-lg">
                            <h4 class="text-sm font-medium text-green-800">Need Help?</h4>
                            <p class="mt-1 text-xs text-green-600">Our agricultural experts are available 24/7</p>
                            <button id="chatHelp" class="mt-2 w-full px-3 py-2 text-xs font-medium text-center text-white bg-green-600 rounded-md hover:bg-green-700">
                                Chat Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Top Navigation -->
            <header class="flex items-center justify-between px-6 py-4 bg-white border-b border-gray-200">
                <div class="flex items-center">
                    <button id="mobileMenuButton" class="md:hidden text-gray-500 focus:outline-none mr-4">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 class="text-xl font-semibold text-gray-800">Farmer Dashboard</h1>
                </div>
                
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button id="notificationButton" class="p-1 text-gray-500 rounded-full hover:text-gray-600 focus:outline-none">
                            <i class="fas fa-bell"></i>
                            <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full notification-dot"></span>
                        </button>
                    </div>
                    <div class="relative">
                        <button id="profileButton" class="flex items-center space-x-2 focus:outline-none">
                            <img class="w-8 h-8 rounded-full" src="assets/img/user-avatar.jpg" alt="User">
                            <span class="hidden md:inline-block text-sm font-medium text-gray-700">Rajesh Kumar</span>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-auto p-4 bg-gray-50">
                <!-- Welcome Banner -->
                <div class="mb-6 p-6 rounded-lg bg-gradient-to-r from-green-500 to-green-600 text-white">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div>
                            <h2 class="text-2xl font-bold">Welcome back, Rajesh!</h2>
                            <p class="mt-2">Here's what's happening with your horticultural business today.</p>
                        </div>
                        <div class="mt-4 md:mt-0">
                            <button id="weeklyReport" class="px-4 py-2 bg-white text-green-600 rounded-md font-medium hover:bg-gray-100">
                                View Weekly Report
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <!-- Current Market Value -->
                    <div class="dashboard-card p-6 bg-white rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Current Market Value</p>
                                <p class="mt-1 text-2xl font-semibold text-gray-900">₹1,24,568</p>
                                <p class="mt-1 text-sm text-green-600 flex items-center">
                                    <i class="fas fa-arrow-up mr-1"></i> 12.5% from last week
                                </p>
                            </div>
                            <div class="p-3 rounded-full bg-green-100 text-green-600">
                                <i class="fas fa-rupee-sign text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Crops Listed -->
                    <div class="dashboard-card p-6 bg-white rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Crops Listed</p>
                                <p class="mt-1 text-2xl font-semibold text-gray-900">3</p>
                                <p class="mt-1 text-sm text-blue-600 flex items-center">
                                    <i class="fas fa-eye mr-1"></i> 124 views this week
                                </p>
                            </div>
                            <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                                <i class="fas fa-seedling text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Storage Utilization -->
                    <div class="dashboard-card p-6 bg-white rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Storage Utilization</p>
                                <p class="mt-1 text-2xl font-semibold text-gray-900">75%</p>
                                <p class="mt-1 text-sm text-yellow-600 flex items-center">
                                    <i class="fas fa-box-open mr-1"></i> 3/4 units occupied
                                </p>
                            </div>
                            <div class="relative w-12 h-12">
                                <svg class="w-full h-full" viewBox="0 0 36 36">
                                    <circle cx="18" cy="18" r="16" fill="none" stroke="#E5E7EB" stroke-width="3"></circle>
                                    <circle class="progress-ring__circle" cx="18" cy="18" r="16" fill="none" stroke="#F59E0B" stroke-width="3" stroke-dasharray="100, 100" stroke-dashoffset="25"></circle>
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center text-xs font-bold text-yellow-600">75%</div>
                            </div>
                        </div>
                    </div>

                    <!-- Price Alerts -->
                    <div class="dashboard-card p-6 bg-white rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Price Alerts</p>
                                <p class="mt-1 text-2xl font-semibold text-gray-900">2 New</p>
                                <p class="mt-1 text-sm text-purple-600 flex items-center">
                                    <i class="fas fa-bell mr-1"></i> Tomatoes +12%
                                </p>
                            </div>
                            <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                                <i class="fas fa-bell text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                    <!-- Market Trends Chart -->
                    <div class="lg:col-span-2 dashboard-card p-6 bg-white rounded-lg shadow">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-medium text-gray-900">Market Trends</h3>
                            <div class="flex space-x-2">
                                <button id="weeklyBtn" class="px-3 py-1 text-xs bg-green-100 text-green-800 rounded-md">Weekly</button>
                                <button id="monthlyBtn" class="px-3 py-1 text-xs bg-gray-100 text-gray-800 rounded-md">Monthly</button>
                                <button id="yearlyBtn" class="px-3 py-1 text-xs bg-gray-100 text-gray-800 rounded-md">Yearly</button>
                            </div>
                        </div>
                        <div class="h-80">
                            <canvas id="marketTrendsChart"></canvas>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="dashboard-card p-6 bg-white rounded-lg shadow">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Quick Actions</h3>
                        <div class="space-y-3">
                            <a id="addCropBtn" href="add-crop.php" class="flex items-center p-3 bg-green-50 rounded-md hover:bg-green-100 transition">
                                <div class="p-2 mr-3 rounded-full bg-green-100 text-green-600">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-700">Add New Crop Listing</span>
                            </a>
                            <a id="bookStorageBtn" href="storage.php" class="flex items-center p-3 bg-blue-50 rounded-md hover:bg-blue-100 transition">
                                <div class="p-2 mr-3 rounded-full bg-blue-100 text-blue-600">
                                    <i class="fas fa-warehouse"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-700">Book Storage Space</span>
                            </a>
                            <a id="processCropsBtn" href="value-add.php" class="flex items-center p-3 bg-purple-50 rounded-md hover:bg-purple-100 transition">
                                <div class="p-2 mr-3 rounded-full bg-purple-100 text-purple-600">
                                    <i class="fas fa-industry"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-700">Process My Crops</span>
                            </a>
                            <a id="arrangeLogisticsBtn" href="logistics.php" class="flex items-center p-3 bg-yellow-50 rounded-md hover:bg-yellow-100 transition">
                                <div class="p-2 mr-3 rounded-full bg-yellow-100 text-yellow-600">
                                    <i class="fas fa-truck"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-700">Arrange Logistics</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Your Crops and Storage Map -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                    <!-- Your Active Crops -->
                    <div class="lg:col-span-2 dashboard-card p-6 bg-white rounded-lg shadow">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-medium text-gray-900">Your Active Crops</h3>
                            <a id="viewAllCrops" href="my-crops.php" class="text-sm text-green-600 hover:text-green-800 animated-underline">View All</a>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <!-- Tomato Card -->
                            <div class="crop-card relative p-4 rounded-lg shadow-md" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('assets/images/tomatoes.jpg');">
                                <div class="absolute top-2 right-2">
                                    <span class="px-2 py-1 text-xs font-bold text-white bg-green-600 rounded-full">Live</span>
                                </div>
                                <div class="text-white">
                                    <h4 class="font-bold">Tomatoes</h4>
                                    <p class="text-sm">Hybrid F1</p>
                                    <p class="mt-2 text-xl font-bold">₹45/kg</p>
                                    <div class="mt-2 flex items-center text-xs">
                                        <i class="fas fa-arrow-up text-green-300 mr-1"></i>
                                        <span>12% this week</span>
                                    </div>
                                    <div class="mt-4 pt-2 border-t border-green-300">
                                        <div class="flex justify-between text-xs">
                                            <span>500kg</span>
                                            <span>Harvest: 15 Aug</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Potato Card -->
                            <div class="crop-card relative p-4 rounded-lg shadow-md" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('assets/images/potatoes.jpg');">
                                <div class="text-white">
                                    <h4 class="font-bold">Potatoes</h4>
                                    <p class="text-sm">Kufri Jyoti</p>
                                    <p class="mt-2 text-xl font-bold">₹22/kg</p>
                                    <div class="mt-2 flex items-center text-xs">
                                        <i class="fas fa-arrow-down text-red-300 mr-1"></i>
                                        <span>5% this week</span>
                                    </div>
                                    <div class="mt-4 pt-2 border-t border-green-300">
                                        <div class="flex justify-between text-xs">
                                            <span>1200kg</span>
                                            <span>Harvest: 5 Sep</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Onion Card -->
                            <div class="crop-card relative p-4 rounded-lg shadow-md" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('assets/images/onions.jpg');">
                                <div class="text-white">
                                    <h4 class="font-bold">Onions</h4>
                                    <p class="text-sm">Nasik Red</p>
                                    <p class="mt-2 text-xl font-bold">₹30/kg</p>
                                    <div class="mt-2 flex items-center text-xs">
                                        <i class="fas fa-arrow-up text-green-300 mr-1"></i>
                                        <span>8% this week</span>
                                    </div>
                                    <div class="mt-4 pt-2 border-t border-green-300">
                                        <div class="flex justify-between text-xs">
                                            <span>800kg</span>
                                            <span>Harvest: 25 Aug</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Storage Map -->
                    <div class="dashboard-card p-6 bg-white rounded-lg shadow">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-medium text-gray-900">Your Storage Locations</h3>
                            <a id="manageStorage" href="storage.php" class="text-sm text-green-600 hover:text-green-800 animated-underline">Manage</a>
                        </div>
                        <div id="storageMap" class="map-container bg-gray-200 relative">
                            <!-- This would be replaced with an actual map component -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center p-4 glass-effect rounded-lg">
                                    <i class="fas fa-map-marked-alt text-3xl text-green-600 mb-2"></i>
                                    <p class="text-sm text-gray-700">Interactive map of your storage facilities</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 space-y-3">
                            <div class="flex items-center p-2 hover:bg-gray-50 rounded-md">
                                <div class="p-2 mr-3 rounded-full bg-green-100 text-green-600">
                                    <i class="fas fa-warehouse"></i>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium">Green Valley Cold Storage</h4>
                                    <p class="text-xs text-gray-500">Capacity: 500kg (75% used)</p>
                                </div>
                            </div>
                            <div class="flex items-center p-2 hover:bg-gray-50 rounded-md">
                                <div class="p-2 mr-3 rounded-full bg-blue-100 text-blue-600">
                                    <i class="fas fa-warehouse"></i>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium">AgroFresh Storage</h4>
                                    <p class="text-xs text-gray-500">Capacity: 1000kg (50% used)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity and Price Alerts -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Recent Activity -->
                    <div class="dashboard-card p-6 bg-white rounded-lg shadow">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-medium text-gray-900">Recent Activity</h3>
                            <a id="viewAllActivity" href="activity.php" class="text-sm text-green-600 hover:text-green-800 animated-underline">View All</a>
                        </div>
                        <div class="space-y-4">
                            <div class="flex">
                                <div class="flex-shrink-0 mr-3">
                                    <div class="p-2 rounded-full bg-green-100 text-green-600">
                                        <i class="fas fa-check"></i>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Your tomato listing was viewed 24 times</p>
                                    <p class="text-xs text-gray-500">2 hours ago</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-shrink-0 mr-3">
                                    <div class="p-2 rounded-full bg-blue-100 text-blue-600">
                                        <i class="fas fa-warehouse"></i>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Storage payment received for AgroFresh</p>
                                    <p class="text-xs text-gray-500">1 day ago</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-shrink-0 mr-3">
                                    <div class="p-2 rounded-full bg-yellow-100 text-yellow-600">
                                        <i class="fas fa-industry"></i>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">New value addition guide available</p>
                                    <p class="text-xs text-gray-500">2 days ago</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Price Alerts -->
                    <div class="dashboard-card p-6 bg-white rounded-lg shadow">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-medium text-gray-900">Price Alerts</h3>
                            <a id="manageAlerts" href="price-alerts.php" class="text-sm text-green-600 hover:text-green-800 animated-underline">Manage Alerts</a>
                        </div>
                        <div class="space-y-4">
                            <div class="p-3 bg-green-50 rounded-md border-l-4 border-green-500">
                                <div class="flex justify-between">
                                    <h4 class="text-sm font-medium text-green-800">Tomato prices rising</h4>
                                    <span class="px-2 py-1 text-xs font-bold bg-green-100 text-green-800 rounded-full">+12%</span>
                                </div>
                                <p class="mt-1 text-xs text-green-600">Current price: ₹45/kg in Mumbai APMC</p>
                                <div class="mt-2 flex justify-end">
                                    <button id="sellNowBtn" class="px-3 py-1 text-xs bg-green-600 text-white rounded-md hover:bg-green-700">Sell Now</button>
                                </div>
                            </div>
                            <div class="p-3 bg-red-50 rounded-md border-l-4 border-red-500">
                                <div class="flex justify-between">
                                    <h4 class="text-sm font-medium text-red-800">Potato prices dropping</h4>
                                    <span class="px-2 py-1 text-xs font-bold bg-red-100 text-red-800 rounded-full">-5%</span>
                                </div>
                                <p class="mt-1 text-xs text-red-600">Current price: ₹22/kg in Delhi Azadpur</p>
                                <div class="mt-2 flex justify-end">
                                    <button id="holdStockBtn" class="px-3 py-1 text-xs bg-red-600 text-white rounded-md hover:bg-red-700">Hold Stock</button>
                                </div>
                            </div>
                            <div class="p-3 bg-blue-50 rounded-md border-l-4 border-blue-500">
                                <div class="flex justify-between">
                                    <h4 class="text-sm font-medium text-blue-800">New buyer interest</h4>
                                    <span class="px-2 py-1 text-xs font-bold bg-blue-100 text-blue-800 rounded-full">3 Offers</span>
                                </div>
                                <p class="mt-1 text-xs text-blue-600">Hotel chain interested in your tomatoes</p>
                                <div class="mt-2 flex justify-end">
                                    <button id="viewOffersBtn" class="px-3 py-1 text-xs bg-blue-600 text-white rounded-md hover:bg-blue-700">View Offers</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Initialize Market Trends Chart
        const marketCtx = document.getElementById('marketTrendsChart').getContext('2d');
        const marketChart = new Chart(marketCtx, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [
                    {
                        label: 'Tomatoes (₹/kg)',
                        data: [42, 40, 43, 45, 47, 46, 45],
                        borderColor: '#10B981',
                        backgroundColor: 'rgba(16, 185, 129, 0.05)',
                        tension: 0.4,
                        fill: true,
                        borderWidth: 2
                    },
                    {
                        label: 'Potatoes (₹/kg)',
                        data: [23, 22, 23, 22, 21, 22, 22],
                        borderColor: '#F59E0B',
                        backgroundColor: 'rgba(245, 158, 11, 0.05)',
                        tension: 0.4,
                        fill: true,
                        borderWidth: 2
                    },
                    {
                        label: 'Onions (₹/kg)',
                        data: [28, 29, 28, 30, 29, 30, 30],
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
                },
                interaction: {
                    intersect: false,
                    mode: 'nearest'
                }
            }
        });

        // Mobile menu toggle
        document.getElementById('mobileMenuButton').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('hidden');
        });

        // Update progress ring
        function updateProgressRing(percent) {
            const circle = document.querySelector('.progress-ring__circle');
            const circumference = 2 * Math.PI * 16;
            const offset = circumference - (percent / 100) * circumference;
            circle.style.strokeDasharray = circumference + ' ' + circumference;
            circle.style.strokeDashoffset = offset;
        }
        updateProgressRing(75);

        // Time period toggles
        document.getElementById('weeklyBtn').addEventListener('click', function() {
            updateChartData('weekly');
            setActiveButton(this);
        });
        document.getElementById('monthlyBtn').addEventListener('click', function() {
            updateChartData('monthly');
            setActiveButton(this);
        });
        document.getElementById('yearlyBtn').addEventListener('click', function() {
            updateChartData('yearly');
            setActiveButton(this);
        });

        function setActiveButton(button) {
            document.querySelectorAll('#weeklyBtn, #monthlyBtn, #yearlyBtn').forEach(btn => {
                btn.classList.remove('bg-green-100', 'text-green-800');
                btn.classList.add('bg-gray-100', 'text-gray-800');
            });
            button.classList.remove('bg-gray-100', 'text-gray-800');
            button.classList.add('bg-green-100', 'text-green-800');
        }

        function updateChartData(timeframe) {
            const data = {
                weekly: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    tomatoes: [42, 40, 43, 45, 47, 46, 45],
                    potatoes: [23, 22, 23, 22, 21, 22, 22],
                    onions: [28, 29, 28, 30, 29, 30, 30]
                },
                monthly: {
                    labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                    tomatoes: [40, 42, 45, 44],
                    potatoes: [24, 23, 22, 21],
                    onions: [28, 29, 30, 31]
                },
                yearly: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    tomatoes: [35, 38, 40, 42, 45, 48, 46, 44, 42, 40, 38, 36],
                    potatoes: [25, 24, 23, 22, 21, 20, 21, 22, 23, 24, 25, 26],
                    onions: [25, 26, 28, 30, 32, 34, 35, 36, 35, 33, 30, 28]
                }
            };

            marketChart.data.labels = data[timeframe].labels;
            marketChart.data.datasets[0].data = data[timeframe].tomatoes;
            marketChart.data.datasets[1].data = data[timeframe].potatoes;
            marketChart.data.datasets[2].data = data[timeframe].onions;
            marketChart.update();
        }

        // Notification button
        document.getElementById('notificationButton').addEventListener('click', function() {
            alert('You have 2 new notifications');
            // In real implementation, this would show a dropdown with notifications
        });

        // Profile button
        document.getElementById('profileButton').addEventListener('click', function() {
            window.location.href = "profile.php";
        });

        // Weekly report button
        document.getElementById('weeklyReport').addEventListener('click', function() {
            window.location.href = "weekly-report.php";
        });

        // Chat help button
        document.getElementById('chatHelp').addEventListener('click', function() {
            alert('Connecting you with an agricultural expert...');
            // In real implementation, this would open a chat interface
        });

        // Storage map interaction
        document.getElementById('storageMap').addEventListener('click', function() {
            window.location.href = "storage-map.php";
        });

        // Alert action buttons
        document.getElementById('sellNowBtn').addEventListener('click', function() {
            window.location.href = "sell-now.php?crop=tomatoes";
        });
        document.getElementById('holdStockBtn').addEventListener('click', function() {
            alert('Your potatoes have been marked as "Hold" in your inventory');
        });
        document.getElementById('viewOffersBtn').addEventListener('click', function() {
            window.location.href = "buyer-offers.php";
        });

        // Initialize with weekly data
        updateChartData('weekly');
        setActiveButton(document.getElementById('weeklyBtn'));
    </script>
</body>
</html>