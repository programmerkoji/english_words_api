<?php

namespace Database\Seeders;

use App\Models\Word;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            WordSeeder::class,
        ]);

        // User::factory(2)->create();
        // Word::factory(100)->create();
    }
}
