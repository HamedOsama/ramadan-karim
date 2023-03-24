<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ramdan_records', function (Blueprint $table) {
            $table->id();
            // الصلوات
            $table->integer('pray_fajr')->nullable()->default(0);
            $table->integer('pray_duhr')->nullable()->default(0);
            $table->integer('pray_asr')->nullable()->default(0);
            $table->integer('pray_maghrib')->nullable()->default(0);
            $table->integer('pray_isha')->nullable()->default(0);
            //صيام الجوارح عن المعاصى
            $table->integer('fasting')->nullable()->default(0);
           //اذكار الصباح والمساء
            $table->integer('morning_and_evening_prayers')->nullable()->default(0);
            //قراءة جزء القران مع التدبر
            $table->integer('reading_quran')->nullable()->default(0);
            //صلاة التراويح حتى ينصرف الامام
            $table->integer('prayer_of_taraawih')->nullable()->default(0);
            //الدعاء خاصة عند المغرب
            $table->integer('prayer_in_maghrib')->nullable()->default(0);
            //الصدقه او اطعام الطعام
            $table->integer('charity')->nullable()->default(0);

            $table->integer('day');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ramdan_records');
    }
};
