<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Pour le développement - données de test
        if (app()->environment('local')) {
            User::factory()->create([
                'name' => 'xavier',
                'email' => 'xavier.jeanne@gmail.com',
            ]);
        }
        
        // Pour la production - vraies données
        if (app()->environment('production')) {
            $this->call([
                ProductionSeeder::class,
            ]);
        }
    }
}
