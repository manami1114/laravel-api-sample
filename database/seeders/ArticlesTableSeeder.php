<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'title' => 'タイトル1',
                'body' => '内容1',
            ],
            [
                'title' => 'タイトル2',
                'body' => '内容2',
            ],
            [
                'title' => 'タイトル3',
                'body' => '内容3',
            ],
        ]);
    }
}
