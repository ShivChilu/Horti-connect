<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | HortiConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: url('../assets/images/field-bg.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .auth-container {
            display: flex;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        .auth-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 1rem;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            transition: all 0.3s ease;
            width: 100%;
            max-width: 28rem;
        }
        .auth-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px 0 rgba(31, 38, 135, 0.2);
        }
        .floating-label {
            transition: all 0.3s ease;
        }
        .input-field:focus ~ .floating-label,
        .input-field:not(:placeholder-shown) ~ .floating-label {
            transform: translateY(-32px) scale(0.85);
            background: rgba(255, 255, 255, 0.05);
            padding: 0 5px;
            color: #10B981;
        }
        .social-btn {
            transition: all 0.3s ease;
        }
        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .password-toggle {
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .password-toggle:hover {
            color: #10B981;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="auth-card p-8">
            <div class="text-center">
                <img class="mx-auto h-18 w-auto" src="../assets/images/logo1.png" alt="HortiConnect">
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Welcome back</h2>
                <p class="mt-2 text-sm text-gray-600">
                    Or <a href="signup.php" class="font-medium text-green-600 hover:text-green-500">create a new account</a>
                </p>
            </div>

            <form class="mt-8 space-y-6" action="_handlelogin.php" method="POST">
                <div class="rounded-md shadow-sm space-y-4">
                    <!-- Email Field with Floating Label -->
                    <div class="relative">
                        <input id="email" name="email" type="email" autocomplete="email" required 
                            class="input-field relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm"
                            placeholder=" ">
                        <label for="email" class="floating-label absolute left-3 top-3 text-gray-500 pointer-events-none">Email address</label>
                    </div>

                    <!-- Password Field with Floating Label -->
                    <div class="relative">
                        <input id="password" name="pass" type="password" autocomplete="current-password" required 
                            class="input-field relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm pr-10"
                            placeholder=" ">
                        <label for="password" class="floating-label absolute left-3 top-3 text-gray-500 pointer-events-none">Password</label>
                        <span class="password-toggle absolute right-3 top-3 text-gray-400" onclick="togglePasswordVisibility('password')">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" 
                            class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-green-600 hover:text-green-500">Forgot password?</a>
                    </div>
                </div>

                <div>
                    <button type="submit" 
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <i class="fas fa-sign-in-alt text-green-300 group-hover:text-green-200"></i>
                        </span>
                        Sign in
                    </button>
                </div>
            </form>

            <!-- Social Login Section -->
            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-transparent text-gray-500">Or continue with</span>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-2 gap-3">
                    <!-- Google Login -->
                    <a href="#" class="social-btn w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                        <img class="h-5 w-5" src="https://www.google.com/favicon.ico" alt="Google">
                        <span class="ml-2">Google</span>
                    </a>

                    <!-- Facebook Login -->
                    <a href="#" class="social-btn w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                        <i class="fab fa-facebook-f text-blue-600"></i>
                        <span class="ml-2">Facebook</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        function togglePasswordVisibility(fieldId) {
            const field = document.getElementById(fieldId);
            const icon = field.nextElementSibling.querySelector('i');
            
            if (field.type === 'password') {
                field.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                field.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }

        // Simple form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if (!email || !password) {
                e.preventDefault();
                alert('Please fill in all fields');
            }
        });
    </script>
</body>
</html>