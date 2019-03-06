<?php

use Illuminate\Database\Seeder;
use App\Category;

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
            'name' => 'Laravel 5.8'
        ]);

        Category::create([
            'name' => 'Vue JS'
        ]);

        Category::create([
            'name' => 'Wordpress'
        ]);

        Category::create([
            'name' => 'React'
        ]);

        Category::create([
            'name' => 'Symphony'
        ]);
    }
}
