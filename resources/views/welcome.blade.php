<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glow Studio Salon</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F8F9FA] text-[#212529]">

    <!-- Navigation Bar -->
    <nav class="flex items-center justify-between px-10 py-6 bg-white border-b border-[#E9ECEF]">

        <h1 class="text-3xl font-bold tracking-wide text-[#212529]">
            Glow Studio
        </h1>

        <div class="space-x-8 hidden md:flex font-medium">
            <a href="/dashboard" class="hover:text-gray-500 transition">Dashboard</a>
            <a href="/services" class="hover:text-gray-500 transition">Services</a>
            <a href="/about" class="hover:text-gray-500 transition">About Us</a>
            <a href="/contact" class="hover:text-gray-500 transition">Contact</a>
        </div>

        <div class="flex items-center gap-3">

            <a href="/login"
            class="px-4 py-2 text-[#212529] hover:text-black transition">
                Login
            </a>

            <a href="/register"
            class="px-5 py-2 rounded-full bg-[#E9ECEF] hover:bg-[#DEE2E6] transition">
                Register
            </a>

            <button class="bg-[#212529] text-white px-6 py-2 rounded-full hover:bg-black transition">
                Book Now
            </button>

        </div>
    </nav>

    <!-- Hero Section -->
    <section class="grid md:grid-cols-2 items-center px-10 py-24 gap-16">
        <div>
            <p class="uppercase tracking-[0.3em] text-gray-500 mb-5 text-sm">
                Luxury Beauty Experience
            </p>

            <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-8">
                Your Beauty
                <span class="text-gray-400">
                    Our Passion
                </span> 
            </h1>

            <p class="text-gray-600 text-lg leading-relaxed mb-10 max-w-xl">
                Experience premium salon treatments with professional stylists,
                relaxing ambience, and effortless online booking.
            </p>

            <div class="flex gap-5">

                <button class="bg-[#212529] text-white px-6 py-3 rounded-full hover:bg-black transition">
                    Book Appointment
                </button>

                <button class="border border-[#212529] text-[#212529] px-6 py-3 rounded-full hover:bg-gray-100 transition">
                    Explore Services
                </button>
            </div>
        </div>

        <div>
            <img src="https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?q=80&w=1200&auto=format&fit=crop"
                 class="rounded-[32px] shadow-xl w-full h-[650px] object-cover">
        </div>
    </section>

    <!--services section -->
    <section class="px-10 py-24 bg-white border-t border-[#E9ECEF]">
        <div class="text-center mb-20">
            <p class="uppercase tracking-[0.3em] text-gray-500 mb-4 text-sm">
                Our Services
            </p>

            <h2 class="text-4xl font-bold ">
                Premium Beauty Treatments
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <!-- Card -->
            <div class="bg-[#F8F9FA] p-10 rounded-3xl border border-[#E9ECEF] hover:shadow-xl transition duration-300">

                <h3 class="text-2xl font-semibold mb-5">
                    Hair Styling
                </h3>

                <p class="text-gray-600 mb-8 leading-relaxed">
                    Modern cuts, coloring, and styling tailored to your personality.
                </p>

                <button class="font-semibold text-[#212529] hover:text-gray-500 transition">
                    Learn More →
                </button>

            </div>

            <!-- Card -->
            <div class="bg-[#F8F9FA] p-10 rounded-3xl border border-[#E9ECEF] hover:shadow-xl transition duration-300">

                <h3 class="text-2xl font-semibold mb-5">
                    Nail Treatment
                </h3>

                <p class="text-gray-600 mb-8 leading-relaxed">
                    Elegant manicure and pedicure services with luxury care.
                </p>

                <button class="font-semibold text-[#212529] hover:text-gray-500 transition">
                    Learn More →
                </button>

            </div>

            <!-- Card -->
            <div class="bg-[#F8F9FA] p-10 rounded-3xl border border-[#E9ECEF] hover:shadow-xl transition duration-300">

                <h3 class="text-2xl font-semibold mb-5">
                    Facial Spa
                </h3>

                <p class="text-gray-600 mb-8 leading-relaxed">
                    Relaxing facial treatments for healthy glowing skin.
                </p>

                <button class="font-semibold text-[#212529] hover:text-gray-500 transition">
                    Learn More →
                </button>

            </div>

        </div>

     </section>

     <!-- Booking CTA Section -->
<section class="px-10 py-24 bg-[#212529] text-white">

    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-center">

        <!-- Left Content -->
        <div>

            <p class="uppercase tracking-[0.3em] text-gray-400 mb-4 text-sm">
                Book Your Session
            </p>

            <h2 class="text-5xl font-bold leading-tight mb-8">
                Ready For Your
                <span class="text-gray-400">
                    Glow Up?
                </span>
            </h2>

            <p class="text-gray-300 text-lg leading-relaxed mb-10">
                Experience luxury salon treatments with our professional stylists
                and enjoy seamless online appointment booking anytime, anywhere.
            </p>

            <button class="bg-white text-[#212529] px-8 py-4 rounded-full font-semibold hover:bg-gray-200 transition duration-300">
                Book Appointment
            </button>

        </div>

        <!-- Right Side Cards -->
        <div class="grid gap-6">

            <div class="bg-white/10 backdrop-blur-md border border-white/10 p-6 rounded-3xl">
                <h3 class="text-2xl font-semibold mb-3">
                    Premium Stylists
                </h3>

                <p class="text-gray-300 leading-relaxed">
                    Our experienced beauty professionals are dedicated to bringing out your best look.
                </p>
            </div>

            <div class="bg-white/10 backdrop-blur-md border border-white/10 p-6 rounded-3xl">
                <h3 class="text-2xl font-semibold mb-3">
                    Easy Online Booking
                </h3>

                <p class="text-gray-300 leading-relaxed">
                    Schedule your appointments effortlessly with our modern booking system.
                </p>
            </div>

            <div class="bg-white/10 backdrop-blur-md border border-white/10 p-6 rounded-3xl">
                <h3 class="text-2xl font-semibold mb-3">
                    Luxury Experience
                </h3>

                <p class="text-gray-300 leading-relaxed">
                    Relax in a premium ambience designed for comfort, elegance, and self-care.
                </p>
            </div>

        </div>

    </div>

</section>

<!-- Testimonials Section -->
<section class="px-10 py-24 bg-[#F8F9FA]">

    <div class="text-center mb-20">

        <p class="uppercase tracking-[0.3em] text-gray-500 mb-4 text-sm">
            Client Reviews
        </p>

        <h2 class="text-4xl font-bold">
            What Our Customers Say
        </h2>

    </div>

    <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto">

        <!-- Review Card -->
        <div class="bg-white p-10 rounded-3xl border border-[#E9ECEF] shadow-sm hover:shadow-xl transition duration-300">

            <div class="flex items-center gap-1 mb-6 text-yellow-400 text-xl">
                ★ ★ ★ ★ ★
            </div>

            <p class="text-gray-600 leading-relaxed mb-8">
                “Absolutely loved the ambience and service. The online booking was smooth and super convenient.”
            </p>

            <div>
                <h3 class="font-semibold text-lg">
                    Sarah Lim
                </h3>

                <p class="text-gray-500 text-sm">
                    Regular Customer
                </p>
            </div>

        </div>

        <!-- Review Card -->
        <div class="bg-white p-10 rounded-3xl border border-[#E9ECEF] shadow-sm hover:shadow-xl transition duration-300">

            <div class="flex items-center gap-1 mb-6 text-yellow-400 text-xl">
                ★ ★ ★ ★ ★
            </div>

            <p class="text-gray-600 leading-relaxed mb-8">
                “Professional stylists and beautiful environment. Definitely my go-to salon now.”
            </p>

            <div>
                <h3 class="font-semibold text-lg">
                    Amanda Lee
                </h3>

                <p class="text-gray-500 text-sm">
                    Beauty Enthusiast
                </p>
            </div>

        </div>

        <!-- Review Card -->
        <div class="bg-white p-10 rounded-3xl border border-[#E9ECEF] shadow-sm hover:shadow-xl transition duration-300">

            <div class="flex items-center gap-1 mb-6 text-yellow-400 text-xl">
                ★ ★ ★ ★ ★
            </div>

            <p class="text-gray-600 leading-relaxed mb-8">
                “Easy appointment booking and excellent customer service. Highly recommended!”
            </p>

            <div>
                <h3 class="font-semibold text-lg">
                    Nur Aisyah
                </h3>

                <p class="text-gray-500 text-sm">
                    Loyal Client
                </p>
            </div>

        </div>

    </div>

</section>

<!-- Footer -->
<footer class="bg-white border-t border-[#E9ECEF] px-10 py-16">

    <div class="max-w-7xl mx-auto grid md:grid-cols-4 gap-12">

        <!-- Brand -->
        <div>

            <h2 class="text-2xl font-bold mb-5">
                Glow Studio
            </h2>

            <p class="text-gray-600 leading-relaxed">
                Luxury beauty salon experience with seamless online appointment booking and premium treatments.
            </p>

        </div>

        <!-- Navigation -->
        <div>

            <h3 class="font-semibold text-lg mb-5">
                Navigation
            </h3>

            <ul class="space-y-3 text-gray-600">

                <li>
                    <a href="#" class="hover:text-black transition">
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="#" class="hover:text-black transition">
                        Services
                    </a>
                </li>

                <li>
                    <a href="#" class="hover:text-black transition">
                        About
                    </a>
                </li>

                <li>
                    <a href="#" class="hover:text-black transition">
                        Contact
                    </a>
                </li>

            </ul>

        </div>

        <!-- Services -->
        <div>

            <h3 class="font-semibold text-lg mb-5">
                Services
            </h3>

            <ul class="space-y-3 text-gray-600">

                <li>Hair Styling</li>
                <li>Facial Spa</li>
                <li>Nail Treatment</li>
                <li>Hair Coloring</li>

            </ul>

        </div>

        <!-- Contact -->
        <div>

            <h3 class="font-semibold text-lg mb-5">
                Contact
            </h3>

            <ul class="space-y-3 text-gray-600">

                <li>+60 12-345 6789</li>
                <li>hello@glowstudio.com</li>
                <li>Kuala Lumpur, Malaysia</li>

            </ul>

        </div>

    </div>

    <!-- Bottom -->
    <div class="border-t border-[#E9ECEF] mt-16 pt-8 text-center text-gray-500 text-sm">
        © 2026 Glow Studio. All rights reserved.
    </div>

</footer>

</body>
</html>
               