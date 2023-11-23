<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->insert([
            [
                'user_id' => 1,
                'word_en' => 'train',
                'word_ja' => '電車',
                'part_of_speech' => 1,
                'memory' => 1,
                'memo' => 'テストです。',
                'created_at' => '2022/04/04'
            ],
            [
                'user_id' => 2,
                'word_en' => 'name',
                'word_ja' => '名前',
                'part_of_speech' => 1,
                'memory' => 2,
                'memo' => 'テストです。テストです。',
                'created_at' => '2022/04/10'
            ],
            [
                'user_id' => 2,
                'word_en' => 'time',
                'word_ja' => '時間',
                'part_of_speech' => 1,
                'memory' => 3,
                'memo' => 'テストです。',
                'created_at' => '2022/02/04'
            ],
            [
                'user_id' => 1,
                'word_en' => 'minutes',
                'word_ja' => '分',
                'part_of_speech' => 1,
                'memory' => 3,
                'memo' => 'テストです。',
                'created_at' => '2022/06/04'
            ],
            [
                'user_id' => 1,
                'word_en' => 'time',
                'word_ja' => '時間',
                'part_of_speech' => 1,
                'memory' => 1,
                'memo' => 'テストです。',
                'created_at' => '2022/03/04'
            ],
            [
                'user_id' => 2,
                'word_en' => 'test10',
                'word_ja' => '名前',
                'part_of_speech' => 1,
                'memory' => 2,
                'memo' => 'テストです。テストです。',
                'created_at' => '2021/12/10'
            ],
            [
                'user_id' => 2,
                'word_en' => 'time11',
                'word_ja' => '時間',
                'part_of_speech' => 1,
                'memory' => 3,
                'memo' => 'テストです。',
                'created_at' => '2022/02/11'
            ],
            [
                'user_id' => 1,
                'word_en' => 'test12',
                'word_ja' => '分',
                'part_of_speech' => 1,
                'memory' => 3,
                'memo' => 'テストです。',
                'created_at' => '2022/05/12'
            ],
            [
                'user_id' => 1,
                'word_en' => 'test13',
                'word_ja' => '電車',
                'part_of_speech' => 1,
                'memory' => 1,
                'memo' => 'テストです。',
                'created_at' => '2022/01/04'
            ],
            [
                'user_id' => 2,
                'word_en' => 'test14',
                'word_ja' => '名前',
                'part_of_speech' => 1,
                'memory' => 2,
                'memo' => 'テストです。テストです。',
                'created_at' => '2022/01/10'
            ],
            [
                'user_id' => 2,
                'word_en' => 'test15',
                'word_ja' => '時間',
                'part_of_speech' => 1,
                'memory' => 3,
                'memo' => 'テストです。',
                'created_at' => '2022/01/24'
            ],
            [
                'user_id' => 1,
                'word_en' => 'test16',
                'word_ja' => '分',
                'part_of_speech' => 1,
                'memory' => 3,
                'memo' => 'テストです。',
                'created_at' => '2022/01/26'
            ],
            [
                'user_id' => 1,
                'word_en' => 'test17',
                'word_ja' => '時間',
                'part_of_speech' => 1,
                'memory' => 1,
                'memo' => 'テストです。',
                'created_at' => '2022/01/19'
            ],
            [
                'user_id' => 2,
                'word_en' => 'test18',
                'word_ja' => '名前',
                'part_of_speech' => 1,
                'memory' => 2,
                'memo' => 'テストです。テストです。',
                'created_at' => '2022/01/20'
            ],
            [
                'user_id' => 2,
                'word_en' => 'time11',
                'word_ja' => '時間',
                'part_of_speech' => 1,
                'memory' => 3,
                'memo' => 'テストです。',
                'created_at' => '2022/01/15'
            ],
            [
                'user_id' => 1,
                'word_en' => 'test19',
                'word_ja' => '分',
                'part_of_speech' => 1,
                'memory' => 3,
                'memo' => 'テストです。',
                'created_at' => '2022/01/21'
            ],
            [
                'user_id' => 1,
                'word_en' => 'test20',
                'word_ja' => '分',
                'part_of_speech' => 1,
                'memory' => 3,
                'memo' => 'テストです。',
                'created_at' => '2022/03/16'
            ],
            [
                'user_id' => 1,
                'word_en' => 'test21',
                'word_ja' => '時間',
                'part_of_speech' => 1,
                'memory' => 1,
                'memo' => 'テストです。',
                'created_at' => '2022/03/19'
            ],
            [
                'user_id' => 1,
                'word_en' => 'test16',
                'word_ja' => '分',
                'part_of_speech' => 1,
                'memory' => 3,
                'memo' => 'テストです。',
                'created_at' => '2022/03/01'
            ],
            [
                'user_id' => 1,
                'word_en' => 'test22',
                'word_ja' => '時間',
                'part_of_speech' => 1,
                'memory' => 1,
                'memo' => 'テストです。',
                'created_at' => '2022/03/03'
            ],
            [
                'user_id' => 1,
                'word_en' => 'test23',
                'word_ja' => '分',
                'part_of_speech' => 1,
                'memory' => 3,
                'memo' => 'テストです。',
                'created_at' => '2022/03/06'
            ],
            [
                'user_id' => 1,
                'word_en' => 'test24',
                'word_ja' => '時間',
                'part_of_speech' => 1,
                'memory' => 1,
                'memo' => 'テストです。',
                'created_at' => '2022/03/09'
            ],

        ]);
    }
}
