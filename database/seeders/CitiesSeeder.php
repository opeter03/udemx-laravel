<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Extensions\CustomUser;
use App\Models\User;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->truncate();

        $faker = Faker::create();
        for ($i = 0; $i < 30; $i++) {
            DB::table('cities')->insert([
                'name' => $faker->city(),
                'postcode' => $faker->numberBetween(2000, 9000),
                'area' => $faker->numberBetween(100, 1000),
                'people' => $faker->numberBetween(10000, 300000),
                'created_at' => $faker->dateTime(),
            ]);
        }

    }
}
