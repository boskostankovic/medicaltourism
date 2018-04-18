<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('states')->insert([
            'name' => 'Serbia',
            'internacional_code' => 'SRB',
            'sort' => 1,
            'flag_name' => 'flag_srb.png',
        ]);
        DB::table('states')->insert([
            'name' => 'Montenegro',
            'internacional_code' => 'MNE',
            'flag_name' => 'flag_mne.png',
        ]);
        DB::table('states')->insert([
            'name' => 'Macedonia',
            'internacional_code' => 'MK',
            'flag_name' => 'flag_mk.png',
        ]);
        DB::table('states')->insert([
            'name' => 'United States of America',
            'internacional_code' => 'USA',
            'flag_name' => 'flag_usa.png',
        ]);
        DB::table('states')->insert([
            'name' => 'Croatia',
            'internacional_code' => 'CRO',
            'flag_name' => 'flag_cro.png',
        ]);
        DB::table('states')->insert([
            'name' => 'France',
            'internacional_code' => 'FR',
            'flag_name' => 'flag_fr.png',
        ]);
    }
}
