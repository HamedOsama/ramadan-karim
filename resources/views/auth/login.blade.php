{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>تسجيل دخول</title>
    <link rel="icon" href="{{ asset('asset/icones/fanos.png') }}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Square+Peg&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('asset/css/stylelogin.css') }}" />
</head>

<body>
    <section>

        <div class="form-login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login">تسجيل دخول</div>
                <div class="input-username">
                    <input type="text" id="username" name="email" placeholder="اسم المستخدم" required
                        :value="old('email')" autofocus />
                    {{-- error --}}
                    <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: #10cab7" />
                </div>

                <div class="input-password" style="position: relative">
                    <input type="password" id="password" name="password" placeholder="كلمه السر" required
                        autocomplete="current-password" />
                    <span class="show">اظهار</span>
                    {{-- error --}}
                    <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: #10cab7" />
                </div>

                <div class="button">
                    <button>دخول</button>
                </div>

                <div class="form-link-login">
                    <span>
                        ليس لديك حساب؟<a href="{{ route('register') }}" class="link-loginpage">انشاء
                            حساب</a></span>
                </div>
            </form>
        </div>
    </section>
    <script src="{{ asset('asset/js/script_login.js') }}"></script>
</body>

</html>
