<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F8F9FA] min-h-screen">

    <nav class="bg-white border-b border-gray-100 px-10 py-5 flex items-center justify-between">

    <a href="/services" class="text-3xl font-black text-gray-900">
        Glow Studio
    </a>

    <div class="flex items-center gap-4">

        <span class="text-gray-600 font-medium">
            {{ auth()->user()->name }}
        </span>

        <form method="POST" action="{{ route('logout') }}">

            @csrf

            <button
                type="submit"
                class="bg-[#1f242d] hover:bg-black text-white px-6 py-3 rounded-full font-semibold transition"
            >
                Logout
            </button>

        </form>

    </div>

</nav>

    <div class="bg-white shadow-lg rounded-[30px] p-10 w-full max-w-2xl">

        <h1 class="text-4xl font-bold text-[#212529] mb-2">
            Book Appointment
        </h1>

        <p class="text-gray-500 mb-8">
            Complete your booking details below.
        </p>

        <div class="mb-8 p-6 rounded-2xl bg-[#F8F9FA]">

            <h2 class="text-2xl font-semibold text-[#212529]">
                {{ $service->name }}
            </h2>

            <p class="text-gray-500 mt-2">
                {{ $service->description }}
            </p>

            <div class="flex justify-between mt-5">

                <p class="font-bold text-2xl text-[#212529]">
                    RM {{ $service->price }}
                </p>

                <p class="text-gray-500">
                    {{ $service->duration }} mins
                </p>

            </div>
        </div>

        @if(session('error'))

        <div class="mb-6 bg-red-100 border border-red-200 text-red-700 px-6 py-4 rounded-2xl">

            {{ session('error') }}

        </div>

        @endif

        <form action="/bookings" method="POST" class="space-y-6">

            @csrf

            <input
                type="hidden"
                name="service_id"
                value="{{ $service->id }}"
            >

            <div>
                <label class="block mb-2 font-medium">
                    Full Name
                </label>
                <input
                    type="text"
                    name="customer_name"
                    value="{{ auth()->user()->name }}"
                    readonly
                    class="w-full border border-gray-200 rounded-3xl px-6 py-5 bg-gray-100"
                >
            </div>

            <div>
                <label class="block mb-2 font-medium">
                    Phone Number
                </label>

                <input
                    type="text"
                    name="customer_phone"
                    required
                    class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-[#212529]"
                >
            </div>

            <div>
                <label class="block mb-2 font-medium">
                    Booking Date
                </label>

                <input
                    type="date"
                    name="booking_date"
                    min="{{ date('Y-m-d') }}"
                    value="{{ request('booking_date') }}"
                    onchange="window.location.href='?booking_date=' + this.value"
                    required
                    class="w-full border border-gray-200 rounded-3xl px-6 py-5 text-lg focus:outline-none focus:ring-2 focus:ring-black"
                >
            </div>

           <div class="mt-6">

    <label class="block text-lg font-semibold mb-4">
        Choose Time Slot
    </label>

    <div class="grid grid-cols-2 gap-4">

            @foreach($slots as $slot)

                @php
                    $isBooked = in_array($slot, $bookedSlots);
                @endphp

                <label>

                    <input
                        type="radio"
                        name="time_slot"
                        value="{{ $slot }}"
                        class="hidden peer"
                        {{ $isBooked ? 'disabled' : '' }}
                        required
                    >

                    <div class="
                        p-4 rounded-2xl border text-center font-semibold transition

                        {{ $isBooked
                            ? 'bg-gray-200 text-gray-400 cursor-not-allowed'
                            : 'bg-white hover:bg-black hover:text-white cursor-pointer peer-checked:bg-black peer-checked:text-white'
                        }}
                    ">

                        {{ $slot }}

                        @if($isBooked)
                            <p class="text-xs mt-1">
                                Booked
                            </p>
                        @endif

                    </div>

                </label>

            @endforeach

        </div>

        </div>

            <button
                type="submit"
                class="w-full bg-[#212529] text-white py-4 rounded-full text-lg font-semibold hover:opacity-90 transition"
            >
                Confirm Booking
            </button>

        </form>

    </div>

</body>
</html>