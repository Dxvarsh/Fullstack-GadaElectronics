<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GE | Home</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="">
    <div class="main relative">
        <!-- Success Message -->
        @if(session('success'))
            <div class="fixed top-20 right-4 z-50 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg animate-fade-in" id="success-message">
                {{ session('success') }}
            </div>
        @endif
        
        <!-- Header -->
        <header
            class="w-full sticky top-0 z-50 flex justify-between items-center px-4 md:px-8 lg:px-12 py-4 text-[var(--text)] transition-all duration-300">
            <div class="logo">
                <h1 class="text-xl md:text-2xl lg:text-3xl font-bold text-[var(--text-primary)]">Gada Electronics</h1>
            </div>

            <!-- Desktop Navigation (hidden on mobile) -->
            <nav class="hidden md:flex justify-center items-center h-full">
                <ul class="flex justify-center items-center gap-4 md:gap-6 lg:gap-8 list-none">
                    <li><a href="#"
                            class="text-[var(--text)] hover:text-[var(--text-primary)] transition-all duration-300 no-underline">Home</a>
                    </li>
                    <li><a href="#About"
                            class="text-[var(--text)] hover:text-[var(--text-primary)] transition-all duration-300 no-underline">About</a>
                    </li>
                    <li><a href="#Services"
                            class="text-[var(--text)] hover:text-[var(--text-primary)] transition-all duration-300 no-underline">Services</a>
                    </li>
                    <li><a href="#Contact"
                            class="text-[var(--text)] hover:text-[var(--text-primary)] transition-all duration-300 no-underline">Contact</a>
                    </li>
                    <li><a href="product"
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
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="hidden md:block bg-[var(--primary)]/30 px-4 py-2 text-[var(--text-primary)] rounded hover:bg-[var(--primary)]/20 transition-all duration-300">
                        Logout
                    </button>
                </form>
                @else
                <button
                    class="hidden md:block bg-[var(--primary)]/30 px-4 py-2 text-[var(--text-primary)] rounded hover:bg-[var(--primary)]/20 transition-all duration-300">
                    <a href="{{ route('login') }}" class="no-underline">Login</a>
                </button>
                @endauth
    
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
                        @auth
                        <li class="pt-4">
                             <form method="POST" action="{{ route('logout') }}" class="w-full">
                                @csrf
                                <button type="submit" class="w-full block py-2 text-[var(--text-primary)] hover:bg-[var(--primary)]/20 transition-all duration-300 no-underline text-center bg-[var(--primary)]/30 rounded px-4">
                                    Logout
                                </button>
                            </form>
                        </li>
                        @else
                        <li class="pt-4"><a href="{{ route('login') }}"
                                class="block py-2 text-[var(--text-primary)] hover:bg-[var(--primary)]/20 transition-all duration-300 no-underline text-center bg-[var(--primary)]/30 rounded px-4">Login</a>
                        </li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </header>
        <!-- End of Header -->

        <!-- Hero Section -->
        <section
            class="w-full min-h-[90vh] flex flex-col md:flex-row justify-between items-center px-4 md:px-8 lg:px-12 py-4 md:py-8 lg:py-12 gap-8 md:gap-12">
            <!-- Left Side (Text Content) -->
            <div
                class="left-side flex flex-col justify-center w-full md:w-1/2 order-2 md:order-1 text-center md:text-left">
                <div class="my-4">
                    <h1
                        class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-[var(--text)] leading-tight">
                        From TV to AC —
                    </h1>
                    <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl text-[var(--text-muted)] mt-4">
                        Everything with <span
                            class="transition-all duration-300 text-[var(--text-primary)] underline hover:tracking-wider">Jethalal’s</span>
                        Guarantee!
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start mt-6">
                    <button
                        class="bg-[var(--primary)]/30 px-4 py-2 md:px-6 md:py-3 text-[var(--text-primary)] rounded hover:bg-[var(--primary)]/20 transition-all duration-300">
                        <a href="product">Shop Now</a>
                    </button>
                    <button
                        class="px-4 py-2 md:px-6 md:py-3 text-[var(--text-primary)] transition-all duration-300 flex items-center justify-center md:justify-start gap-2 hover:gap-4">
                        Get Dhamaka Deals <span><img src="assets/right-arrow.png" alt="" class="w-4 h-4"></span>
                    </button>
                </div>
            </div>

            <!-- Right Side (Image) -->
            <div class="right-side flex justify-center items-center w-full md:w-1/2 order-1 md:order-2">
                <img src="assets/hero.png" alt="Gada Electronics Hero"
                    class="w-full h-auto max-h-[400px] sm:max-h-[500px] md:max-h-[600px] lg:max-h-[700px] object-contain">
            </div>
        </section>
        <!-- End of Hero Section -->

        <!-- About Section -->
        <section id="About"
            class="w-full h-auto py-12 md:py-20 px-4 md:px-8 lg:px-12 bg-[var(--bg-light)] text-[var(--text)]">
            <!-- Header -->
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-4xl font-bold mb-4 text-[var(--primary)]">About</h2>
                <p class="text-lg md:text-xl text-[var(--text-muted)] max-w-3xl mx-auto text-center">
                    Your trusted partner for home appliances since 1995.
                </p>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12 items-center">
                <!-- Left: Image -->
                <div class="flex justify-center">
                    <img src="assets/gada-electronics.jpg" alt="Gada Electronics Store"
                        class="w-full h-auto max-w-lg rounded-lg shadow-[var(--shadow)]">
                </div>

                <!-- Right: Description -->
                <div class="space-y-6">
                    <h3 class="text-xl md:text-2xl font-semibold mb-6">Our Story</h3>
                    <p class="text-base md:text-lg text-[var(--text-muted)] mb-4">
                        Founded in 1995 by Mr. Jethalal Gada, Gada Electronics started as a small shop in Mumbai’s
                        bustling markets.
                        Today, we’re a household name, known for quality appliances and unbeatable customer service.
                    </p>
                    <p class="text-base md:text-lg text-[var(--text-muted)] mb-4">
                        From TVs to ACs, we offer a curated selection of products with <strong>Jethalal’s
                            Guarantee</strong> —
                        because your trust is our priority.
                    </p>

                    <!-- Stats -->
                    <div class="grid grid-cols-2 gap-4 mt-6">
                        <div
                            class="text-center p-4 bg-[var(--bg)] rounded-lg hover:shadow-[var(--shadow)] hover:borderr transition-all duration-300">
                            <p class="text-2xl font-bold text-[var(--primary)]">25+</p>
                            <p class="text-sm text-[var(--text-muted)]">Years in Business</p>
                        </div>
                        <div
                            class="text-center p-4 bg-[var(--bg)] rounded-lg hover:shadow-[var(--shadow)] hover:borderr transition-all duration-300">
                            <p class="text-2xl font-bold text-[var(--primary)]">100K+</p>
                            <p class="text-sm text-[var(--text-muted)]">Happy Customers</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Values Section -->
            <div class="mt-16">
                <h3 class="text-xl md:text-2xl font-semibold text-center mb-6">Our Values</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Value 1 -->
                    <div class="p-6 bg-[var(--bg)] rounded-lg text-center">
                        <div
                            class="w-12 h-12 mx-auto mb-4 bg-[var(--primary)]/20 rounded-full flex items-center justify-center">
                            <img src="assets/quality.png" alt="Quality Icon" class="w-6 h-6">
                        </div>
                        <h4 class="font-semibold mb-2">Quality First</h4>
                        <p class="text-[var(--text-muted)]">
                            We source products only from trusted brands to ensure durability and performance.
                        </p>
                    </div>
                    <!-- Value 2 -->
                    <div class="p-6 bg-[var(--bg)] rounded-lg text-center">
                        <div
                            class="w-12 h-12 mx-auto mb-4 bg-[var(--primary)]/20 rounded-full flex items-center justify-center">
                            <img src="assets/trust.png" alt="Trust Icon" class="w-6 h-6">
                        </div>
                        <h4 class="font-semibold mb-2">Customer Trust</h4>
                        <p class="text-[var(--text-muted)]">
                            Transparent pricing, honest advice, and Jethalal’s Guarantee on every product.
                        </p>
                    </div>
                    <!-- Value 3 -->
                    <div class="p-6 bg-[var(--bg)] rounded-lg text-center">
                        <div
                            class="w-12 h-12 mx-auto mb-4 bg-[var(--primary)]/20 rounded-full flex items-center justify-center">
                            <img src="assets/innovation.png" alt="Innovation Icon" class="w-6 h-6">
                        </div>
                        <h4 class="font-semibold mb-2">Innovation</h4>
                        <p class="text-[var(--text-muted)]">
                            Staying ahead with the latest tech to bring you smarter home solutions.
                        </p>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="mt-16 text-center">
                <h3 class="text-xl md:text-2xl font-semibold mb-4">Visit Us Today!</h3>
                <p class="text-[var(--text-muted)] mb-6 max-w-2xl mx-auto">
                    Experience the Gada Electronics difference at our stores across Mumbai.
                </p>
                <button
                    class="bg-[var(--primary)]/30 px-6 py-3 text-[var(--text-primary)] rounded hover:bg-[var(--primary)]/20 transition-all">
                    Find a Store Near You
                </button>
            </div>
        </section>
        <!-- End of About Section -->

        <!-- Service Section -->
        <section id="Services"
            class="w-full py-12 md:py-20 px-4 md:px-8 lg:px-12 bg-[var(--bg-dark)] text-[var(--text)]">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-4xl font-bold mb-4 text-[var(--text-muted)]">Our <span
                        class="text-[var(--primary)]">Services</span>
                </h2>
                <p class="text-lg md:text-xl text-[var(--text-muted)] max-w-3xl mx-auto">
                    Comprehensive solutions for all your electronic needs with Jethalal's Guarantee!
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <!-- Service 1: Installation -->
                <div
                    class="p-6 bg-[var(--bg)] rounded-lg overflow-hidden shadow-[var(--shadow)] transition-all duration-300 hover:shadow-lg">
                    <div class="pb-6">
                        <div
                            class="w-12 h-12 mb-4 bg-[var(--primary)]/20 rounded-full flex items-center justify-center mx-auto">
                            <img src="assets/installation.png" alt="Installation Icon" class="w-6 h-6">
                        </div>
                        <h3 class="text-xl font-semibold text-center mb-3">Professional Installation</h3>
                        <p class="text-[var(--text-muted)] text-center">
                            Expert installation of TVs, ACs, and home appliances by certified technicians.
                        </p>
                    </div>
                    <div class="px-6">
                        <button
                            class="w-full bg-[var(--primary)]/30 py-2 rounded hover:bg-[var(--primary)]/20 transition-all text-[var(--text-primary)]">
                            Book Now
                        </button>
                    </div>
                </div>

                <!-- Service 2: Repair -->
                <div
                    class="p-6 bg-[var(--bg)] rounded-lg overflow-hidden shadow-[var(--shadow)] transition-all duration-300 hover:shadow-lg">
                    <div class="pb-6">
                        <div
                            class="w-12 h-12 mb-4 bg-[var(--primary)]/20 rounded-full flex items-center justify-center mx-auto">
                            <img src="assets/repair.png" alt="Repair Icon" class="w-6 h-6">
                        </div>
                        <h3 class="text-xl font-semibold text-center mb-3">Quick Repairs</h3>
                        <p class="text-[var(--text-muted)] text-center">
                            Fast and reliable repair services with 6-month warranty on all repairs.
                        </p>
                    </div>
                    <div class="px-6">
                        <button
                            class="w-full bg-[var(--primary)]/30 py-2 rounded hover:bg-[var(--primary)]/20 transition-all text-[var(--text-primary)]">
                            Schedule Repair
                        </button>
                    </div>
                </div>

                <!-- Service 3: Smart Home Setup -->
                <div
                    class="p-6 bg-[var(--bg)] rounded-lg overflow-hidden shadow-[var(--shadow)] transition-all duration-300 hover:shadow-lg">
                    <div class="pb-6">
                        <div
                            class="w-12 h-12 mb-4 bg-[var(--primary)]/20 rounded-full flex items-center justify-center mx-auto">
                            <img src="assets/smart-home.png" alt="Smart Home Icon" class="w-6 h-6">
                        </div>
                        <h3 class="text-xl font-semibold text-center mb-3">Smart Home Setup</h3>
                        <p class="text-[var(--text-muted)] text-center">
                            Transform your home with our smart automation solutions.
                        </p>
                    </div>
                    <div class="px-6">
                        <button
                            class="w-full bg-[var(--primary)]/30 py-2 rounded hover:bg-[var(--primary)]/20 transition-all text-[var(--text-primary)]">
                            Explore Options
                        </button>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mt-16 text-center">
                <h3 class="text-xl md:text-2xl font-semibold mb-4">Need Help Choosing?</h3>
                <p class="text-[var(--text-muted)] mb-6 max-w-2xl mx-auto">
                    Our experts are here to guide you to the perfect solution for your needs.
                </p>
                <button
                    class="bg-[var(--primary)]/30 px-6 py-3 text-[var(--text-primary)] rounded hover:bg-[var(--primary)]/20 transition-all">
                    Contact Our Team
                </button>
            </div>
        </section>
        <!-- End Of Service Section -->

        <!-- Contact Section -->
        <section id="Contact" class="w-full py-12 md:py-20 px-4 md:px-8 lg:px-12 bg-[var(--bg)] text-[var(--text)]">
            <!-- Page Header -->
            <div class="text-center mb-12">
                <h1 class="text-3xl md:text-5xl font-bold mb-4 text-[var(--primary)]">Contact <span
                        class="text-[var(--text-muted)]">Us</span></h1>
                <p class="text-lg md:text-xl text-[var(--text-muted)] max-w-3xl mx-auto">
                    We're here to help with all your electronic needs. Reach out to us anytime!
                </p>
            </div>

            <!-- Contact Methods Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Location -->
                <div class="bg-[var(--bg-light)] p-6 rounded-lg text-center shadow-[var(--shadow)]">
                    <div
                        class="w-16 h-16 mx-auto mb-4 bg-[var(--primary)]/20 rounded-full flex items-center justify-center">
                        <img src="assets/location.png" alt="Location" class="w-8 h-8">
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Our Location</h3>
                    <p class="text-[var(--text-muted)]">123 Gokuldham Society,<br>Mumbai, Maharashtra 400063</p>
                </div>

                <!-- Phone -->
                <div class="bg-[var(--bg-light)] p-6 rounded-lg text-center shadow-[var(--shadow)]">
                    <div
                        class="w-16 h-16 mx-auto mb-4 bg-[var(--primary)]/20 rounded-full flex items-center justify-center">
                        <img src="assets/phone.png" alt="Phone" class="w-8 h-8">
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Call Us</h3>
                    <p class="text-[var(--text-muted)]">
                        <a href="tel:+912212345678" class="hover:text-[var(--primary)] transition-colors">+91 22 1234
                            5678</a><br>
                        <a href="tel:+919876543210" class="hover:text-[var(--primary)] transition-colors">+91 98765
                            43210</a>
                    </p>
                </div>

                <!-- Email -->
                <div class="bg-[var(--bg-light)] p-6 rounded-lg text-center shadow-[var(--shadow)]">
                    <div
                        class="w-16 h-16 mx-auto mb-4 bg-[var(--primary)]/20 rounded-full flex items-center justify-center">
                        <img src="assets/email.png" alt="Email" class="w-8 h-8">
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Email Us</h3>
                    <p class="text-[var(--text-muted)]">
                        <a href="mailto:sales@gadaelectronics.com"
                            class="hover:text-[var(--primary)] transition-colors">sales@gadaelectronics.com</a><br>
                        <a href="mailto:support@gadaelectronics.com"
                            class="hover:text-[var(--primary)] transition-colors">support@gadaelectronics.com</a>
                    </p>
                </div>
            </div>

            <!-- Contact Form and Map -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Contact Form -->
                <div class="bg-[var(--bg-light)] p-6 md:p-8 rounded-lg shadow-[var(--shadow)]">
                    <h2 class="text-2xl font-semibold mb-6 text-center text-[var(--primary)]">Send Us a Message</h2>
                    <form class="space-y-4" action="{{ route('contact.submit')}}" method="POST">
                    @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="firstName" class="block text-sm font-medium mb-2">First Name*</label>
                                <input type="text" name="fname" id="firstName" required
                                    class="w-full px-3 py-2 bg-[var(--bg)] rounded border border-[var(--border)] focus:outline-none focus:ring-2 focus:ring-[var(--primary)] mb-2">
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium mb-2">Last Name*</label>
                                <input type="text" name="lname" id="lastName" required
                                    class="w-full px-3 py-2 bg-[var(--bg)] rounded border border-[var(--border)] focus:outline-none focus:ring-2 focus:ring-[var(--primary)] mb-2">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium mb-2">Email*</label>
                            <input type="email" name="email" id="email" required
                                class="w-full px-3 py-2 bg-[var(--bg)] rounded border border-[var(--border)] focus:outline-none focus:ring-2 focus:ring-[var(--primary)] mb-2">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium mb-2">Phone Number</label>
                            <input type="tel" name="phone" id="phone"
                                class="w-full px-3 py-2 bg-[var(--bg)] rounded border border-[var(--border)] focus:outline-none focus:ring-2 focus:ring-[var(--primary)] mb-2">
                        </div>

                        <div>
                            <label for="service" class="block text-sm font-medium mb-2">Service Interest*</label>
                            <select id="service" required name="service"
                                class="w-full px-3 py-2 bg-[var(--bg)] rounded border border-[var(--border)] focus:outline-none focus:ring-2 focus:ring-[var(--primary)] mb-2">
                                <option value="">Select a service</option>
                                <option value="sales">Product Purchase</option>
                                <option value="installation">Installation</option>
                                <option value="repair">Repair Service</option>
                                <option value="warranty">Warranty Claim</option>
                                <option value="other">Other Inquiry</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium mb-2">Message*</label>
                            <textarea id="message"name="message" rows="4" required
                                class="w-full px-3 py-2 bg-[var(--bg)] rounded border border-[var(--border)] focus:outline-none focus:ring-2 focus:ring-[var(--primary)] mb-2"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit"
                                class="bg-[var(--primary)]/90 hover:bg-[var(--primary)] px-6 py-2 rounded text-[var(--bg-dark)] font-medium transition-colors mb-2">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Map -->
                <div class="bg-[var(--bg-light)] p-6 md:p-8 rounded-lg shadow-[var(--shadow)] h-[400px]">
                    <h2 class="text-2xl font-semibold mb-4 text-center text-[var(--primary)]">Our Location</h2>
                    <!-- Embed Google Map -->
                    <div class="w-full h-[320px] rounded-lg overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.57432570925!2d72.830215314851!3d19.0641207870829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9f9ea0a0a0d%3A0x733f4f8b1a0a0a0!2sGokuldham%20Society!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

            <!-- Business Hours -->
            <div class="mt-16 bg-[var(--bg-light)] p-6 md:p-8 rounded-lg shadow-[var(--shadow)]">
                <h2 class="text-2xl font-semibold mb-6 text-center text-[var(--primary)]">Business Hours</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 max-w-2xl mx-auto">
                    <div class="text-center">
                        <h3 class="font-medium">Monday - Friday</h3>
                        <p class="text-[var(--text-muted)]">10:00 AM - 8:00 PM</p>
                    </div>
                    <div class="text-center">
                        <h3 class="font-medium">Saturday</h3>
                        <p class="text-[var(--text-muted)]">10:00 AM - 6:00 PM</p>
                    </div>
                    <div class="text-center">
                        <h3 class="font-medium">Sunday</h3>
                        <p class="text-[var(--text-muted)]">12:00 PM - 5:00 PM</p>
                    </div>
                </div>
            </div>

            <!-- Social Media -->
            <div class="mt-12 text-center">
                <h2 class="text-xl font-semibold mb-4 text-[var(--primary)]">Connect With Us</h2>
                <div class="flex justify-center gap-6">
                    <a href="#"
                        class="w-10 h-10 bg-[var(--primary)]/20 rounded-full flex items-center justify-center hover:bg-[var(--primary)]/30 transition-colors">
                        <img src="assets/facebook.png" alt="Facebook" class="w-5 h-5">
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-[var(--primary)]/20 rounded-full flex items-center justify-center hover:bg-[var(--primary)]/30 transition-colors">
                        <img src="assets/instagram.png" alt="Instagram" class="w-5 h-5">
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-[var(--primary)]/20 rounded-full flex items-center justify-center hover:bg-[var(--primary)]/30 transition-colors">
                        <img src="assets/twitter.png" alt="Twitter" class="w-5 h-5">
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-[var(--primary)]/20 rounded-full flex items-center justify-center hover:bg-[var(--primary)]/30 transition-colors">
                        <img src="assets/linkedin.png" alt="LinkedIn" class="w-5 h-5">
                    </a>
                </div>
            </div>
        </section>
        <!-- End Of Contact Section -->

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

        // Auto-hide success message after 5 seconds
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(() => {
                successMessage.style.opacity = '0';
                successMessage.style.transition = 'opacity 0.5s ease';
                setTimeout(() => {
                    successMessage.remove();
                }, 500);
            }, 5000);
        }
    });
</script>

</html>