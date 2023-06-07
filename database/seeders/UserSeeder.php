<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 100; $i++) {
            DB::table('user')->insert([
                'username' => $faker->userName,
                'password' => $faker->password(6,10),
                'email' => $faker->unique()->safeEmail,
                'nim' => $faker->unique()->randomNumber(8),
                'alamat' => $faker->address,
                'semester' => $faker->numberBetween(1, 8),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}