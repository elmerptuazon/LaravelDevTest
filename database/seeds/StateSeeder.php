<?php

use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            [
                'name' => 'Karnataka',
                'countries_id' => 'India'
            ],
            [
                'name' => 'Maharashtra',
                'countries_id' => 'India'
            ],
            [
                'name' => 'Kerala',
                'countries_id' => 'India'
            ],
            [
                'name' => 'Tamil Nadu',
                'countries_id' => 'India'
            ],
            [
                'name' => 'Punjab',
                'countries_id' => 'India'
            ],
        ];

        foreach($states as $state) {
            DB::table('states')->insert($state);
        }
    }
}
