<?php

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
        $user =  App\User::create([
            'name'     => 'Gomab FUMU',
            'email'    => 'fumu@gomab.com',
            'password' => bcrypt('password'),
            'admin'    => 1
        ]);

        App\Profile::create([
            'user_id'  => $user->id,
            'avatar'   => 'uploads/avatar/default.png',
            'about'    => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa ',
            'facebook' => 'facebook.com',
        ]);
    }
}
