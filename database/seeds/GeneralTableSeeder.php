<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GeneralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Test User',
                'email' => 'test@gmail.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('password')
            ]
        );

        DB::table('countries')->insert([
            [
                'name' => 'USA',
                'currency_symbol' => '&#36;',
                'flat_rate' => 1500
            ],
            [
                'name' => 'UK',
                'currency_symbol' => '&#163;',
                'flat_rate' => 800
            ]
        ]);

        DB::table('items')->insert([
            [
                'name' => 'Cars'
            ],
            [
                'name' => 'Equipment'
            ]
        ]);

        DB::table('transport_modes')->insert([
            [
                'name' => 'air',
                'base_fare' => 50000,

            ],
            [
                'name' => 'sea',
                'base_fare' => 15000
            ]
        ]);

    }
}
