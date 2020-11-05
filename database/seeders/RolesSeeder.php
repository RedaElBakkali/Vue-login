<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Str;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Role::create([
            'name' => 'user',
            'display_name' => 'Normal user',
            'description' => 'can do specefic things in the website'
        ]);
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Website Admin',
            'description' => 'can do anything in the website'
        ]);
        $userwr = User::create([
            'name' => 'Reda ElBakkali',
            'email' => 'elbakkalireda@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $userwr->attachRole($admin);
    }
}
