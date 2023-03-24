<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>انشاء حساب</title>
    <link rel="icon" href="{{ asset('asset/icones/fanos.png') }}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Square+Peg&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('asset/css/styleSignin.css') }}" />
</head>

<body>
    <section>

        <div class="form-signin">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="signin">انشاء حساب</div>
                <div class="input-username-signin">
                    <input type="text" id="username" name="email" placeholder="اسم المستخدم" required
                        :value="old('email')" autocomplete="username" />
                    {{-- errors --}}
                    <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: #10cab7" />
                </div>

                <div class="input-password-signin" style="position: relative">
                    <input type="password" id="password" name="password" placeholder="كلمه السر" required
                        autocomplete="new-password" />
                    <span class="show">اظهار</span>
                    {{-- errors --}}
                    <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: #10cab7" />
                    <div class="input-confirm-password-signin" style="position: relative">
                        <input type="password" id="password_confirmation" name="password_confirmation" required
                            autocomplete="new-password" placeholder="اعاده كتابه كلمه السر" />
                        <span class="show-confirm">اظهار</span>
                        {{-- errors --}}
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="color: #10cab7" />
                    </div>

                    <div class="button-signin">
                        <button>انشاء</button>
                    </div>

                    <div class="form-link">
                        <span>
                            هل لديك بالفعل حساب؟<a href="{{ route('login') }}" class="link-loginpage">تسجيل
                                دخول</a></span>
                    </div>
            </form>
        </div>
    </section>
    <script src="{{ asset('asset/js/script_signin.js') }}"></script>

</body>

</html>
