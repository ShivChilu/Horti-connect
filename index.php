<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HortiConnect - Next-Gen Horticultural Market</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary-light: #10B981;
            --secondary-light: #34D399;
            --primary-dark: #00FFFF;
            --secondary-dark: #FF00FF;
        }
        .glassmorphism {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .dark .glassmorphism {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .neon-glow {
            box-shadow: 0 0 10px var(--primary-dark), 0 0 20px var(--secondary-dark);
        }
        .interactive-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .interactive-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        .dark .interactive-card:hover {
            box-shadow: 0 15px 30px rgba(0, 255, 255, 0.3), 0 0 20px rgba(255, 0, 255, 0.2);
        }
        .scrolling-banner {
            animation: scroll 20s linear infinite;
        }
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }
        .dark .popup {
            background: #1a1a1a;
            color: white;
        }
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        .btn-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-lift:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .testimonial-card {
            transition: all 0.3s ease;
        }
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300 overflow-x-hidden">
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section with Video Background -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <video class="w-full h-full object-cover" src="assets/videos/videoplayback.mp4" autoplay muted loop></video>
            <div class="absolute inset-0 bg-black bg-opacity-60 dark:bg-opacity-80"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="text-5xl md:text-7xl font-bold mb-6">
                <span id="typed-text" class="text-white neon-glow dark:text-cyan-400"></span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto text-gray-200 dark:text-cyan-200">Next-gen solutions for horticulture markets</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="dashboard.php" class="btn-lift glassmorphism px-8 py-4 text-white dark:text-cyan-400 font-semibold hover:bg-green-700 dark:hover:bg-cyan-600 transition">Go to Dashboard</a>
                <a href="auth/signup.php" class="btn-lift glassmorphism px-8 py-4 text-white dark:text-magenta-400 font-semibold hover:bg-green-800 dark:hover:bg-magenta-600 transition">Sign Up</a>
            </div>
        </div>
    </section>

    <!-- Live Scrolling Banner -->
    <section class="py-4 bg-gradient-to-r from-green-500 to-green-700 dark:from-cyan-500 dark:to-magenta-500 text-white overflow-hidden">
        <div class="scrolling-banner flex space-x-8 whitespace-nowrap">
            <span class="text-lg">🌟 Real-Time Pricing Updates Every 15 Minutes</span>
            <span class="text-lg">🚚 Logistics Tracking Now Available</span>
            <span class="text-lg">💰 Maximize Profits with Value Addition</span>
            <span class="text-lg">📈 Market Trends at Your Fingertips</span>
            <span class="text-lg">🌟 Real-Time Pricing Updates Every 15 Minutes</span>
            <span class="text-lg">🚚 Logistics Tracking Now Available</span>
            <span class="text-lg">💰 Maximize Profits with Value Addition</span>
            <span class="text-lg">📈 Market Trends at Your Fingertips</span>
        </div>
    </section>

    <!-- Features Section with Interactive Cards -->
    <section class="py-16 bg-gradient-to-b from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800 dark:text-cyan-400">Futuristic <span class="text-green-600 dark:text-magenta-400">Features</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="interactive-card glassmorphism p-6 rounded-xl text-center">
                    <i class="fas fa-chart-line text-4xl text-green-600 dark:text-cyan-400 mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">Real-Time Pricing</h3>
                    <p class="text-gray-600 dark:text-gray-300">Live market data at your fingertips</p>
                    <button class="mt-4 btn-lift px-4 py-2 bg-green-600 dark:bg-cyan-500 text-white rounded-lg" onclick="showPopup('pricing')">Learn More</button>
                </div>
                <div class="interactive-card glassmorphism p-6 rounded-xl text-center">
                    <i class="fas fa-warehouse text-4xl text-blue-600 dark:text-magenta-400 mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">Smart Storage</h3>
                    <p class="text-gray-600 dark:text-gray-300">IoT-enabled storage solutions</p>
                    <button class="mt-4 btn-lift px-4 py-2 bg-blue-600 dark:bg-magenta-500 text-white rounded-lg" onclick="showPopup('storage')">Learn More</button>
                </div>
                <div class="interactive-card glassmorphism p-6 rounded-xl text-center">
                    <i class="fas fa-industry text-4xl text-yellow-600 dark:text-yellow-400 mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">Value Addition</h3>
                    <p class="text-gray-600 dark:text-gray-300">Boost profits with processing</p>
                    <button class="mt-4 btn-lift px-4 py-2 bg-yellow-600 dark:bg-yellow-500 text-white rounded-lg" onclick="showPopup('value')">Learn More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Popup Overlay -->
    <div id="overlay" class="overlay"></div>
    <div id="popup" class="popup">
        <h3 id="popup-title" class="text-2xl font-bold mb-4"></h3>
        <p id="popup-content" class="mb-4"></p>
        <button class="btn-lift px-4 py-2 bg-green-600 dark:bg-cyan-500 text-white rounded-lg" onclick="hidePopup()">Close</button>
    </div>

    <!-- Popular Crops Section -->
    <section class="py-16 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800 dark:text-cyan-400">Popular <span class="text-green-600 dark:text-magenta-400">Crops</span></h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="interactive-card glassmorphism rounded-xl overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('assets/images/tomato.avif');"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Tomatoes</h3>
                        <p class="text-green-600 dark:text-cyan-400 font-bold">₹45/kg</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Maharashtra</p>
                    </div>
                </div>
                <div class="interactive-card glassmorphism rounded-xl overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('assets/images/potato.webp');"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Potatoes</h3>
                        <p class="text-green-600 dark:text-cyan-400 font-bold">₹22/kg</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Uttar Pradesh</p>
                    </div>
                </div>
                <div class="interactive-card glassmorphism rounded-xl overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('assets/images/onion.jpg');"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Onions</h3>
                        <p class="text-green-600 dark:text-cyan-400 font-bold">₹30/kg</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Karnataka</p>
                    </div>
                </div>
                <div class="interactive-card glassmorphism rounded-xl overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('assets/images/banana.jpg');"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Banana</h3>
                        <p class="text-green-600 dark:text-cyan-400 font-bold">₹30/kg</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Andhra Pradesh</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Market Trends Section with Chart -->
    <section class="py-16 bg-gradient-to-b from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800 dark:text-cyan-400">Market <span class="text-green-600 dark:text-magenta-400">Trends</span></h2>
            <div class="glassmorphism p-6 rounded-xl">
                <canvas id="marketTrendsChart" class="max-h-96"></canvas>
            </div>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="glassmorphism p-4 rounded-lg">
                    <h3 class="text-lg font-bold text-green-600 dark:text-cyan-400">Tomatoes</h3>
                    <p class="text-2xl font-semibold">₹45/kg <span class="text-green-500 text-sm">↑ 12%</span></p>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Maharashtra</p>
                </div>
                <div class="glassmorphism p-4 rounded-lg">
                    <h3 class="text-lg font-bold text-green-600 dark:text-cyan-400">Potatoes</h3>
                    <p class="text-2xl font-semibold">₹22/kg <span class="text-red-500 text-sm">↓ 5%</span></p>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Uttar Pradesh</p>
                </div>
                <div class="glassmorphism p-4 rounded-lg">
                    <h3 class="text-lg font-bold text-green-600 dark:text-cyan-400">Onions</h3>
                    <p class="text-2xl font-semibold">₹30/kg <span class="text-green-500 text-sm">↑ 8%</span></p>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Karnataka</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800 dark:text-cyan-400">What <span class="text-green-600 dark:text-magenta-400">Farmers Say</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="testimonial-card glassmorphism p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <img src="assets/images/farmer1.png" alt="Farmer" class="w-12 h-12 rounded-full mr-4 border-2 border-green-500 dark:border-cyan-500">
                        <div>
                            <h4 class="font-semibold">Rajesh Kumar</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Tomato Farmer, Maharashtra</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-200">"HortiConnect doubled my profits with real-time pricing!"</p>
                </div>
                <div class="testimonial-card glassmorphism p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <img src="assets/images/farmer2.png" alt="Farmer" class="w-12 h-12 rounded-full mr-4 border-2 border-green-500 dark:border-cyan-500">
                        <div>
                            <h4 class="font-semibold">Priya Patel</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Florist, Gujarat</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-200">"The storage feature saved my harvest during peak season."</p>
                </div>
                <div class="testimonial-card glassmorphism p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <img src="assets/images/farmer3.png" alt="Farmer" class="w-12 h-12 rounded-full mr-4 border-2 border-green-500 dark:border-cyan-500">
                        <div>
                            <h4 class="font-semibold">Amit Singh</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Potato Farmer, Punjab</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-200">"Value addition tips turned my crops into premium products."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="py-16 bg-gradient-to-r from-green-600 to-green-800 dark:from-cyan-500 dark:to-magenta-500 text-white text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold mb-6">Ready to Revolutionize Your Farming?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Join thousands of farmers thriving with HortiConnect’s futuristic tools.</p>
            <a href="auth/signup.php" class="btn-lift glassmorphism px-8 py-4 text-white font-semibold hover:bg-green-700 dark:hover:bg-cyan-600 transition">Get Started Now</a>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script>
        // Typed.js for Hero Section
        new Typed('#typed-text', {
            strings: ['Grow More Sell Smarter!', 'Future of Farming', 'Profit Maximization','Where Technology Meets Agriculture!'],
            typeSpeed: 50,
            backSpeed: 30,
            loop: true,
        });

        // Popup Functionality
        const popups = {
            pricing: { title: 'Real-Time Pricing', content: 'Get live market updates every 15 minutes with advanced analytics.' },
            storage: { title: 'Smart Storage', content: 'IoT-enabled storage with real-time vacancy alerts.' },
            value: { title: 'Value Addition', content: 'Learn processing techniques to boost your profits.' },
        };

        function showPopup(type) {
            const popup = document.getElementById('popup');
            const overlay = document.getElementById('overlay');
            document.getElementById('popup-title').textContent = popups[type].title;
            document.getElementById('popup-content').textContent = popups[type].content;
            popup.style.display = 'block';
            overlay.style.display = 'block';
        }

        function hidePopup() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }

        // Market Trends Chart
        const ctx = document.getElementById('marketTrendsChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [
                    {
                        label: 'Tomatoes (₹/kg)',
                        data: [32, 38, 42, 45, 40, 48],
                        borderColor: '#10B981',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        tension: 0.3,
                        fill: true
                    },
                    {
                        label: 'Potatoes (₹/kg)',
                        data: [20, 22, 25, 23, 21, 19],
                        borderColor: '#F59E0B',
                        backgroundColor: 'rgba(245, 158, 11, 0.1)',
                        tension: 0.3,
                        fill: true
                    },
                    {
                        label: 'Onions (₹/kg)',
                        data: [25, 28, 26, 30, 32, 29],
                        borderColor: '#3B82F6',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        tension: 0.3,
                        fill: true
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' },
                    tooltip: { mode: 'index', intersect: false }
                },
                scales: { y: { beginAtZero: false } },
                animation: { duration: 2000 }
            }
        });
    </script>
</body>
</html>