<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GE | Login/Register</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="min-h-screen flex items-center justify-center p-4 bg-[var(--bg)] text-[var(--text)]">
        <div class="w-full max-w-md">
            <!-- Tabs -->
            <div class="flex border-b border-[var(--border)] mb-6">
                <button id="login-tab"
                    class="flex-1 py-3 text-center font-medium focus:outline-none border-b-2 border-[var(--primary)] text-[var(--primary)]">
                    Login
                </button>
                <button id="register-tab"
                    class="flex-1 py-3 text-center font-medium focus:outline-none text-[var(--text-muted)] hover:text-[var(--text)]">
                    Register
                </button>
            </div>

            <!-- Messages -->
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Login Form (shown by default) -->
            <div id="login-form">
                <h2 class="text-2xl font-bold mb-6 text-center">Welcome Back</h2>
                <form class="space-y-4" action="{{ route('login.submit')}}" method="POST">
                    @csrf
                    <div>
                        <label for="login-email" class="block text-sm font-medium mb-1">Email</label>
                        <input type="email" name="login_email" id="login-email"
                            class="w-full px-3 py-2 bg-[var(--bg-light)] rounded border border-[var(--border)] focus:outline-none focus:ring-2 focus:ring-[var(--primary)]"
                            placeholder="your@email.com" required>
                    </div>
                    <div>
                        <label for="login-password" class="block text-sm font-medium mb-1">Password</label>
                        <input type="password" name="login_password" id="login-password"
                            class="w-full px-3 py-2 bg-[var(--bg-light)] rounded border border-[var(--border)] focus:outline-none focus:ring-2 focus:ring-[var(--primary)]"
                            placeholder="••••••••" required>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember-me" class="mr-2">
                            <label for="remember-me" class="text-sm">Remember me</label>
                        </div>
                        <a href="#" class="text-sm text-[var(--primary)] hover:underline">Forgot password?</a>
                    </div>
                    <button type="submit"
                        class="w-full bg-[var(--primary)] hover:bg-[color-mix(in_srgb,var(--primary),black_10%)] text-[var(--bg-dark)] py-2 px-4 rounded font-medium transition-colors">
                        Sign In
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm text-[var(--text-muted)]">Don't have an account? <button id="show-register"
                            class="text-[var(--primary)] hover:underline font-medium">Register</button></p>
                </div>
            </div>

            <!-- Register Form (hidden by default) -->
            <div id="register-form" class="hidden">
                <h2 class="text-2xl font-bold mb-6 text-center">Create Account</h2>
                <form class="space-y-4" action="{{ route('register.submit')}}" method="POST">
                    @csrf
                    <div>
                        <label for="register-name" class="block text-sm font-medium mb-1">Full Name</label>
                        <input type="text" name="reg_name" id="register-name"
                            class="w-full px-3 py-2 bg-[var(--bg-light)] rounded border border-[var(--border)] focus:outline-none focus:ring-2 focus:ring-[var(--primary)]"
                            placeholder="Your name" required>
                    </div>
                    <div>
                        <label for="register-email" class="block text-sm font-medium mb-1">Email</label>
                        <input type="email" name="reg_email" id="register-email"
                            class="w-full px-3 py-2 bg-[var(--bg-light)] rounded border border-[var(--border)] focus:outline-none focus:ring-2 focus:ring-[var(--primary)]"
                            placeholder="your@email.com" required>
                    </div>
                    <div>
                        <label for="register-phone" class="block text-sm font-medium mb-1">Phone Number</label>
                        <input type="tel" name="reg_phone" id="register-phone"
                            class="w-full px-3 py-2 bg-[var(--bg-light)] rounded border border-[var(--border)] focus:outline-none focus:ring-2 focus:ring-[var(--primary)]"
                            placeholder="9876543210" required>
                    </div>
                    <div>
                        <label for="register-password" class="block text-sm font-medium mb-1">Password</label>
                        <input type="password" name=reg_password id="register-password"
                            class="w-full px-3 py-2 bg-[var(--bg-light)] rounded border border-[var(--border)] focus:outline-none focus:ring-2 focus:ring-[var(--primary)]"
                            placeholder="••••••••" required>
                    </div>
                    <div>
                        <label for="register-confirm" class="block text-sm font-medium mb-1">Confirm Password</label>
                        <input type="password" name="reg_confirm_password" id="register-confirm"
                            class="w-full px-3 py-2 bg-[var(--bg-light)] rounded border border-[var(--border)] focus:outline-none focus:ring-2 focus:ring-[var(--primary)]"
                            placeholder="••••••••" required>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="terms" class="mr-2" required>
                        <label for="terms" class="text-sm">I agree to the <a href="#"
                                class="text-[var(--primary)] hover:underline">Terms and Conditions</a></label>
                    </div>
                    <button type="submit"
                        class="w-full bg-[var(--primary)] hover:bg-[color-mix(in_srgb,var(--primary),black_10%)] text-[var(--bg-dark)] py-2 px-4 rounded font-medium transition-colors">
                        Sign Up
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm text-[var(--text-muted)]">Already have an account? <button id="show-login"
                            class="text-[var(--primary)] hover:underline font-medium">Login</button></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle between login and register forms
        const loginTab = document.getElementById('login-tab');
        const registerTab = document.getElementById('register-tab');
        const showRegister = document.getElementById('show-register');
        const showLogin = document.getElementById('show-login');
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');

        // Initialize based on action
        @if(isset($action) && $action === 'register')
            showRegisterForm();
        @else
            showLoginForm();
        @endif

        function showLoginForm() {
            loginForm.classList.remove('hidden');
            registerForm.classList.add('hidden');
            loginTab.classList.add('border-[var(--primary)]', 'text-[var(--primary)]');
            loginTab.classList.remove('text-[var(--text-muted)]');
            registerTab.classList.add('text-[var(--text-muted)]');
            registerTab.classList.remove('border-[var(--primary)]', 'text-[var(--primary)]');
        }

        function showRegisterForm() {
            registerForm.classList.remove('hidden');
            loginForm.classList.add('hidden');
            registerTab.classList.add('border-[var(--primary)]', 'text-[var(--primary)]');
            registerTab.classList.remove('text-[var(--text-muted)]');
            loginTab.classList.add('text-[var(--text-muted)]');
            loginTab.classList.remove('border-[var(--primary)]', 'text-[var(--primary)]');
        }

        loginTab.addEventListener('click', (e) => {
            e.preventDefault();
            showLoginForm();
        });

        registerTab.addEventListener('click', (e) => {
            e.preventDefault();
            showRegisterForm();
        });

        showRegister.addEventListener('click', (e) => {
            e.preventDefault();
            registerTab.click();
        });

        showLogin.addEventListener('click', (e) => {
            e.preventDefault();
            loginTab.click();
        });

       /* // Form submission handling
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                alert('Form submitted! (Connect to your backend)');
                // Add your actual form submission logic here
            });
        });*/
    </script>

</body>

</html>