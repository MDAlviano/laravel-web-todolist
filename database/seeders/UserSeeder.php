<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "Eko Kurniawan Khannedy";
        $user->email = "alvin@localhost";
        $user->password = bcrypt("rahasia");
        $user->save();
    }
}
