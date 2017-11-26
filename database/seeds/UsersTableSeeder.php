<?php

use App\User; 
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Tim Beckett',
            'email' => 'timothybenjaminbeckett@gmail.com',
            'password' => bcrypt('23mememe'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id, 
            'avatar' => 'uploads/avatars/me_cody.jpg',
            'about' => 'Web Developer, Writer, Photographer, House Painter', 
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
