<?php

use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 2; $i++) {
            DB::table('suppliers')->insert(
                [
                    'name' => Str::random(10),
                    'supplier_code' => Str::random(10),
                    'address' => Str::random(10),
                    'phone_number' => rand(1111111111,9999999999),
                    'email' => Str::random(5).'@demo.com',
                    'city' => 'Bengaluru',
                    'state' => 'Karnataka',
                    'country' => 'India'
                ]
            );
        }
    }
}
