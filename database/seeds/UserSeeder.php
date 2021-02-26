<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => Str::random(10),
                'username' => 'demo',
                'email' => 'demo@demo.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => Str::random(10),
                'username' => 'demo2',
                'email' => 'demo2@demo.com',
                'password' => Hash::make('password'),
            ]
        ];

        foreach($users as $user) {
            DB::table('users')->insert($user);
        }
        
    }
}
