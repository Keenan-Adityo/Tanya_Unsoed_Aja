<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            DB::table('admin')->insert([
                'username' => $faker->userName,
                'password' => $faker->password(6,10),
                'role'=> $faker->numberBetween(0,3),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}