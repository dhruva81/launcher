<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (! User::where('email', 'super@admin.com')->first()) {
            User::create([
                'name' => 'Super Admin',
                'email' => 'super@admin.com',
                'password' => bcrypt('password'),
            ]);
        }
    }
}
