<?php

use App\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::truncate();
        $Data = new About();
        $Data->content = '本店位於宜蘭某某小區';
        $Data->image = '1586764990.jpg';
        $Data->save();
    }
}
