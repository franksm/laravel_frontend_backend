<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        $Data = new Product();
        $Data->title = '美式咖啡';
        $Data->subtitle = '伊比利半島黃金豆';
        $Data->image = '1586765020.jpg';
        $Data->description = '濃郁口感，讓人欲罷不能';
        $Data->save();

        $Data = new Product();
        $Data->title = '珍珠奶茶';
        $Data->subtitle = '大紅袍茶葉';
        $Data->image = '1586766016.jpg';
        $Data->description = '香甜可口，讓人想一喝再喝';
        $Data->save();
    }
}
