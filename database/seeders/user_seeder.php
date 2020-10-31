<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(5),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'ads_fav' => json_encode([1, 3]),
            'ads_create' => json_encode([1, 3]),
            'ads_mask' => json_encode([2, 4])
        ]);
    }
}
