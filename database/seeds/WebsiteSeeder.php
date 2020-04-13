<?php

use App\Website;
use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Website::truncate();
        $Data = new Website();
        $Data->title = '悠閒咖啡';
        $Data->subtitle = '悠閒午後來杯咖啡醒醒腦';
        $Data->footer = '地址：宜蘭縣小區';
        $Data->save();
    }
}
