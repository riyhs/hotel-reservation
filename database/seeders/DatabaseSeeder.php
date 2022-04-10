<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Guest;
use App\Models\RoomSpec;
use App\Models\Room;
use Illuminate\Database\Seeder;
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
        User::factory(1)->create();
        Guest::factory(1)->create();
        RoomSpec::factory(10)->create();
        Room::factory(20)->create();
    }
}
