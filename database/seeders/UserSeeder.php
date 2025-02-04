<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        User::create([
            "first_name" => "Caren",
            "last_name"  => "Achieng",
            "email"      => "caren@achieng.com",
            "gender"     => "female",
            "password"   => Hash::make(12345678),
            "is_admin"   => true
        ]);
    }
}
