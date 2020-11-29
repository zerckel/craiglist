<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class sub_category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list_sub_cat = [
          'Jeux video',
          'Roman',
          'Emploi',
          'Location',
          'Automobile'
        ];

        DB::table('sub_category')->insert([
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'name' => array_rand(array_flip($list_sub_cat)),
            'category_id' => rand(0, 5),
        ]);
    }
}
