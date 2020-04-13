<?php

use App\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Store::truncate();
        $Data = new Store();
        $Data->sun_open = '00:00:00';
        $Data->mon_open = '09:00:00';
        $Data->tue_open = '09:00:00';
        $Data->wed_open = '09:00:00';
        $Data->thu_open = '09:00:00';
        $Data->fri_open = '09:00:00';
        $Data->sat_open = '00:00:00';
        $Data->sun_close = '00:00:00'; 
        $Data->mon_close = '18:00:00';
        $Data->tue_close = '18:00:00';
        $Data->wed_close = '18:00:00';
        $Data->thu_close = '18:00:00';
        $Data->fri_close = '18:00:00';
        $Data->sat_close = '00:00:00';
        $Data->address = '宜蘭縣某某小區';
        $Data->phone = '0912345678';
        $Data->save(); 
    }
}
