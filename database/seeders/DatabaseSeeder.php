<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
use App\Models\Guest;
use App\Models\RoomSpec;
use Illuminate\Support\Str;
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

        foreach ($users as $user) {
            User::create($user);
        }

        Guest::factory(1)->create();
        RoomSpec::factory(10)->create();
        Room::factory(20)->create();
    }
}
