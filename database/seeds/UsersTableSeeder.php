<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;

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
            'email' => 'admin@me.com',
            'password' => bcrypt('12345678'),
            'admin' => 1
        ]);

        Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/avatar.png',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at ipsum eget tellus condimentum imperdiet in lacinia erat. Proin rutrum posuere tristique. Aenean laoreet egestas dolor ut sodales. Suspendisse potenti. Nullam rutrum magna porttitor sem porta, at posuere odio tincidunt. Mauris imperdiet rhoncus nunc. Fusce tristique dictum tellus ac finibus. Praesent sed neque vel justo sodales tristique.',
            'facebook' => 'https://www.facebook.com/',
            'youtube' => 'https://www.youtube.com/'
        ]);
    }
}
