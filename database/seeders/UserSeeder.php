<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Employé',
            'email' => 'meriem.aouad@emsi-edu.ma',
            'password' => Hash::make('mama2004'),
            'role' => 'employee',
        ]);
    }

}
