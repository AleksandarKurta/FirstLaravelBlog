<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Aleksandar',
            'admin' => 1,
            'email' => 'admin@me.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
