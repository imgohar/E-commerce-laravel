<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->insert([
            [
                'name'  => "Oppo Mobile Mobile",
                'price' =>  '200',
                'description' => 'A smart phone with 20g ram and much more features',
                'category'  => 'mobile',
                'gallery'   => 'https://images.priceoye.pk/oppo-a9-2020-pakistan-priceoye-dwndm.jpg',
            ],
            [
                'name'  => "Samsung LCD",
                'price' =>  '1000',
                'description' => 'A smart tv with 4g ram, youtube playstore and much more features',
                'category'  => 'tv',
                'gallery'   => 'https://image.made-in-china.com/2f0j00eyraYSHzOKpQ/Samsung-55-LCD-Screen-1-7mm-Seamless-Bezel-Video-Wall-3-3-With-Controller.jpg',
            ],
            [
                'name'  => "Samsung Lcd",
                'price' =>  '4000',
                'description' => 'A smart lcd with oled dsplay with 4g ram and much more features',
                'category'  => 'tv',
                'gallery'   => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcShYbfhLrpX1FVu4mGmsd4qzjDVZC-sLork4w&usqp=CAU',
            ],
            [
                'name'  => "Samsung Fridge",
                'price' =>  '40000',
                'description' => 'A fridge with much more features',
                'category'  => 'fridge',
                'gallery'   => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRx07mZYYPYiqPin-1mAasVGVWDM9zHdkKg8w&usqp=CAU',
            ],
            

        ]);
    }
}
