<?php

use App\Data;
use App\Company;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Data::create([
            'company_id'=> Company::first()->id,
            'address'   => 'Brasil 832, Loma Hermosa',
            'email'     => 'cadenastramec@gmail.com',
            'phone1'    => '+541147694809|+54 11 4769 4809',
            'phone2'    => '+541147697262|4769 7262',
            'phone3'    => '+5411479699019|47969 9019',
            'phone4'    => '+541120960460|2096 0460',
            'logo_header'=> 'images/data/Group_3363.png',
        ]);
    }
}

