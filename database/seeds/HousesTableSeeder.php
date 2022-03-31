<?php

use App\House;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $house = new House();

        $house->reference_number = '123456';
        $house->name ='Villetta luminuosa 100mq';
        $house->description = null;
        $house->energy_rating ='A';
        $house->amount =200000;
        $house->sm = 100;
        $house->rooms =5;
        $house->address = 'VIa della Repubblica 1';
        $house->city ='Firenza';
        $house->province = 'Fi';
        $house->zip = '51000';

        $house->save();


    }
}
