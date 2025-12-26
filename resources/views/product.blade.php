<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GE | Products</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="">
    <div class="main">
        <!-- Header -->
        <header
            class="w-full sticky top-0 z-50 flex justify-between items-center px-4 md:px-8 lg:px-12 py-4 text-[var(--text)] transition-all duration-300">
            <div class="logo">
                <h1 class="text-xl md:text-2xl lg:text-3xl font-bold text-[var(--text-primary)]">Gada Electronics</h1>
            </div>

            <!-- Desktop Navigation (hidden on mobile) -->
            <nav class="hidden md:flex justify-center items-center h-full">
                <ul class="flex justify-center items-center gap-4 md:gap-6 lg:gap-8 list-none">
                    <li><a href="../../index.html"
                            class="text-[var(--text)] hover:text-[var(--text-primary)] transition-all duration-300 no-underline">Home</a>
                    </li>
                    <li><a href="../../index.html#About"
                            class="text-[var(--text)] hover:text-[var(--text-primary)] transition-all duration-300 no-underline">About</a>
                    </li>
                    <li><a href="../../index.html#Services"
                            class="text-[var(--text)] hover:text-[var(--text-primary)] transition-all duration-300 no-underline">Services</a>
                    </li>
                    <li><a href="../../index.html#Contact"
                            class="text-[var(--text)] hover:text-[var(--text-primary)] transition-all duration-300 no-underline">Contact</a>
                    </li>
                    <li><a href="#"
                            class="text-[var(--text)] hover:text-[var(--text-primary)] transition-all duration-300 no-underline">Products</a>
                    </li>
                </ul>
            </nav>

            <!-- Mobile Menu Button (visible on mobile only) -->
            <button id="mobile-menu-button"
                class="md:hidden bg-[var(--primary)]/30 text-[var(--text-primary)] px-4 py-2 rounded hover:bg-[var(--primary)]/20 transition-all duration-300">
                Menu
            </button>

            <div class="flex items-center gap-4">
                <!-- Login button (hidden on mobile) -->
                <button
                    class="hidden md:block bg-[var(--primary)]/30 px-4 py-2 text-[var(--text-primary)] rounded hover:bg-[var(--primary)]/20 transition-all duration-300">
                    <a href="src/pages/login.html" class="no-underline">Login</a>
                </button>
    
                <!-- light/dark toggle -->
                <button id="theme-toggle"
                    class="bg-[var(--primary)]/30 text-[var(--text-primary)] px-4 py-2 rounded hover:bg-[var(--primary)]/20 transition-all duration-300">
                    <i class="fas fa-sun">Light</i>
                </button>
            </div>

            <!-- Mobile Menu (hidden by default) -->
            <div id="mobile-menu"
                class="md:hidden hidden fixed top-0 left-0 w-full h-screen bg-[var(--bg)]/95 backdrop-blur-sm z-40">
                <div class="flex justify-between items-center px-4 py-4">
                    <h1 class="text-xl font-bold text-[var(--text-primary)]">Gada Electronics</h1>
                    <button id="mobile-menu-close" class="text-[var(--text)] text-2xl">&times;</button>
                </div>
                <nav class="px-4 pb-4">
                    <ul class="flex flex-col gap-4 list-none">
                        <li><a href="#"
                                class="block py-2 text-[var(--text)] hover:text-[var(--text-primary)] transition-all duration-300 no-underline border-b border-[var(--border)]/30">Home</a>
                        </li>
                        <li><a href="#About"
                                class="block py-2 text-[var(--text)] hover:text-[var(--text-primary)] transition-all duration-300 no-underline border-b border-[var(--border)]/30">About</a>
                        </li>
                        <li><a href="#Services"
                                class="block py-2 text-[var(--text)] hover:text-[var(--text-primary)] transition-all duration-300 no-underline border-b border-[var(--border)]/30">Services</a>
                        </li>
                        <li><a href="#Contact"
                                class="block py-2 text-[var(--text)] hover:text-[var(--text-primary)] transition-all duration-300 no-underline border-b border-[var(--border)]/30">Contact</a>
                        </li>
                        <li><a href="product"
                                class="block py-2 text-[var(--text)] hover:text-[var(--text-primary)] transition-all duration-300 no-underline border-b border-[var(--border)]/30">Products</a>
                        </li>
                        <li class="pt-4"><a href="login"
                                class="block py-2 text-[var(--text-primary)] hover:bg-[var(--primary)]/20 transition-all duration-300 no-underline text-center bg-[var(--primary)]/30 rounded px-4">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- End of Header -->

        <!-- Product Section -->
        <section class="w-full py-12 md:py-20 px-4 md:px-8 lg:px-12 bg-[var(--bg)] text-[var(--text)]">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our <span class="text-[var(--primary)]">Popular
                        Products</span></h2>
                <p class="text-lg md:text-xl text-[var(--text-muted)] max-w-3xl mx-auto">
                    Discover our best-selling electronics with Jethalal's Guarantee!
                </p>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8">

                <!-- Product 1: Tony TV 55" 4K Smart TV -->
                <div
                    class="bg-[var(--bg-light)] rounded-lg overflow-hidden shadow-[var(--shadow)] transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="relative h-64 bg-[var(--bg-dark)] flex items-center justify-center overflow-hidden">
                        <img src="assets/products/tony-tv.png" alt="Tony TV 55 inch 4K Smart TV"
                            class="w-full h-full object-contain p-4">
                        <span
                            class="absolute top-2 right-2 bg-[var(--primary)] text-[var(--bg-dark)] text-xs px-2 py-1 rounded-full">-15%</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-1">Tony TV 55" 4K Smart TV</h3>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-[var(--text-muted)] line-through">₹59,999</span>
                            <span class="text-xl font-bold text-[var(--primary)]">₹50,999</span>
                        </div>
                        <p class="text-sm text-[var(--text-muted)] mb-3">
                            4K UHD, Dolby Vision, Smart TV with built-in streaming apps
                        </p>
                        <div class="flex gap-2">
                            <button
                                class="flex-1 bg-[var(--primary)]/90 hover:bg-[var(--primary)] text-[var(--bg-dark)] py-2 px-3 rounded text-sm transition-colors">
                                Add to Cart
                            </button>
                            <button
                                class="w-10 h-10 bg-[var(--bg)] border border-[var(--border)] rounded flex items-center justify-center hover:bg-[var(--primary)]/20 transition-colors">
                                <img src="../assets/heart.png" alt="Wishlist" class="w-5 h-5">
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 2: Ramsung Galaxy M54 -->
                <div
                    class="bg-[var(--bg-light)] rounded-lg overflow-hidden shadow-[var(--shadow)] transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="relative h-64 bg-[var(--bg-dark)] flex items-center justify-center overflow-hidden">
                        <img src="assets/products/ramsung-m54.png" alt="Ramsung Galaxy M54"
                            class="w-full h-full object-contain p-4">
                        <span
                            class="absolute top-2 right-2 bg-[var(--primary)] text-[var(--bg-dark)] text-xs px-2 py-1 rounded-full">New</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-1">Ramsung Galaxy M54</h3>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xl font-bold text-[var(--primary)]">₹29,999</span>
                        </div>
                        <p class="text-sm text-[var(--text-muted)] mb-3">
                            108MP Camera, 6000mAh Battery, 120Hz AMOLED Display
                        </p>
                        <div class="flex gap-2">
                            <button
                                class="flex-1 bg-[var(--primary)]/90 hover:bg-[var(--primary)] text-[var(--bg-dark)] py-2 px-3 rounded text-sm transition-colors">
                                Add to Cart
                            </button>
                            <button
                                class="w-10 h-10 bg-[var(--bg)] border border-[var(--border)] rounded flex items-center justify-center hover:bg-[var(--primary)]/20 transition-colors">
                                <img src="../assets/heart.png" alt="Wishlist" class="w-5 h-5">
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 3: Red Cherry 8400 Washing Machine -->
                <div
                    class="bg-[var(--bg-light)] rounded-lg overflow-hidden shadow-[var(--shadow)] transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="relative h-64 bg-[var(--bg-dark)] flex items-center justify-center overflow-hidden">
                        <img src="assets/products/red-cherry-8400.png" alt="Red Cherry 8400 Washing Machine"
                            class="w-full h-full object-contain p-4">
                        <span
                            class="absolute top-2 right-2 bg-[var(--primary)] text-[var(--bg-dark)] text-xs px-2 py-1 rounded-full">Bestseller</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-1">Red Cherry 8400</h3>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xl font-bold text-[var(--primary)]">₹24,999</span>
                        </div>
                        <p class="text-sm text-[var(--text-muted)] mb-3">
                            8.5kg Fully Automatic, Inverter Motor, 5 Star Energy Rating
                        </p>
                        <div class="flex gap-2">
                            <button
                                class="flex-1 bg-[var(--primary)]/90 hover:bg-[var(--primary)] text-[var(--bg-dark)] py-2 px-3 rounded text-sm transition-colors">
                                Add to Cart
                            </button>
                            <button
                                class="w-10 h-10 bg-[var(--bg)] border border-[var(--border)] rounded flex items-center justify-center hover:bg-[var(--primary)]/20 transition-colors">
                                <img src="../assets/heart.png" alt="Wishlist" class="w-5 h-5">
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 4: Sony Air Conditioner -->
                <div
                    class="bg-[var(--bg-light)] rounded-lg overflow-hidden shadow-[var(--shadow)] transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="relative h-64 bg-[var(--bg-dark)] flex items-center justify-center overflow-hidden">
                        <img src="assets/products/sony-ac.png" alt="Sony 1.5 Ton AC"
                            class="w-full h-full object-contain p-4">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-1">Sony 1.5 Ton 5 Star AC</h3>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-[var(--text-muted)] line-through">₹42,999</span>
                            <span class="text-xl font-bold text-[var(--primary)]">₹38,999</span>
                        </div>
                        <p class="text-sm text-[var(--text-muted)] mb-3">
                            Inverter Compressor, Anti-Bacterial Filter, 5 Star Energy Rating
                        </p>
                        <div class="flex gap-2">
                            <button
                                class="flex-1 bg-[var(--primary)]/90 hover:bg-[var(--primary)] text-[var(--bg-dark)] py-2 px-3 rounded text-sm transition-colors">
                                Add to Cart
                            </button>
                            <button
                                class="w-10 h-10 bg-[var(--bg)] border border-[var(--border)] rounded flex items-center justify-center hover:bg-[var(--primary)]/20 transition-colors">
                                <img src="../assets/heart.png" alt="Wishlist" class="w-5 h-5">
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 5: Apple AirPods -->
                <div
                    class="bg-[var(--bg-light)] rounded-lg overflow-hidden shadow-[var(--shadow)] transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="relative h-64 bg-[var(--bg-dark)] flex items-center justify-center overflow-hidden">
                        <img src="assets/products/airpods.png" alt="Apple AirPods Pro"
                            class="w-full h-full object-contain p-4">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-1">Apple AirPods Pro</h3>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xl font-bold text-[var(--primary)]">₹22,999</span>
                        </div>
                        <p class="text-sm text-[var(--text-muted)] mb-3">
                            Active Noise Cancellation, Transparency Mode, Spatial Audio
                        </p>
                        <div class="flex gap-2">
                            <button
                                class="flex-1 bg-[var(--primary)]/90 hover:bg-[var(--primary)] text-[var(--bg-dark)] py-2 px-3 rounded text-sm transition-colors">
                                Add to Cart
                            </button>
                            <button
                                class="w-10 h-10 bg-[var(--bg)] border border-[var(--border)] rounded flex items-center justify-center hover:bg-[var(--primary)]/20 transition-colors">
                                <img src="../assets/heart.png" alt="Wishlist" class="w-5 h-5">
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 6: Mi Power Bank -->
                <div
                    class="bg-[var(--bg-light)] rounded-lg overflow-hidden shadow-[var(--shadow)] transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="relative h-64 bg-[var(--bg-dark)] flex items-center justify-center overflow-hidden">
                        <img src="assets/products/mi-powerbank.png" alt="Mi 20000mAh Power Bank"
                            class="w-full h-full object-contain p-4">
                        <span
                            class="absolute top-2 right-2 bg-[var(--primary)] text-[var(--bg-dark)] text-xs px-2 py-1 rounded-full">Hot
                            Deal</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-1">Mi 20000mAh Power Bank</h3>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-[var(--text-muted)] line-through">₹2,499</span>
                            <span class="text-xl font-bold text-[var(--primary)]">₹1,799</span>
                        </div>
                        <p class="text-sm text-[var(--text-muted)] mb-3">
                            18W Fast Charging, Dual Output, Compact Design
                        </p>
                        <div class="flex gap-2">
                            <button
                                class="flex-1 bg-[var(--primary)]/90 hover:bg-[var(--primary)] text-[var(--bg-dark)] py-2 px-3 rounded text-sm transition-colors">
                                Add to Cart
                            </button>
                            <button
                                class="w-10 h-10 bg-[var(--bg)] border border-[var(--border)] rounded flex items-center justify-center hover:bg-[var(--primary)]/20 transition-colors">
                                <img src="assets/heart.png" alt="Wishlist" class="w-5 h-5">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View More Button -->
            <div class="text-center mt-12">
                <button
                    class="bg-[var(--primary)]/30 hover:bg-[var(--primary)]/20 text-[var(--text-primary)] px-6 py-3 rounded transition-all">
                    View All Products
                </button>
            </div>
        </section>
        <!-- End of Product Section -->

    </div>
</body>
<script>
    /* Sticky nav bar */
    window.addEventListener('scroll', function () {
        var header = document.querySelector('header');

        if (window.scrollY > 0) {
            console.log(header);

            header.classList.add("sticky", "py-6", "top-0", "z-50", "text-[var(--text)]", "shadow-lg", "glassmorphic", "border-[var(--border)]");
        } else {
            header.classList.remove("sticky", "py-6", "top-0", "z-50", "text-[var(--text)]", "shadow-lg", "glassmorphic");
        }
    });

    // Mobile menu functionality
    document.addEventListener('DOMContentLoaded', function () {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const mobileMenu = document.getElementById('mobile-menu');

        // Open mobile menu
        mobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevent scrolling when menu is open
        });

        // Close mobile menu
        mobileMenuClose.addEventListener('click', function () {
            mobileMenu.classList.add('hidden');
            document.body.style.overflow = ''; // Re-enable scrolling
        });

        // Close menu when clicking on a link
        const menuLinks = mobileMenu.querySelectorAll('a');
        menuLinks.forEach(link => {
            link.addEventListener('click', function () {
                mobileMenu.classList.add('hidden');
                document.body.style.overflow = '';
            });
        });

        // Close menu when clicking outside (optional)
        document.addEventListener('click', function (event) {
            if (!mobileMenu.contains(event.target) &&
                !mobileMenuButton.contains(event.target) &&
                !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                document.body.style.overflow = '';
            }
        });

        const themeToggle = document.getElementById('theme-toggle');
        const body = document.body;

        // Check for saved theme preference
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'light') {
            body.classList.add('light');
        } else {
            body.classList.remove('light');
        }

        // Toggle theme on button click
        themeToggle.addEventListener('click', function () {
            console.log("clicked");
            
            themeToggle.textContent = body.classList.contains('light') ? 'Light' : 'Dark';
            body.classList.toggle('light');
            if (body.classList.contains('light')) {
                localStorage.setItem('theme', 'light');
            } else {
                localStorage.setItem('theme', 'dark');
            }
        });
    });
</script>

</html>