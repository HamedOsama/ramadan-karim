<?php

use App\Http\Controllers\ProfileController;
use App\Models\RamdanRecord;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/day/{day}', function ($day) {
    $record = RamdanRecord::where('user_id', auth()->user()->id)->where('day', $day)->first();
    return view('day', compact('record', 'day'));
    
})->middleware(['auth', 'verified'])->name('day');

//post method for day route to save the data to database by method create or update and redirect to dashboard route with success message 
Route::post('/day/{day}', function ($day) {
    // data = request() without _token

    $record = RamdanRecord::updateOrCreate(
        ['user_id' => auth()->user()->id, 'day' => $day],
        [
            'pray_fajr' => request('pray_fajr') ? 1 : 0,
            'pray_duhr' => request('pray_duhr') ? 1 : 0,
            'pray_asr' => request('pray_asr') ? 1 : 0,
            'pray_maghrib' => request('pray_maghrib') ? 1 : 0,
            'pray_isha' => request('pray_isha') ? 1 : 0,
            'fasting' => request('fasting') ? 1 : 0,
            'morning_and_evening_prayers' => request('morning_and_evening_prayers') ? 1 : 0,
            'reading_quran' => request('reading_quran') ? 1 : 0,
            'prayer_of_taraawih' => request('prayer_of_taraawih') ? 1 : 0,
            'prayer_in_maghrib' => request('prayer_in_maghrib') ? 1 : 0,
            'charity' => request('charity') ? 1 : 0,
            'day' => $day,
            'user_id' => auth()->user()->id,
        ]

    );
    return redirect()->back()->with('success', 'تم تسجيل البيانات بنجاح');
})->middleware(['auth', 'verified'])->name('day');
