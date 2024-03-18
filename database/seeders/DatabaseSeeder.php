<?php

namespace Database\Seeders;

use DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::beginTransaction();

        for ($i = 0; $i < 50; $i++) {
            DB::table('users')->insert([
                'user_id'    => fake()->numberBetween(),
                'user_level' => fake()->numberBetween(1, 999),
            ]);
        }

        DB::commit();
    }
}
