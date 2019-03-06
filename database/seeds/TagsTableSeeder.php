<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'tag' => 'First Tag'
        ]);

        Tag::create([
            'tag' => 'Second Tag'
        ]);

        Tag::create([
            'tag' => 'Third tag'
        ]);

        Tag::create([
            'tag' => 'Fourth Tag'
        ]);
    }
}
