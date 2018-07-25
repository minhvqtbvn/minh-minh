<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->delete();
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'Cá vàng',
                'description'=>'cá đẹp khỏe',
                'categoryId'=>1,
                'price'=>2000,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Goldfish_Pearl_Scale.jpg/280px-Goldfish_Pearl_Scale.jpg'
            ],
            [
                'id'=>2,
                'name'=>'cá kiếm',
                'description'=>'cá đẹp khỏe',
                'categoryId'=>2,
                'price'=>2000,

                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbA454S7L7zVPK6vYo6l1NExYVeNAwJuBQIMKcl__i7CvrvOsd'
            ],
            [
                'id'=>3,
                'name'=>'cá váy',
                'description'=>'cá đẹp khỏe',
                'categoryId'=>3,
                'price'=>2500,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuvGCgBz3SEJuOPjKGkVrqkDsJtJZuQ1Z12gX7PHzSmd9yMDpw'
            ],
            [
                'id'=>4,
                'name'=>'cá chọi',
                'description'=>'cá đẹp khỏe',
                'categoryId'=>2,
                'price'=>2700,
                'image'=>'http://img.khoahoc.tv/photos/image/2016/04/08/lon-rung-dot-bien.jpghttp://lamcanh.vn/files/thumb/b81e6d80e264fec/800'
                ],
            [
                'id'=>5,
                'name'=>'cá koi',
                'description'=>'cá đẹp khỏe',
                'categoryId'=>3,
                'price'=>2000,
                'image' => 'https://i.ytimg.com/vi/BToAmQ3TQ94/hqdefault.jpg'
            ],
            [
                'id'=>6,
                'name'=>'cá phúc lộc thọ',
                'description'=>'cá khỏe đẹp',
                'categoryId'=>1,
                'price'=>2000,
                'image' => 'http://media.tinmoi.vn/2012/05/07/17_7_1336360819_39_top-1-4.jpg'
            ],
            [
                'id'=>7,
                'name'=>'cá minh',
                'description'=>'cá quá đẹp',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'http://aquazone.vn/wp-content/uploads/2014/02/benh-ca-rong1.jpg'
            ]
        ]);
    }
}
