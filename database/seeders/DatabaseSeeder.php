<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Day;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'khaleddoosama',
            'password' => bcrypt('12345678'),
        ]);

        // create data for days table using  model
        Day::create([
            'number' => '1',
            'name' => 'الاول',
        ]);
        Day::create([
            'number' => '2',
            'name' => 'الثاني',
        ]);
        Day::create([
            'number' => '3',
            'name' => 'الثالث',
        ]);
        Day::create([
            'number' => '4',
            'name' => 'الرابع',
        ]);
        Day::create([
            'number' => '5',
            'name' => 'الخامس',
        ]);
        Day::create([
            'number' => '6',
            'name' => 'السادس',
        ]);
        Day::create([
            'number' => '7',
            'name' => 'السابع',
        ]);
        Day::create([
            'number' => '8',
            'name' => 'الثامن',
        ]);
        Day::create([
            'number' => '9',
            'name' => 'التاسع',
        ]);
        Day::create([
            'number' => '10',
            'name' => 'العاشر',
        ]);
        Day::create([
            'number' => '11',
            'name' => 'الحادي عشر',
        ]);
        Day::create([
            'number' => '12',
            'name' => 'الثاني عشر',
        ]);
        Day::create([
            'number' => '13',
            'name' => 'الثالث عشر',
        ]);
        Day::create([
            'number' => '14',
            'name' => 'الرابع عشر',
        ]);
        Day::create([
            'number' => '15',
            'name' => 'الخامس عشر',
        ]);
        Day::create([
            'number' => '16',
            'name' => 'السادس عشر',
        ]);
        Day::create([
            'number' => '17',
            'name' => 'السابع عشر',
        ]);
        Day::create([
            'number' => '18',
            'name' => 'الثامن عشر',
        ]);
        Day::create([
            'number' => '19',
            'name' => 'التاسع عشر',
        ]);
        Day::create([
            'number' => '20',
            'name' => 'العشرون',
        ]);
        Day::create([
            'number' => '21',
            'name' => 'الحادي والعشرون',
        ]);
        Day::create([
            'number' => '22',
            'name' => 'الثاني والعشرون',
        ]);
        Day::create([
            'number' => '23',
            'name' => 'الثالث والعشرون',
        ]);
        Day::create([
            'number' => '24',
            'name' => 'الرابع والعشرون',
        ]);
        Day::create([
            'number' => '25',
            'name' => 'الخامس والعشرون',
        ]);
        Day::create([
            'number' => '26',
            'name' => 'السادس والعشرون',
        ]);
        Day::create([
            'number' => '27',
            'name' => 'السابع والعشرون',
        ]);
        Day::create([
            'number' => '28',
            'name' => 'الثامن والعشرون',
        ]);
        Day::create([
            'number' => '29',
            'name' => 'التاسع والعشرون',
        ]);
        Day::create([
            'number' => '30',
            'name' => 'الثلاثون',
        ]);
    }
}
