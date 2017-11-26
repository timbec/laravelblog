<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => 'Laravel Blog Example',
            'address' => 'New York City',
            'contact_number' => '888-888-8888',
            'contact_email' => 'info@laravelblog.com'
        ]);
    }
}
