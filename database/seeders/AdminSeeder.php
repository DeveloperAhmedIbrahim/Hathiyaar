<?php

namespace Database\Seeders;

use App\Enum\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "Administrator";
        $user->email = "admin@domain.com";
        $user->password = Hash::make("admin");
        $user->role = Role::from(1);
        $user->profile = '';
        $user->save();
    }
}
