<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Karnatakas = [
            [
                'name' => 'Bengaluru',
                'states_id' => 'Karnataka'
            ],
            [
                'name' => 'Hubli-Dharwad',
                'states_id' => 'Karnataka'
            ],
            [
                'name' => 'Mysuru',
                'states_id' => 'Karnataka'
            ],
            [
                'name' => 'Kalaburagi',
                'states_id' => 'Karnataka'
            ],
            [
                'name' => 'Mangaluru',
                'states_id' => 'Karnataka'
            ],
            [
                'name' => 'Belagavi',
                'states_id' => 'Karnataka'
            ],
            [
                'name' => 'Davanagere',
                'states_id' => 'Karnataka'
            ],
            [
                'name' => 'Ballari',
                'states_id' => 'Karnataka'
            ],
            [
                'name' => 'Vijayapura',
                'states_id' => 'Karnataka'
            ],
            [
                'name' => 'Shivamogga',
                'states_id' => 'Karnataka'
            ],
        ];

        foreach($Karnatakas as $Karnataka) {
            DB::table('cities')->insert($Karnataka);
        }

        $Maharashtras = [
            [
                'name' => 'Mumbai',
                'states_id' => 'Maharashtra'
            ],
            [
                'name' => 'PMC, Pune',
                'states_id' => 'Maharashtra'
            ],
            [
                'name' => 'Nagpur',
                'states_id' => 'Maharashtra'
            ],
            [
                'name' => 'Thane',
                'states_id' => 'Maharashtra'
            ],
            [
                'name' => 'PCMC, Pune',
                'states_id' => 'Maharashtra'
            ],
            [
                'name' => 'Nashik',
                'states_id' => 'Maharashtra'
            ],
            [
                'name' => 'Kalyan-Dombivli',
                'states_id' => 'Maharashtra'
            ],
            [
                'name' => 'Vasai-Virar City MC',
                'states_id' => 'Maharashtra'
            ],
            [
                'name' => 'Aurangabad',
                'states_id' => 'Maharashtra'
            ],
            [
                'name' => 'Navi Mumbai',
                'states_id' => 'Maharashtra'
            ],
        ];

        foreach($Maharashtras as $Maharashtra) {
            DB::table('cities')->insert($Maharashtra);
        }

        $Keralas = [
            [
                'name' => 'Kochi',
                'states_id' => 'Kerala'
            ],
            [
                'name' => 'Trivandrum',
                'states_id' => 'Kerala'
            ],
            [
                'name' => 'Kozhikode',
                'states_id' => 'Kerala'
            ],
            [
                'name' => 'Kollam',
                'states_id' => 'Kerala'
            ],
            [
                'name' => 'Thrissur',
                'states_id' => 'Kerala'
            ],
            [
                'name' => 'Kannur',
                'states_id' => 'Kerala'
            ],
            [
                'name' => 'Alappuzha',
                'states_id' => 'Kerala'
            ],
            [
                'name' => 'Kottayam',
                'states_id' => 'Kerala'
            ],
            [
                'name' => 'Palakkad',
                'states_id' => 'Kerala'
            ],
            [
                'name' => 'Manjeri',
                'states_id' => 'Kerala'
            ],
        ];

        foreach($Keralas as $Kerala) {
            DB::table('cities')->insert($Kerala);
        }

        $Tamils = [
            [
                'name' => 'Chennai',
                'states_id' => 'Tamil Nadu'
            ],
            [
                'name' => 'Coimbatore',
                'states_id' => 'Tamil Nadu'
            ],
            [
                'name' => 'Madurai',
                'states_id' => 'Tamil Nadu'
            ],
            [
                'name' => 'Tiruchirappalli',
                'states_id' => 'Tamil Nadu'
            ],
            [
                'name' => 'Tiruppur',
                'states_id' => 'Tamil Nadu'
            ],
            [
                'name' => 'Salem',
                'states_id' => 'Tamil Nadu'
            ],
            [
                'name' => 'Erode',
                'states_id' => 'Tamil Nadu'
            ],
            [
                'name' => 'Tirunelveli',
                'states_id' => 'Tamil Nadu'
            ],
            [
                'name' => 'Vellore',
                'states_id' => 'Tamil Nadu'
            ],
            [
                'name' => 'Thoothukkudi',
                'states_id' => 'Tamil Nadu'
            ],
        ];

        foreach($Tamils as $Tamil) {
            DB::table('cities')->insert($Tamil);
        }

        $Punjabs = [
            [
                'name' => 'Amritsar',
                'states_id' => 'Punjab'
            ],
            [
                'name' => 'Ludhiana',
                'states_id' => 'Punjab'
            ],
            [
                'name' => 'Jalandhar',
                'states_id' => 'Punjab'
            ],
            [
                'name' => 'Patiala',
                'states_id' => 'Punjab'
            ],
            [
                'name' => 'Bathinda',
                'states_id' => 'Punjab'
            ],
            [
                'name' => 'Hoshiarpur',
                'states_id' => 'Punjab'
            ],
            [
                'name' => 'Mohali',
                'states_id' => 'Punjab'
            ],
            [
                'name' => 'Batala',
                'states_id' => 'Punjab'
            ],
            [
                'name' => 'Pathankot',
                'states_id' => 'Punjab'
            ],
            [
                'name' => 'Moga',
                'states_id' => 'Punjab'
            ],
        ];

        foreach($Punjabs as $Punjab) {
            DB::table('cities')->insert($Punjab);
        }
    }
}
