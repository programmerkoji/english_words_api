<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'テスト',
                'email' => 'test@test.com',
                'password' => Hash::make('password1234'),
            ],
            [
                'id' => 2,
                'name' => 'テスト2',
                'email' => 'test2@test.com',
                'password' => Hash::make('password1234'),
            ],
        ]);
    }
}
