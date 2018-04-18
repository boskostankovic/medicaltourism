<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('addresses')->insert([
            'street_name' => 'Zemunska',
            'street_number' => '11',
            'street_number_subnumber' => 'a',
            'floor_number' => 'I',
            'apartment_number' => '10',
            'city_id' => 1,
        ]);
        DB::table('addresses')->insert([
            'street_name' => 'Gandijeva',
            'street_number' => '17',
            'street_number_subnumber' => '',
            'floor_number' => 'III',
            'apartment_number' => '18',
            'city_id' => 1,
        ]);
        DB::table('addresses')->insert([
            'street_name' => 'Marka Čelebonovića',
            'street_number' => '123',
            'street_number_subnumber' => 'c',
            'floor_number' => 'IV',
            'apartment_number' => '10',
            'city_id' => 1,
        ]);
        DB::table('addresses')->insert([
            'street_name' => 'Novosadska',
            'street_number' => '321',
            'apartment_number' => '12',
            'city_id' => 2,
        ]);
    }
}
