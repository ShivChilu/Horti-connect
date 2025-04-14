<div class="hidden md:block w-64 bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden sticky top-24 h-fit transition-colors duration-300">
    <!-- Profile Card -->
    <div class="bg-gradient-to-r from-green-500 to-green-600 dark:from-cyan-500 dark:to-magenta-500 p-6 text-center group">
        <div class="w-20 h-20 mx-auto rounded-full overflow-hidden border-4 border-white shadow-md transition-transform duration-300 group-hover:scale-110">
            <img src="../assets/img/user-profile.jpg" alt="User Profile" class="w-full h-full object-cover">
        </div>
        <h3 class="mt-4 text-white font-semibold">Welcome Back!</h3>
        <p class="text-green-100 dark:text-cyan-200 text-sm">Premium Member</p>
    </div>

    <!-- Navigation Links -->
    <nav class="p-4">
        <ul class="space-y-2">
            <li>
                <a href="../dashboard.php" class="flex items-center p-3 rounded-lg hover:bg-green-50 dark:hover:bg-gray-700 hover:text-green-600 dark:hover:text-cyan-400 transition-all duration-300 group">
                    <div class="w-8 h-8 flex items-center justify-center bg-green-100 dark:bg-cyan-900 text-green-600 dark:text-cyan-400 rounded-full mr-3 group-hover:bg-green-600 dark:group-hover:bg-cyan-600 group-hover:text-white transition-colors">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../my-listings.php" class="flex items-center p-3 rounded-lg hover:bg-green-50 dark:hover:bg-gray-700 hover:text-green-600 dark:hover:text-cyan-400 transition-all duration-300 group">
                    <div class="w-8 h-8 flex items-center justify-center bg-blue-100 dark:bg-magenta-900 text-blue-600 dark:text-magenta-400 rounded-full mr-3 group-hover:bg-blue-600 dark:group-hover:bg-magenta-600 group-hover:text-white transition-colors">
                        <i class="fas fa-list"></i>
                    </div>
                    <span>My Listings</span>
                    <span class="ml-auto bg-green-100 dark:bg-cyan-900 text-green-800 dark:text-cyan-400 text-xs px-2 py-1 rounded-full">5</span>
                </a>
            </li>
            <li>
                <a href="../storage-bookings.php" class="flex items-center p-3 rounded-lg hover:bg-green-50 dark:hover:bg-gray-700 hover:text-green-600 dark:hover:text-cyan-400 transition-all duration-300 group">
                    <div class="w-8 h-8 flex items-center justify-center bg-yellow-100 dark:bg-yellow-900 text-yellow-600 dark:text-yellow-400 rounded-full mr-3 group-hover:bg-yellow-600 dark:group-hover:bg-yellow-600 group-hover:text-white transition-colors">
                        <i class="fas fa-warehouse"></i>
                    </div>
                    <span>Storage Bookings</span>
                </a>
            </li>
            <li>
                <a href="../value-addition.php" class="flex items-center p-3 rounded-lg hover:bg-green-50 dark:hover:bg-gray-700 hover:text-green-600 dark:hover:text-cyan-400 transition-all duration-300 group">
                    <div class="w-8 h-8 flex items-center justify-center bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-400 rounded-full mr-3 group-hover:bg-purple-600 dark:group-hover:bg-purple-600 group-hover:text-white transition-colors">
                        <i class="fas fa-industry"></i>
                    </div>
                    <span>Value Addition</span>
                </a>
            </li>
            <li>
                <a href="../price-alerts.php" class="flex items-center p-3 rounded-lg hover:bg-green-50 dark:hover:bg-gray-700 hover:text-green-600 dark:hover:text-cyan-400 transition-all duration-300 group">
                    <div class="w-8 h-8 flex items-center justify-center bg-red-100 dark:bg-red-900 text-red-600 dark:text-red-400 rounded-full mr-3 group-hover:bg-red-600 dark:group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-bell"></i>
                    </div>
                    <span>Price Alerts</span>
                    <span class="ml-auto bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-400 text-xs px-2 py-1 rounded-full animate-pulse">3</span>
                </a>
            </li>
            <li>
                <a href="../profile.php" class="flex items-center p-3 rounded-lg hover:bg-green-50 dark:hover:bg-gray-700 hover:text-green-600 dark:hover:text-cyan-400 transition-all duration-300 group">
                    <div class="w-8 h-8 flex items-center justify-center bg-indigo-100 dark:bg-indigo-900 text-indigo-600 dark:text-indigo-400 rounded-full mr-3 group-hover:bg-indigo-600 dark:group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <span>Profile Settings</span>
                </a>
            </li>
            <li>
                <a href="../auth/logout.php" class="flex items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300 group">
                    <div class="w-8 h-8 flex items-center justify-center bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-gray-400 rounded-full mr-3 group-hover:bg-red-600 dark:group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-sign-out-alt"></i>
                    </div>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Upgrade Banner -->
    <div class="p-4 bg-gradient-to-r from-yellow-400 to-yellow-500 dark:from-cyan-500 dark:to-magenta-500 text-white text-center mx-4 mb-4 rounded-lg animate-pulse">
        <h4 class="font-bold mb-1">Upgrade to Pro</h4>
        <p class="text-xs mb-2">Unlock futuristic analytics</p>
        <button class="btn-lift bg-white text-yellow-600 dark:text-cyan-600 px-3 py-1 rounded-full font-bold hover:bg-gray-100 dark:hover:bg-gray-900 transition">Upgrade Now</button>
    </div>
</div>

<script>
    document.querySelectorAll('nav a').forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add('bg-green-50', 'text-green-600', 'dark:bg-gray-700', 'dark:text-cyan-400');
            link.querySelector('div').classList.add('bg-green-600', 'text-white', 'dark:bg-cyan-600');
        }
    });
</script>