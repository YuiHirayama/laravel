<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '車用タイヤ・ホイール',
                'sort_order' => 1,
            ],
            [
                'name' => 'カーナビ・カーエレクトロニクス',
                'sort_order' => 2,
            ],
            [
                'name' => '車用アクセサリー',
                'sort_order' => 3,
            ],
        ]);

            DB::table('secondary_categories')->insert([
                [
                    'name' => 'タイヤ',
                    'sort_order' => 1,
                    'primary_category_id' => 1
                ],
                [
                    'name' => 'ホイール',
                    'sort_order' => 2,
                    'primary_category_id' => 1
                ],
                [
                    'name' => 'タイヤ・ホイールセット',
                    'sort_order' => 3,
                    'primary_category_id' => 1
                ],
                [
                    'name' => 'オーディオ一体型ナビ',
                    'sort_order' => 4,
                    'primary_category_id' => 2
                ],
                [
                    'name' => 'ポータブルナビ',
                    'sort_order' => 5,
                    'primary_category_id' => 2
                ],
                [
                    'name' => 'カーオーディオ',
                    'sort_order' => 6,
                    'primary_category_id' => 2
                ],
                [
                    'name' => 'ハンドルカバー',
                    'sort_order' => 7,
                    'primary_category_id' => 3
                ],
                [
                    'name' => 'ルームミラー',
                    'sort_order' => 8,
                    'primary_category_id' => 3
                ],
                [
                    'name' => 'フロアマット',
                    'sort_order' => 9,
                    'primary_category_id' => 3
                ],
        ]);
    }
}
