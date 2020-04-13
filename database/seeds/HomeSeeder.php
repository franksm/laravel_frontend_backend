<?php

use App\Home;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::truncate();
        $Data = new Home();
        $Data->content_1 = '嚴選咖啡豆，進口於伊比利半島';
        $Data->content_2 = '店內提供 Wifi 使用';
        $Data->image = '1586764959.jpg';
        $Data->save();
    }
}
