<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F8F9FA] min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white border-b border-[#E9ECEF] px-10 py-6 flex justify-between items-center">

        <h1 class="text-3xl font-bold text-[#212529]">
            Glow Studio
        </h1>

        <div class="flex items-center gap-6">

            <a href="/services" class="text-[#212529] hover:opacity-70 transition">
                Services
            </a>

            <button class="bg-[#212529] text-white px-5 py-2 rounded-full">
                Admin Dashboard
            </button>

        </div>

    </nav>

    <!-- Page -->
    <section class="px-10 py-14">

        <div class="mb-10">

            <p class="uppercase tracking-[0.3em] text-gray-400 mb-3">
                Salon Management
            </p>

            <h1 class="text-5xl font-bold text-[#212529] mb-4">
                Customer Bookings
            </h1>

            <p class="text-gray-500 text-lg">
                Manage customer appointments and booking schedules.
            </p>

        </div>

        <form method="GET" action="/bookings" class="mb-8">

            <div class="flex items-center gap-4">

                <input
                    type="text"
                    name="search"
                    placeholder="Search customer or phone..."
                    value="{{ request('search') }}"
                    class="w-full max-w-md px-6 py-4 rounded-2xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-black"
                >

                <button
                    type="submit"
                    class="bg-black text-white px-6 py-4 rounded-2xl font-semibold hover:bg-gray-800 transition"
                >
                    Search
                </button>

            </div>

        </form>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">

        <!-- TOTAL -->
        <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

            <p class="text-gray-500 text-sm uppercase tracking-wider mb-2">
                Total Bookings
            </p>

            <h2 class="text-4xl font-bold text-gray-900">
                {{ $totalBookings }}
            </h2>

        </div>

        <!-- PENDING -->
        <div class="bg-yellow-50 rounded-3xl p-6 shadow-sm border border-yellow-100">

            <p class="text-yellow-700 text-sm uppercase tracking-wider mb-2">
                Pending
            </p>

            <h2 class="text-4xl font-bold text-yellow-600">
                {{ $pendingBookings }}
            </h2>

        </div>

        <!-- APPROVED -->
        <div class="bg-green-50 rounded-3xl p-6 shadow-sm border border-green-100">

            <p class="text-green-700 text-sm uppercase tracking-wider mb-2">
                Approved
            </p>

            <h2 class="text-4xl font-bold text-green-600">
                {{ $approvedBookings }}
            </h2>

        </div>

        <!-- CANCELLED -->
        <div class="bg-red-50 rounded-3xl p-6 shadow-sm border border-red-100">

                <p class="text-red-700 text-sm uppercase tracking-wider mb-2">
                    Cancelled
                </p>

                <h2 class="text-4xl font-bold text-red-600">
                    {{ $cancelledBookings }}
                </h2>

            </div>

        </div>

        <!-- Table -->
        <div class="bg-white rounded-3xl shadow-sm overflow-hidden border border-[#E9ECEF]">

            <table class="w-full">

                <thead class="bg-[#F8F9FA] border-b border-[#E9ECEF]">

                    <tr class="text-left">

                        <th class="px-8 py-5 text-sm uppercase tracking-wider text-gray-500">
                            Customer
                        </th>

                        <th class="px-8 py-5 text-sm uppercase tracking-wider text-gray-500">
                            Service
                        </th>

                        <th class="px-8 py-5 text-sm uppercase tracking-wider text-gray-500">
                            Date
                        </th>

                        <th class="px-8 py-5 text-sm uppercase tracking-wider text-gray-500">
                            Time
                        </th>

                        <th class="px-8 py-5 text-sm uppercase tracking-wider text-gray-500">
                            Phone
                        </th>

                        <th class="px-8 py-5 text-sm uppercase tracking-wider text-gray-500">
                            Status
                        </th>

                        <th class="px-8 py-5 text-sm uppercase tracking-wider text-gray-500">
                            Actions
                        </th>

                    </tr>

                </thead>

                <tbody>

@foreach($bookings as $booking)

<tr class="border-b border-[#F1F3F5] hover:bg-[#F8F9FA] transition">

    <td class="px-8 py-6 font-semibold text-[#212529]">
        {{ $booking->customer_name }}
    </td>

    <td class="px-8 py-6">
        {{ $booking->service->name }}
    </td>

    <td class="px-8 py-6 text-gray-600">
        {{ $booking->booking_date }}
    </td>

    <td class="px-8 py-6 text-gray-600">
        {{ $booking->booking_time }}
    </td>

    <td class="px-8 py-6 text-gray-600">
        {{ $booking->customer_phone }}
    </td>

    <!-- STATUS -->
    <td class="px-8 py-6">

        @if($booking->status == 'Pending')

            <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-sm font-semibold">
                Pending
            </span>

        @elseif($booking->status == 'Approved')

            <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-semibold">
                Approved
            </span>

        @else

            <span class="bg-red-100 text-red-700 px-4 py-2 rounded-full text-sm font-semibold">
                Cancelled
            </span>

        @endif

    </td>

    <!-- ACTIONS -->
    <td class="px-8 py-6">

        @if($booking->status == 'Pending')

            <div class="flex gap-3">

                <form action="/bookings/{{ $booking->id }}/approve" method="POST">

                    @csrf
                    @method('PATCH')

                    <input
                        type="submit"
                        value="Approve"
                        class="cursor-pointer bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full text-sm font-semibold transition"
                    />

                </form>

                <form action="/bookings/{{ $booking->id }}/cancel" method="POST">

                    @csrf
                    @method('PATCH')

                    <input
                        type="submit"
                        value="Cancel"
                        class="cursor-pointer bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-full text-sm font-semibold transition"
                    />

                </form>

            </div>

        @else

            <span class="text-gray-400 font-medium">
                No Actions
            </span>

        @endif

    </td>
</tr>

@endforeach

</tbody>

            </table>

        </div>

    </section>

</body>
</html>