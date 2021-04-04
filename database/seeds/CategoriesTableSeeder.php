<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Un-categorized',
            'status' => 1
        ]);

        Category::create([
            'name' => 'Technology',
            'status' => 1
        ]);

        Category::create([
            'name' => 'Business',
            'status' => 1
        ]);

        Category::create([
            'name' => 'Sport',
            'status' => 0
        ]);

    }
}
