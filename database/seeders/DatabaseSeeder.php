<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Category_seeder::class,
            sub_category_seeder::class,
            user_seeder::class,
            ads_seeder::class
        ]);
    }
}
