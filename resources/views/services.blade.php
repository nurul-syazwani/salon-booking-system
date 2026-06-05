<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F8F9FA] text-[#212529]">

    <!-- Navbar -->
    <nav class="flex items-center justify-between px-10 py-6 bg-white border-b border-[#E9ECEF]">

        <a href="/" class="text-3xl font-bold tracking-wide">
            Glow Studio
        </a>

        <div class="hidden md:flex items-center gap-10">

            <a href="/" class="hover:text-black transition">
                Home
            </a>

            <a href="/services" class="font-semibold">
                Services
            </a>

            <a href="#" class="hover:text-black transition">
                About
            </a>

            <a href="#" class="hover:text-black transition">
                Contact
            </a>

        </div>

        <a href="/login"
           class="bg-[#212529] text-white px-6 py-3 rounded-full hover:bg-black transition">
            Login
        </a>

    </nav>

    <!-- Header -->
    <section class="max-w-7xl mx-auto px-10 pt-20 pb-10">

        <p class="uppercase tracking-[0.3em] text-gray-500 mb-4">
            Premium Beauty Services
        </p>

        <h1 class="text-6xl font-bold leading-tight mb-6">
            Our Services
        </h1>

        <p class="text-lg text-gray-600 max-w-2xl leading-relaxed">
            Discover professional salon treatments tailored to your beauty needs.
            Relax, refresh, and glow with our premium services.
        </p>

    </section>

    <!-- Services -->
    <section class="max-w-7xl mx-auto px-10 pb-24">

        <div class="grid md:grid-cols-3 gap-8">

            @foreach($services as $service)

                <div class="bg-white rounded-[32px] p-8 shadow-sm hover:shadow-xl transition duration-300 border border-[#E9ECEF]">

                    <div class="mb-8">

                        <div class="w-16 h-16 rounded-2xl bg-[#F8F9FA] flex items-center justify-center mb-6 text-3xl">
                            ✨
                        </div>

                        <h2 class="text-3xl font-bold mb-4">
                            {{ $service->name }}
                        </h2>

                        <p class="text-gray-600 leading-relaxed">
                            {{ $service->description }}
                        </p>

                    </div>

                    <div class="flex items-center justify-between mb-8">

                        <div>
                            <p class="text-sm text-gray-500 mb-1">
                                Starting From
                            </p>

                            <h3 class="text-3xl font-bold">
                                RM {{ $service->price }}
                            </h3>
                        </div>

                        <div class="text-right">

                            <p class="text-sm text-gray-500 mb-1">
                                Duration
                            </p>

                            <p class="font-semibold">
                                {{ $service->duration }} mins
                            </p>

                        </div>

                    </div>

                    <a href="/services/{{ $service->id }}/book"
                       class="block text-center w-full bg-[#212529] text-white py-4 rounded-full font-semibold hover:bg-black transition duration-300">

                        Book Appointment

                    </a>

                </div>

            @endforeach

        </div>

    </section>

    @if(session('success'))

    <div class="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center z-50">

        <div class="bg-white rounded-3xl shadow-2xl p-10 w-[400px] text-center">

                <div class="text-5xl mb-4">
                    ✨
                </div>

                <h2 class="text-3xl font-bold text-[#212529] mb-3">
                    Booking Successful
                </h2>

                <p class="text-gray-500 mb-8">
                    Your appointment has been booked successfully.
                </p>

                <button
                    onclick="window.location.href='/services'"
                    class="bg-[#212529] text-white px-8 py-3 rounded-full hover:opacity-90 transition"
                >
                    OK
                </button>

            </div>

        </div>


    @endif

</body>
</html>