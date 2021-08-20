<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::insert([
            ['name' => 'Cherkasy Oblast'],
            ['name' => 'Chernihiv Oblast'],
            ['name' => 'Chernivtsi Oblast'],
            ['name' => 'Crimea'],
            ['name' => 'Dnipropetrovsk Oblast'],
            ['name' => 'Donetsk Oblast'],
            ['name' => 'Ivano-Frankivsk Oblast'],
            ['name' => 'Kharkiv Oblast'],
            ['name' => 'Kherson Oblast'],
            ['name' => 'Khmelnytskyi Oblast'],
            ['name' => 'Kirovohrad Oblast'],
            ['name' => 'Kyiv'],
            ['name' => 'Kyiv Oblast'],
            ['name' => 'Luhansk Oblast'],
            ['name' => 'Lviv Oblast'],
            ['name' => 'Mykolaiv Oblast'],
            ['name' => 'Odessa Oblast'],
            ['name' => 'Poltava Oblast'],
            ['name' => 'Rivne Oblast'],
            ['name' => 'Sevastopol'],
            ['name' => 'Sumy Oblast'],
            ['name' => 'Ternopil Oblast'],
            ['name' => 'Vinnytsia Oblast'],
            ['name' => 'Volyn Oblast'],
            ['name' => 'Zakarpattia Oblast'],
            ['name' => 'Zaporizhzhia Oblast'],
            ['name' => 'Zhytomyr Oblast'],
        ]);
    }
}
