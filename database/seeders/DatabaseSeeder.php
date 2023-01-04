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
                'description' => "The swimming pool's unique modern and fresh blend to the nature makes it a healthy and refreshing experience.",
                'image' => '',
            ],
            [
                'name' => 'Gym',
                'description' => 'Dffers a healthy body and a happy life through modern gym tools and services.',
                'image' => '',
            ],
            [
                'name' => 'PS 5 Rental',
                'description' => 'Allows you to play together with friends and family, without any stress, and have a great time.',
                'image' => '',
            ],
            [
                'name' => 'Spa',
                'description' => 'Take a break from the everyday and relax with a Spa. Every service is about our customer',
                'image' => '',
            ],
            [
                'name' => 'Running Track',
                'description' => "With the Running Track, you can keep moving while enjoying the fresh air and natural scenery.",
                'image' => '',
            ],
            [
                'name' => 'Piano Kawasaki',
                'description' => "Perfect way to relax on your holiday. Don't need any prior experience - just sit down and start playing.",
                'image' => '',
            ],
        ];

        $room_facilities = [
            [
                'name' => 'Tv 50 Inch',
                'spec_id' => '1',
            ],
            [
                'name' => 'Tv 44 Inch',
                'spec_id' => '2',
            ],
            [
                'name' => 'Tv 38 Inch',
                'spec_id' => '3',
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
        ];

        $rooms = [
            [
                'name' => 'Lyndon',
                'image' => 'roberto-nickson-emqnSQwQQDo-unsplash.jpg',
                'price' => 7000000,
                'amount' => 8,
                'used' => 0,
                'spec_id' => 1,
                'created_at' => "2022-04-14 00:12:12",
                'updated_at' => "2022-04-14 00:12:12",
            ],
            [
                'name' => 'Laurel',
                'image' => 'francesca-tosolini-hCU4fimRW-c-unsplash.jpg',
                'price' => 6000000,
                'amount' => 10,
                'used' => 0,
                'spec_id' => 1,
                'created_at' => "2022-04-14 00:12:12",
                'updated_at' => "2022-04-14 00:12:12",
            ],
            [
                'name' => 'Vineyard',
                'image' => 'edelle-bruton-PJNO2sLlbB8-unsplash.jpg',
                'price' => 5000000,
                'amount' => 12,
                'used' => 0,
                'spec_id' => 1,
                'created_at' => "2022-04-14 00:12:12",
                'updated_at' => "2022-04-14 00:12:12",
            ],
            [
                'name' => 'The Zora',
                'image' => 'mark-champs-Id2IIl1jOB0-unsplash.jpg',
                'price' => 3000000,
                'amount' => 20,
                'used' => 0,
                'spec_id' => 2,
                'created_at' => "2022-04-14 00:12:12",
                'updated_at' => "2022-04-14 00:12:12",
            ],
            [
                'name' => 'Brassia',
                'image' => 'vojtech-bruzek-Yrxr3bsPdS0-unsplash.jpg',
                'price' => 2500000,
                'amount' => 20,
                'used' => 0,
                'spec_id' => 2,
                'created_at' => "2022-04-14 00:12:12",
                'updated_at' => "2022-04-14 00:12:12",
            ],
            [
                'name' => 'Clojure',
                'image' => 'point3d-commercial-imaging-ltd-oxeCZrodz78-unsplash.jpg',
                'price' => 2000000,
                'amount' => 20,
                'used' => 0,
                'spec_id' => 2,
                'created_at' => "2022-04-14 00:12:12",
                'updated_at' => "2022-04-14 00:12:12",
            ],
            [
                'name' => 'Qozia',
                'image' => 'point3d-commercial-imaging-ltd-_Swg04CP0bU-unsplash.jpg',
                'price' => 1500000,
                'amount' => 30,
                'used' => 0,
                'spec_id' => 3,
                'created_at' => "2022-04-14 00:12:12",
                'updated_at' => "2022-04-14 00:12:12",
            ],
            [
                'name' => 'Ashoka',
                'image' => 'andrea-davis-NngNVT74o6s-unsplash.jpg',
                'price' => 1250000,
                'amount' => 30,
                'used' => 0,
                'spec_id' => 3,
                'created_at' => "2022-04-14 00:12:12",
                'updated_at' => "2022-04-14 00:12:12",
            ],
            [
                'name' => 'Esmeralda',
                'image' => 'christopher-jolly-GqbU78bdJFM-unsplash.jpg',
                'price' => 800000,
                'amount' => 40,
                'used' => 0,
                'spec_id' => 3,
                'created_at' => "2022-04-14 00:12:12",
                'updated_at' => "2022-04-14 00:12:12",
            ]
        ];

        $room_specs = [
            [
                'name' => 'Deluxe',
                'description' => 'This is a listing for a deluxe room in a beautiful, modern building. The room features a 55-inch TV, King size bed, 500mb/s fast internet, and all you can eat. There is also a 16m sqr bathroom with premium bathtub and special view.',
            ],
            [
                'name' => 'Premium',
                'description' => 'This is a listing for a premium room in a beautiful, modern building. The room features a 44-inch TV, Queen size bed, 200mb/s fast internet, Special Dish. There is also a 12m sqr bathroom with premium bathtub.',
            ],
            [
                'name' => 'Economy',
                'description' => 'This is a listing for a economy room in a beautiful, modern building. The room features a 38-inch TV, Medium size bed, 100mb/s fast internet, Snack + Bonuses. There is also a 9m sqr modern bathroom.',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        foreach ($hotel_facilities as $hotel_facility) {
            HotelFacility::create($hotel_facility);
        }

        Guest::factory(1)->create();

        foreach ($room_specs as $room_spec) {
            RoomSpec::create($room_spec);
        }

        foreach ($rooms as $room) {
            Room::create($room);
        }

        foreach ($room_facilities as $room_facility) {
            RoomFacility::create($room_facility);
        }
    }
}
