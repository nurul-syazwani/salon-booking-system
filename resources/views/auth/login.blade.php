<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glow Studio Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f6f6f4] min-h-screen flex items-center justify-center px-6">

    <div class="w-full max-w-md bg-white rounded-[40px] p-10 shadow-sm border border-gray-100">

        <!-- LOGO -->
        <div class="text-center mb-10">

            <h1 class="text-5xl font-black text-gray-900">
                Glow Studio
            </h1>

            <p class="text-gray-500 mt-3 tracking-[0.3em] text-sm uppercase">
                Welcome Back
            </p>

        </div>

        <!-- SESSION STATUS -->
        @if (session('status'))

            <div class="mb-4 text-green-600 text-sm">
                {{ session('status') }}
            </div>

        @endif

        <form method="POST" action="{{ route('login') }}">

            @csrf

            <!-- EMAIL -->
            <div class="mb-6">

                <label class="block text-gray-800 font-semibold mb-3">
                    Email Address
                </label>

                <input
                    type="email"
                    name="email"
                    required
                    autofocus
                    class="w-full rounded-2xl border border-gray-200 px-5 py-4 focus:ring-0 focus:border-black"
                >

            </div>

            <!-- PASSWORD -->
            <div class="mb-6">

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

            <!-- REMEMBER -->
            <div class="flex items-center justify-between mb-8">

                <label class="flex items-center gap-2">

                    <input
                        type="checkbox"
                        name="remember"
                        class="rounded border-gray-300"
                    >

                    <span class="text-gray-600 text-sm">
                        Remember me
                    </span>

                </label>

                @if (Route::has('password.request'))

                    <a
                        href="{{ route('password.request') }}"
                        class="text-sm text-gray-500 hover:text-black transition"
                    >
                        Forgot password?
                    </a>

                @endif

            </div>

            <!-- BUTTON -->
            <button
                type="submit"
                class="w-full bg-[#1f242d] hover:bg-black text-white py-4 rounded-full font-semibold text-lg transition"
            >
                Log In
            </button>

            <!-- REGISTER -->
            <p class="text-center text-gray-500 mt-8">

                Don’t have an account?

                <a
                    href="{{ route('register') }}"
                    class="text-black font-semibold"
                >
                    Register
                </a>

            </p>

        </form>

    </div>

</body>
</html>