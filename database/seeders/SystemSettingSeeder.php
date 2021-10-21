<?php

namespace Database\Seeders;

use App\SystemSetting;
use Illuminate\Database\Seeder;

class SystemSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SystemSetting::create([
        	'name' => 'MyShop',
        	'description' => 'Sample E-commerce solution build with laravel ',
        	'address' => 'Sousse , Tunisia',
        	'tel' => '+21655192228',
        	'email' => 'loydtafireyi@gmail.com',
        	'slug' => 'deveroom.com',
            'logo' => asset('frontend/img/logo.png'),
        ]);
    }
}
