<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glow Studio Register</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f6f6f4] min-h-screen flex items-center justify-center px-6 py-12">

    <div class="w-full max-w-md bg-white rounded-[40px] p-10 shadow-sm border border-gray-100">

        <!-- LOGO -->
        <div class="text-center mb-10">

            <h1 class="text-5xl font-black text-gray-900">
                Glow Studio
            </h1>

            <p class="text-gray-500 mt-3 tracking-[0.3em] text-sm uppercase">
                Create Account
            </p>

        </div>

        <!-- ERRORS -->
        @if ($errors->any())

            <div class="mb-6 bg-red-50 border border-red-100 text-red-500 rounded-2xl p-4 text-sm">

                <ul class="space-y-1">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form method="POST" action="{{ route('register') }}">

            @csrf

            <!-- NAME -->
            <div class="mb-5">

                <label class="block text-gray-800 font-semibold mb-3">
                    Full Name
                </label>

                <input
                    type="text"
                    name="name"
                    required
                    autofocus
                    class="w-full rounded-2xl border border-gray-200 px-5 py-4 focus:ring-0 focus:border-black"
                >

            </div>

            <!-- EMAIL -->
            <div class="mb-5">

                <label class="block text-gray-800 font-semibold mb-3">
                    Email Address
                </label>

                <input
                    type="email"
                    name="email"
                    required
                    class="w-full rounded-2xl border border-gray-200 px-5 py-4 focus:ring-0 focus:border-black"
                >

            </div>

            <!-- PASSWORD -->
            <div class="mb-5">

                <label class="block text-gray-800 font-semibold mb-3">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    required
                    class="w-full rounded-2xl border border-gray-200 px-5 py-4 focus:ring-0 focus:border-black"
                >

            </div>

            <!-- CONFIRM PASSWORD -->
            <div class="mb-8">

                <label class="block text-gray-800 font-semibold mb-3">
                    Confirm Password
                </label>

                <input
                    type="password"
                    name="password_confirmation"
                    required
                    class="w-full rounded-2xl border border-gray-200 px-5 py-4 focus:ring-0 focus:border-black"
                >

            </div>

            <!-- BUTTON -->
            <button
                type="submit"
                class="w-full bg-[#1f242d] hover:bg-black text-white py-4 rounded-full font-semibold text-lg transition"
            >
                Create Account
            </button>

            <!-- LOGIN -->
            <p class="text-center text-gray-500 mt-8">

                Already have an account?

                <a
                    href="{{ route('login') }}"
                    class="text-black font-semibold"
                >
                    Log In
                </a>

            </p>

        </form>

    </div>

</body>
</html>