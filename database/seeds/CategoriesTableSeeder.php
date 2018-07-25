<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->delete();

        DB::table('categories')->insert([[
                'id' => 1,
                'name' => 'cá vàng',
                'description' => 'cá đẹp',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Goldfish_Pearl_Scale.jpg/280px-Goldfish_Pearl_Scale.jpg'
            ],
            [
                'id' => 2,
                'name' => 'cá kiếm',
                'description' => 'cá trống',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbA454S7L7zVPK6vYo6l1NExYVeNAwJuBQIMKcl__i7CvrvOsd'
            ],
            [
                'id' => 3,
                'name' => 'cá váy',
                'description' => 'đẹp',

                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuvGCgBz3SEJuOPjKGkVrqkDsJtJZuQ1Z12gX7PHzSmd9yMDpw'
            ],
            [
                'id' => 4,
                'name' => 'cá koi',
                'description' => 'cá đột biến gen',
                'image' => 'https://i.ytimg.com/vi/BToAmQ3TQ94/hqdefault.jpg'
            ],
            [
                'id' => 5,
                'name' => 'cá phúc lộc thọ',
                'description' => 'cá Tung Của',
                'image' => 'http://media.tinmoi.vn/2012/05/07/17_7_1336360819_39_top-1-4.jpg'
            ]]
        );
    }
}
