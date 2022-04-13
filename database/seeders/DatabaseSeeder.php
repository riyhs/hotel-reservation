<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
use App\Models\Guest;
use App\Models\RoomSpec;
use Illuminate\Support\Str;
use App\Models\HotelFacility;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Riyaldi Kasir',
                'role' => 'receptionist',
                'email' => 'riyaldi.receptionist@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('kepo'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Riyaldi Adm00n',
                'role' => 'admin',
                'email' => 'riyaldi.admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('kepo'),
                'remember_token' => Str::random(10),
            ]
        ];

        $hotel_facilities = [
            [
                'name' => 'Swiming Pool',
                'description' => 'To swiming swiming',
                'image' => '',
            ],
            [
                'name' => 'Gym',
                'description' => 'Be Olympicant',
                'image' => '',
            ],
            [
                'name' => 'PS 5 Rental',
                'description' => 'No Game No Life',
                'image' => '',
            ],
            [
                'name' => 'Spa',
                'description' => 'Your fragile body no meow meow anymore',
                'image' => '',
            ],
            [
                'name' => 'Running Track',
                'description' => "If your'e a thieft, you have special track",
                'image' => '',
            ],
            [
                'name' => 'Piano Kawasaki',
                'description' => "Sound's like indonesian jamet motorcycle",
                'image' => '',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        foreach ($hotel_facilities as $hotel_facility) {
            HotelFacility::create($hotel_facility);
        }

        Guest::factory(1)->create();
        RoomSpec::factory(4)->create();
        Room::factory(12)->create();
    }
}
