<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cities')->insert([
            'name' => 'Belgrade',
            'zip_code' => '11000',
            'state_id' => 2,
        ]);
        DB::table('cities')->insert([
            'name' => 'Novi Sad',
            'zip_code' => '21000',
            'state_id' => 2,
        ]);
        DB::table('cities')->insert([
            'name' => 'Niš',
            'zip_code' => '18000',
            'state_id' => 2,
        ]);
        DB::table('cities')->insert([
            'name' => 'Podgorica',
            'zip_code' => '44000',
            'state_id' => 3,
        ]);
        DB::table('cities')->insert([
            'name' => 'Bar',
            'zip_code' => '45000',
            'state_id' => 3,
        ]);
        DB::table('cities')->insert([
            'name' => 'Skoplje',
            'zip_code' => '71000',
            'state_id' => 4,
        ]);
        DB::table('cities')->insert([
            'name' => 'Prilep',
            'zip_code' => '72000',
            'state_id' => 4,
        ]);
        DB::table('cities')->insert([
            'name' => 'New York',
            'zip_code' => '',
            'state_id' => 5,
        ]);
        DB::table('cities')->insert([
            'name' => 'Denver',
            'zip_code' => '',
            'state_id' => 5,
        ]);
        DB::table('cities')->insert([
            'name' => 'Zagreb',
            'zip_code' => '81000',
            'state_id' => 6,
        ]);
        DB::table('cities')->insert([
            'name' => 'Dubrovnik',
            'zip_code' => '82000',
            'state_id' => 6,
        ]);
        DB::table('cities')->insert([
            'name' => 'Paris',
            'zip_code' => '',
            'state_id' => 7,
        ]);
        DB::table('cities')->insert([
            'name' => 'Marsey',
            'zip_code' => '',
            'state_id' => 7,
        ]);
        DB::table('cities')->insert([
            'name' => 'Lille',
            'zip_code' => '',
            'state_id' => 7,
        ]);


    }
}
