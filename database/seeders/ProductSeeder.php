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
        //
        DB::table('products')->insert([
            [
                'name'=>'SAMSUNG Crystal 4K',
                'price'=>'37999',
                'category'=>'Televisions',
                'description'=>'64 GB ROM, 15.49 cm (6.1 inch) Liquid Retina HD Display, 12MP + 12MP | 12MP Front Camera, A13 Bionic Chip Processor',
                'gallery'=>'https://rukminim1.flixcart.com/image/416/416/ko1smfk0/television/1/r/d/ua43aue60aklxl-ua43aue60aklxl-samsung-original-imag2hg7b55y8xhs.jpeg?q=70'
            ],
            [
                'name'=>'realme 8 5G',
                'price'=>'14999',
                'category'=>'mobile',
                'description'=>'4 GB RAM | 128 GB ROM | Expandable Upto 1 TB, 16.51 cm (6.5 inch) Full HD+ Display, 48MP + 2MP + 2MP | 16MP Front Camera, 5000 mAh Battery, MediaTek Dimensity 700 (MT6833) Processor',
                'gallery'=>'https://rukminim1.flixcart.com/image/416/416/knrsjgw0/mobile/f/o/w/8-5g-rmx3241-realme-original-imag2d8eksc2szzy.jpeg?q=70'
            ],
            [
                'name'=>'JBL Wave 100TWS Bluetooth Headset ',
                'price'=>'3499',
                'category'=>'Headphones',
                'description'=>'With Mic:Yes, Bluetooth version: 5, Wireless range: 10 m, Battery life: 20 hrs | Charging time: 2 hrs',
                'gallery'=>'https://rukminim1.flixcart.com/image/416/416/ksez24w0/headphone/0/d/u/jblw100twsbluin-jbl-original-imag5zhmen48cz5y.jpeg?q=70'
            ]
            ,[
                'name'=>'Blue Star 1.5 Ton 3 Star Split AC ',
                'price'=>'32990',
                'category'=>'Air Conditioners',
                'description'=>'1.5 Ton, 3 Star BEE Rating 2021 : For energy savings upto 15% (compared to Non-Inverter 1 Star), Auto Restart: No need to manually reset the settings post power-cut',
                'gallery'=>'https://rukminim1.flixcart.com/image/416/416/km3s1ow0/air-conditioner-new/n/m/k/fs312ebtu-split-blue-star-fixed-speed-original-imagf2zpzhmvdxgh.jpeg?q=70'
            ]
        ]);
    }
}
