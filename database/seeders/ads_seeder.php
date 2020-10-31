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
        DB::table('ads')->insert([
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'name' => Str::random(5),
            'img' => json_encode(Str::random(5) . '.jpg'),
            'city_id' => cities::inRandomOrder()->first()->INSEE,
            'sub_category_id' => rand(1, 50),
            'description' => Str::random( 50)
        ]);
    }
}
