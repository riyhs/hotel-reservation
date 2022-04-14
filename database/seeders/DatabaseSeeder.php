<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
use App\Models\Guest;
use App\Models\RoomSpec;
use Illuminate\Support\Str;
use App\Models\RoomFacility;
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

        $room_facilities = [
            [
                'name' => 'Tv 42 Inch',
                'spec_id' => '1',
            ],
            [
                'name' => 'Tv 38 Inch',
                'spec_id' => '2',
            ],
            [
                'name' => 'Tv 32 Inch',
                'spec_id' => '3',
            ],
            [
                'name' => 'Tv 28 Inch',
                'spec_id' => '4',
            ],

            [
                'name' => 'King Size Bed',
                'spec_id' => '1',
            ],
            [
                'name' => 'Queen Size Bed',
                'spec_id' => '2',
            ],
            [
                'name' => 'Medium Size Bed',
                'spec_id' => '3',
            ],
            [
                'name' => 'Single Size Bed',
                'spec_id' => '4',
            ],

            [
                'name' => '500Mb/s Internet',
                'spec_id' => '1',
            ],
            [
                'name' => '250Mb/s Internet',
                'spec_id' => '2',
            ],
            [
                'name' => '100Mb/s Internet',
                'spec_id' => '3',
            ],
            [
                'name' => '50Mb/s Internet',
                'spec_id' => '4',
            ],

            [
                'name' => 'All You Can Eat',
                'spec_id' => '1',
            ],
            [
                'name' => 'Special Dish',
                'spec_id' => '2',
            ],
            [
                'name' => 'Snack + Bonuses',
                'spec_id' => '3',
            ],
            [
                'name' => 'Snack',
                'spec_id' => '4',
            ],

            [
                'name' => '4x4 Bathroom With Bathub & Special View',
                'spec_id' => '1',
            ],
            [
                'name' => '3x4 Bathroom With Bathub',
                'spec_id' => '2',
            ],
            [
                'name' => '3x2 Bathroom Modern',
                'spec_id' => '3',
            ],
            [
                'name' => '2x2 Bathroom',
                'spec_id' => '4',
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

        foreach ($room_facilities as $room_facility) {
            RoomFacility::create($room_facility);
        }
    }
}
