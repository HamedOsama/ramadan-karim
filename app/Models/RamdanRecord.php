<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RamdanRecord extends Model
{
    use HasFactory;
    
     //fillable
    protected $fillable = [
        'pray_fajr',
        'pray_duhr',
        'pray_asr',
        'pray_maghrib',
        'pray_isha',
        'fasting',
        'morning_and_evening_prayers',
        'reading_quran',
        'prayer_of_taraawih',
        'prayer_in_maghrib',
        'charity',
        'day',
        'user_id',

    ];
    
}
