<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User; 
use App\Models\SystemSetting;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password'=> Hash::make('admin')
        ]);

        // Call the other seeder
        $this->call(GenreSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(SongSeeder::class);

        SystemSetting::factory()->create([
            'company_name' => 'admin',
            'email' => 'admin@gmail.com',
            'website'=> '',
            'customer_care_no' => ''
        ]);
        
    }
}
