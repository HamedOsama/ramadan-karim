<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>رمضان كريم</title>

    <link rel="icon" href="{{ asset('asset/icones/fanos.png') }}" />

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Square+Peg&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('asset/css/mystyle.css') }}" />
</head>

<body>
    <header>
        <div class="container">
            <a href="" class="logo">
                <img src="{{ asset('asset/images/photo10.jpeg') }}" alt="logo" />
            </a>
            <h2 class="word"><span>كريم</span>رمضان</h2>
            <nav>
                <ul class="is-active">
                    <div>
                        <li><a href="{{ route('day', 1) }}">الاول</a></li>
                        <li><a href="{{ route('day', 2) }}">الثانى</a></li>
                        <li><a href="{{ route('day', 3) }}">الثالت</a></li>
                        <li><a href="{{ route('day', 4) }}">الرابع</a></li>
                        <li><a href="{{ route('day', 5) }}">الخامس</a></li>
                        <li><a href="{{ route('day', 6) }}">السادس</a></li>
                        <li><a href="{{ route('day', 7) }}">السابع</a></li>
                        <li><a href="{{ route('day', 8) }}">الثامن</a></li>
                        <li><a href="{{ route('day', 9) }}">التاسع</a></li>
                        <li><a href="{{ route('day', 10) }}">العاشر</a></li>
                        <li><a href="{{ route('day', 11) }}">الحادى عشر</a></li>
                        <li><a href="{{ route('day', 12) }}">الاثنى عشر</a></li>
                        <li><a href="{{ route('day', 13) }}">الثالث عشر</a></li>
                        <li><a href="{{ route('day', 14) }}">الرابع عشر</a></li>
                        <li><a href="{{ route('day', 15) }}">الخامس عشر</a></li>
                        <li><a href="{{ route('day', 16) }}">السادس عشر</a></li>
                        <li><a href="{{ route('day', 17) }}">السابع عشر</a></li>
                        <li><a href="{{ route('day', 18) }}">الثامن عشر</a></li>
                        <li><a href="{{ route('day', 19) }}">التاسع عشر</a></li>
                        <li><a href="{{ route('day', 20) }}">العشرون</a></li>
                        <li>
                            <a href="{{ route('day', 21) }}">الحادى والعشرون</a>
                        </li>
                        <li>
                            <a href="{{ route('day', 22) }}">الثانى والعشرون</a>
                        </li>
                        <li>
                            <a href="{{ route('day', 23) }}">الثالث والعشرون</a>
                        </li>
                        <li>
                            <a href="{{ route('day', 24) }}">الرابع والعشرون</a>
                        </li>
                        <li>
                            <a href="{{ route('day', 25) }}">الخامس والعشرون</a>
                        </li>
                        <li>
                            <a href="{{ route('day', 26) }}">السادس والعشرون</a>
                        </li>
                        <li>
                            <a href="{{ route('day', 27) }}">السابع والعشرون</a>
                        </li>
                        <li>
                            <a href="{{ route('day', 28) }}">الثامن والعشرون</a>
                        </li>
                        <li>
                            <a href="{{ route('day', 29) }}">التاسع والعشرون</a>
                        </li>
                        <li><a href="{{ route('day', 30) }}">الثلاثون</a></li>

                    </div>
                </ul>
                <button id="menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>


        </div>
    </header>

    @php
        $day = Alkoumi\LaravelHijriDate\Hijri::Date('j');
        $month = Alkoumi\LaravelHijriDate\Hijri::Date('F');
    @endphp
    <div class="button">
        {{-- not clickable --}}
        <a class="" href="{{$month != 'رمضان' ? '#' : route('day', $day)}}"
            style='{{ $month != 'رمضان' ? 'cursor: no-drop; opacity: 0.5;' : '' }}'>
            اذهب لليوم
        </a>
        <form action="{{ route('logout') }}" method="Post">
            <button type="submit">
                @csrf
                تسجيل الخروج
            </button>
        </form>
    </div>
    <script src="{{ asset('asset/js/script_home.js') }}"></script>

</body>

</html>
