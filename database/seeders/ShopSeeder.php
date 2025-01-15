<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => 'test1のショップ名',
                'information' => 'ここにお店の情報が入ります。ここにお店の情報が入ります。ここにお店の情報が入ります。',
                'filename' => 'sample1.jpg',
                'is_selling' => true
            ],
            [
                'owner_id' => 2,
                'name' => 'test2のショップ名',
                'information' => 'ここにお店の情報が入ります。ここにお店の情報が入ります。ここにお店の情報が入ります。',
                'filename' => 'sample2.jpg',
                'is_selling' => true
            ],
            [
                'owner_id' => 3,
                'name' => 'test3のショップ名',
                'information' => 'ここにお店の情報が入ります。ここにお店の情報が入ります。ここにお店の情報が入ります。',
                'filename' => 'sample3.jpg',
                'is_selling' => true
            ],
            [
                'owner_id' => 4,
                'name' => 'test4のショップ名',
                'information' => 'ここにお店の情報が入ります。ここにお店の情報が入ります。ここにお店の情報が入ります。',
                'filename' => 'sample4.jpg',
                'is_selling' => true
            ],
            [
                'owner_id' => 5,
                'name' => 'test5のショップ名',
                'information' => 'ここにお店の情報が入ります。ここにお店の情報が入ります。ここにお店の情報が入ります。',
                'filename' => 'sample5.jpg',
                'is_selling' => true
            ],
            [
                'owner_id' => 6,
                'name' => 'test6のショップ名',
                'information' => 'ここにお店の情報が入ります。ここにお店の情報が入ります。ここにお店の情報が入ります。',
                'filename' => 'sample6.jpg',
                'is_selling' => true
            ],
        ]);
    }
}
