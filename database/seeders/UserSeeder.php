<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'role_id'=> 1,
            'name'=>'manager',
            'email'=>'manage@smart.com',
            'password' => Hash::make('secret'),
        ]);
        
        User::create([
            'role_id'=> 2,
            'name'=>'client',
            'email'=>'client@smart.com',
            'password' => Hash::make('secret'),
        ]);
    }
}
