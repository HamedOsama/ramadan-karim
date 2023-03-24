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
    <link rel="stylesheet" href="{{ asset('asset/css/styledays.css') }}" />
</head>

<body>
    <header>
        <div class="container">
            <a href="{{ route('dashboard') }}" class="logo">
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

    <h1>حاسبوا انفسكم قبل ان تحاسبوا</h1>
    @php
        $d = App\Models\Day::where('number', $day)->first();
    @endphp

    <h2>اليوم {{ $d->name }}</h2>
    <form method="POST" action="{{ route('day', $day) }}">
        @csrf
        <ul>
            <li><label class="salah">الصلوات فى اول وقتها</label>
                <input type="checkbox" id="optian1" name="pray_fajr" value="1"
                    {{ $record ? ($record->pray_fajr == 1 ? 'checked' : '') : '' }}>
                <label class="special1" for="fagr">الفجر</label>
                <input type="checkbox" id="optian2" name="pray_duhr" value="1"
                    {{ $record ? ($record->pray_duhr == 1 ? 'checked' : '') : '' }}>
                <label class="special2" for="dhuhr">الظهر</label>
            </li>
            <input type="checkbox" id="optian3" name="pray_asr" value="1"
                {{ $record ? ($record->pray_asr == 1 ? 'checked' : '') : '' }}>
            <label class="special3" for="asr">العصر</label></li>
            <input type="checkbox" id="optian4" name="pray_maghrib" value="1"
                {{ $record ? ($record->pray_maghrib == 1 ? 'checked' : '') : '' }}>
            <label class="special4" for="maghrib">المغرب</label></li>
            <input type="checkbox" id="optian5" name="pray_isha" value="1"
                {{ $record ? ($record->pray_isha == 1 ? 'checked' : '') : '' }}>
            <label class="special5" for="isha">العشاء</label>
            </li>
            <br>
            <li class="m3asy">
                <label class="salah" for="valid">صيام الجوارح عن المعاصى</label>
                <input type="checkbox" id="syam" name="fasting" value="1"
                    {{ $record ? ($record->fasting == 1 ? 'checked' : '') : '' }}>
            </li>
            <li class="azkar">
                <label class="salah" for="valid">اذكار الصباح والمساء</label>
                <input type="checkbox" id="msaa" name="morning_and_evening_prayers" value="1"
                    {{ $record ? ($record->morning_and_evening_prayers == 1 ? 'checked' : '') : '' }}>
            </li>
            <li class="quran">
                <label class="salah" for="valid">قراءة جزء القران مع التدبر</label>
                <input type="checkbox" id="tdbor" name="reading_quran" value="1"
                    {{ $record ? ($record->reading_quran == 1 ? 'checked' : '') : '' }}>
            </li>
            <li class="troih">
                <label class="salah" for="valid">صلاة التراويح حتى ينصرف الامام</label>
                <input type="checkbox" id="emam" name="prayer_of_taraawih" value="1"
                    {{ $record ? ($record->prayer_of_taraawih == 1 ? 'checked' : '') : '' }}>
            </li>
            <li class="do3aa">
                <label class="salah" for="valid">الدعاء خاصة عند المغرب</label>
                <input type="checkbox" id="when" name="prayer_in_maghrib" value="1"
                    {{ $record ? ($record->prayer_in_maghrib == 1 ? 'checked' : '') : '' }}>
            </li>
            <li class="sdaka">
                <label class="salah" for="valid">الصدقه او اطعام الطعام</label>
                <input type="checkbox" id="food" name="charity" value="1"
                    {{ $record ? ($record->charity == 1 ? 'checked' : '') : '' }}>
            </li>
            {{-- <li class="">
                <input type="hidden" id="day" name="day"  value="{{ $day }}">
            </li> --}}
        </ul>
        <button class="button-save">حفظ</button>
    </form>
    <script src="{{ asset('asset/js/script_home.js') }}"></script>
</body>

</html>
