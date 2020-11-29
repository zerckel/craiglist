<?php

namespace Database\Seeders;

use App\Models\cities;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ads_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $array_ads = [
            'GTA 5 PS3',
            'F2 23 m² XVI eme arrondissement',
            'Job étudiant',
            'Fiat 500',
            'L\'etranger Albert Camus'
        ];

        DB::table('ads')->insert([
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'name' => array_rand(array_flip($array_ads)),
            'img' => json_encode('https://www.shutterstock.com/fr/image-vector/no-image-available-vector-illustration-on-744886198'),
            'city_id' => cities::inRandomOrder()->first()->INSEE,
            'sub_category_id' => rand(1, 50),
            'description' => Str::random(50)
        ]);
    }
}
