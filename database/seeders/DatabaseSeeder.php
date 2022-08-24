<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\RoomSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CommentSeeder;
use Database\Seeders\ReservationSeeder;
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
        $this->call([
            UserSeeder::class,
            CommentSeeder::class,
            CitySeeder::class,
            RoomSeeder::class,
            ReservationSeeder::class,
        ]);
    }
}
