<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'name'    => "Brazza Hip-Hop",
            'address' => 'Congo, Dolisie',
            'number'  => '07 52 42 69 37',
            'email'   => 'info@masta.com',
            'logo'    => 'logo.png',
            'favicon' => 'default.png',
            'about'   => 'Site d information ',
        ]);
    }
}
