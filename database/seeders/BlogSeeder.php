<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('email', '=', 'admin@gmail.com')->first();
        $admin->blogs()->create([
            'title' => 'My First Blog',
            'description' => 'This is the description of my first blog.',
            'image' => 'https://i.pinimg.com/736x/13/5f/a4/135fa489a852243fe6114e007dafc8a4.jpg',
        ]);
    }
}
