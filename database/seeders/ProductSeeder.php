<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(
           [
            [
                'name'=>'Iphone',
                'price'=>'700',
                'category'=>'mobile',
                'description'=>'A smartphone with 4 gb memory and much more features',
                'gallery'=>'https://www.sahivalue.com/product-images/14+pro+max.jpg/293890000021697778/400x400',
                  
            ],
            [
                'name'=>'Vivo',
                'price'=>'500',
                'category'=>'mobile',
                'description'=>'A smartphone with 8 gb memory and much more features',
                'gallery'=>'https://img.etimg.com/photo/msid-99080556,imgsize-32858/VivoY56BlackEngine.jpg',
                  
            ],
            [
                'name'=>'Apple Laptop',
                'price'=>'600',
                'category'=>'laptop',
                'description'=>'A Laptop with 12 gb memory and much more features',
                'gallery'=>'https://cdn.krcs.co.uk/media/catalog/product/cache/1c7108a416a638ccbdb4a319dd0d9d79/APPLE_MGN63_7.jpg',
                  
            ],
            [
                'name'=>'HP Laptop',
                'price'=>'400',
                'category'=>'laptop',
                'description'=>'A laptop with 18 gb memory and much more features',
                'gallery'=>'https://www.ocmstore.com/images/csm_img_4379_82abb60817_1_resized.jpg',
                  
            ],
            [
                'name'=>'LG Tv',
                'price'=>'250',
                'category'=>'tv',
                'description'=>'A smart TV with HD graphics and much more features',
                'gallery'=>'https://m.media-amazon.com/images/I/614ud1j44NL._AC_SX679_.jpg',
                  
            ]
           ]);
    }
}
