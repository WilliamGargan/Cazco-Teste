<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'William Gargan',
            'email' => 'william.gargan@outlook.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
