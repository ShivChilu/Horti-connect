<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HortiConnect - Next-Gen Horticultural Market</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary-light: #10B981;
            --secondary-light: #34D399;
            --primary-dark: #00FFFF;
            --secondary-dark: #FF00FF;
        }
        .futuristic-nav {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        .futuristic-nav:hover {
            background: rgba(255, 255, 255, 0.2);
        }
        .nav-link {
            position: relative;
            transition: transform 0.3s ease, color 0.3s ease;
        }
        .nav-link:hover {
            transform: translateY(-3px);
            color: var(--primary-light);
        }
        .dark .nav-link:hover {
            color: var(--primary-dark);
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: var(--primary-light);
            transition: width 0.3s ease;
        }
        .dark .nav-link::after {
            background: var(--primary-dark);
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .active-nav::after {
            width: 100%;
        }
        .btn-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-lift:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        /* Mobile menu animation */
        #mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        #mobile-menu.mobile-menu-open {
            max-height: 500px; /* Adjust based on your content */
            transition: max-height 0.5s ease-in;
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300 overflow-x-hidden">
    <header class="futuristic-nav sticky top-0 z-50 shadow-lg">
        <div class="container mx-auto px-4 sm:px-6 py-3 sm:py-4 flex items-center justify-between">
            <!-- Logo - Adjusts for mobile -->
            <a href="../index.php" class="flex items-center space-x-1 sm:space-x-2 transition-transform duration-300 hover:scale-105">
                <img src="assets/images/logo1.png" alt="HortiConnect Logo" class="h-10 sm:h-16">
                <span class="text-xl sm:text-2xl font-bold text-green-600 dark:text-cyan-400">Horti<span class="text-green-800 dark:text-magenta-400">Connect</span></span>
            </a>

            <!-- Desktop Navigation - Hidden on mobile -->
            <nav class="hidden md:flex items-center space-x-4 lg:space-x-8">
                <a href="index.php" class="nav-link text-sm lg:text-base <?= ($current_page == 'index.php') ? 'active-nav text-green-600 dark:text-cyan-400' : '' ?>">
                    <i class="fas fa-home mr-1"></i> Home
                </a>
                <a href="marketplace.php" class="nav-link text-sm lg:text-base <?= ($current_page == 'dashboard.php') ? 'active-nav text-green-600 dark:text-cyan-400' : '' ?>">
                    <i class="fas fa-chart-bar mr-1"></i> Marketplace
                </a>
                <a href="storage.php" class="nav-link text-sm lg:text-base <?= ($current_page == 'storage.php') ? 'active-nav text-green-600 dark:text-cyan-400' : '' ?>">
                    <i class="fas fa-warehouse mr-1"></i> Storage
                </a>
                <a href="value-add.php" class="nav-link text-sm lg:text-base <?= ($current_page == 'value-add.php') ? 'active-nav text-green-600 dark:text-cyan-400' : '' ?>">
                    <i class="fas fa-industry mr-1"></i> Value Addition
                </a>
                <a href="../research.php" class="nav-link text-sm lg:text-base <?= ($current_page == 'research.php') ? 'active-nav text-green-600 dark:text-cyan-400' : '' ?>">
                    <i class="fas fa-search-dollar mr-1"></i> Research
                </a>
            </nav>

            <!-- Auth Buttons & Dark Mode Toggle - Adjusts for mobile -->
            <div class="flex items-center space-x-2 sm:space-x-4">
                <div class="hidden sm:flex space-x-2 sm:space-x-4">
                    <a href="auth/login.php" class="btn-lift px-3 py-1 sm:px-4 sm:py-2 bg-green-600 dark:bg-cyan-500 text-white rounded-lg hover:bg-green-700 dark:hover:bg-cyan-600 text-xs sm:text-sm">
                        <i class="fas fa-sign-in-alt mr-1"></i> <span class="xs:inline">Login</span>
                    </a>
                    <a href="auth/signup.php" class="btn-lift px-3 py-1 sm:px-4 sm:py-2 bg-green-800 dark:bg-magenta-500 text-white rounded-lg hover:bg-green-900 dark:hover:bg-magenta-600 text-xs sm:text-sm">
                        <i class="fas fa-user-plus mr-1"></i> <span class="xs:inline">Sign Up</span>
                    </a>
                    <a href="auth/location.html" class="btn-lift px-3 py-1 sm:px-4 sm:py-2 bg-green-800 dark:bg-magenta-500 text-white rounded-lg hover:bg-green-900 dark:hover:bg-magenta-600 text-xs sm:text-sm">
                    <i class="fas fa-map-marker-alt mt-1 mr-3 text-white-500"></i> <span class="xs:inline">location</span>
                    </a>
                </div>
                <!-- <button id="theme-toggle" class="p-1 sm:p-2 rounded-full bg-gray-200 dark:bg-gray-700">
                    <i class="fas fa-moon text-gray-900 dark:text-white text-sm sm:text-base"></i>
                </button> -->
                <!-- Mobile Menu Button - Visible only on mobile -->
                <button id="mobile-menu-button" class="md:hidden text-gray-700 dark:text-white focus:outline-none ml-2">
                    <i class="fas fa-bars text-xl sm:text-2xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu - Enhanced with animation -->
        <div id="mobile-menu" class="md:hidden bg-white dark:bg-gray-800 px-6 py-2">
            <div class="flex flex-col space-y-1 py-2">
                <a href="index.php" class="flex items-center py-2 px-3 rounded-lg <?= ($current_page == 'index.php') ? 'bg-green-100 dark:bg-gray-700 text-green-600 dark:text-cyan-400' : 'text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' ?>">
                    <i class="fas fa-home mr-3 w-5 text-center"></i> Home
                </a>
                <a href="dashboard.php" class="flex items-center py-2 px-3 rounded-lg <?= ($current_page == 'dashboard.php') ? 'bg-green-100 dark:bg-gray-700 text-green-600 dark:text-cyan-400' : 'text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' ?>">
                    <i class="fas fa-chart-bar mr-3 w-5 text-center"></i> Marketplace
                </a>
                <a href="storage.php" class="flex items-center py-2 px-3 rounded-lg <?= ($current_page == 'storage.php') ? 'bg-green-100 dark:bg-gray-700 text-green-600 dark:text-cyan-400' : 'text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' ?>">
                    <i class="fas fa-warehouse mr-3 w-5 text-center"></i> Storage
                </a>
                <a href="value-add.php" class="flex items-center py-2 px-3 rounded-lg <?= ($current_page == 'value-add.php') ? 'bg-green-100 dark:bg-gray-700 text-green-600 dark:text-cyan-400' : 'text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' ?>">
                    <i class="fas fa-industry mr-3 w-5 text-center"></i> Value Addition
                </a>
                <a href="../research.php" class="flex items-center py-2 px-3 rounded-lg <?= ($current_page == 'research.php') ? 'bg-green-100 dark:bg-gray-700 text-green-600 dark:text-cyan-400' : 'text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' ?>">
                    <i class="fas fa-search-dollar mr-3 w-5 text-center"></i> Research
                </a>
            </div>
            <div class="flex space-x-2 py-3 border-t border-gray-200 dark:border-gray-700">
                <a href="auth/login.php" class="flex-1 btn-lift px-4 py-2 bg-green-600 dark:bg-cyan-500 text-white rounded-lg hover:bg-green-700 dark:hover:bg-cyan-600 text-center">
                    <i class="fas fa-sign-in-alt mr-2"></i> Login
                </a>
                <a href="auth/signup.php" class="flex-1 btn-lift px-4 py-2 bg-green-800 dark:bg-magenta-500 text-white rounded-lg hover:bg-green-900 dark:hover:bg-magenta-600 text-center">
                    <i class="fas fa-user-plus mr-2"></i> Sign Up
                </a>
            </div>
        </div>
    </header>

    <script>
        // Mobile Menu Toggle with animation
        document.getElementById('mobile-menu-button').addEventListener('click', () => {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('mobile-menu-open');
            
            // Toggle icon between bars and times
            const icon = document.getElementById('mobile-menu-button').querySelector('i');
            if (menu.classList.contains('mobile-menu-open')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Dark Mode Toggle
        document.getElementById('theme-toggle').addEventListener('click', () => {
            document.body.classList.toggle('dark');
            localStorage.setItem('theme', document.body.classList.contains('dark') ? 'dark' : 'light');
            
            // Toggle icon between moon and sun
            const icon = document.getElementById('theme-toggle').querySelector('i');
            if (document.body.classList.contains('dark')) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }
        });

        // Load Theme Preference
        if (localStorage.getItem('theme') === 'dark') {
            document.body.classList.add('dark');
            const icon = document.getElementById('theme-toggle').querySelector('i');
            icon.classList.remove('fa-moon');
            icon.classList.add('fa-sun');
        }
    </script>