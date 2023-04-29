<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Categories::factory(2)->create();
        DB::table("categories")->insert([
            "category_name"=>"Homme",
            "created_at"=> now(),
            "updated_at" => now(),
        ]);
        DB::table("categories")->insert([
            "category_name"=>"Femme",
            "created_at"=> now(),
            "updated_at" => now(),
        ]);
    }
}
