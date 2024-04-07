<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'user_unique_id' => rand(9999999, 1000000),
            'role_id' => 7,
            'status' => 1,
        ]);
        $user_details = UserDetails::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin,',
            'mobile_number' => '7007976332',
            'user_id' => $user->id,
        ]);
    }
}
