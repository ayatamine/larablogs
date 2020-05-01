<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Setting::create([
            'site_name'=>'Ayat amine',
            'contact_email'=>'amine@gmail.com',
            'address'=>'address example here'
        ]);
    }
}
