<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />









    <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border">
        <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
            <h5>Login Akun</h5>
        </div>

        <div class="flex-auto p-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <input
                        class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:outline-none"
                        id="email" type="email" name="email" :value="old('email')" required autofocus
                        autocomplete="username" placeholder="Email" aria-label="Email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <input
                        class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:outline-none"
                        type="password" name="password" required autocomplete="current-password" id="password"
                        placeholder="Password" aria-label="Password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                {{-- <div class="mb-4 flex items-center">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200" />
                    <label for="remember_me" class="ms-2 text-sm text-gray-600">Remember me</label>
                </div> --}}

                <!-- Login Button -->
                <div class="text-center">
                    <button type="submit"
                        class="inline-block w-full px-5 py-2.5 mt-6 mb-2 font-bold text-white text-sm bg-gradient-to-tl from-zinc-800 to-zinc-700 rounded-lg transition-all hover:-translate-y-px hover:shadow-md">
                        Log in
                    </button>
                </div>

                <!-- Forgot Password -->
                <div class="text-center">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-slate-700 hover:underline">
                            Forgot your password?
                        </a>
                    @endif
                </div>

                <!-- Register Link -->
                <p class="mt-4 mb-0 leading-normal text-sm text-center">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="font-bold text-slate-700 hover:underline">Register</a>
                </p>
            </form>
        </div>
    </div>




    {{--

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
</x-guest-layout>