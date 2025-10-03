<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdDataSeeder extends Seeder
{
    /**
     * Run the production seeders.
     */
    public function run(): void
    {
        $this->call([
            ProductionSeeder::class,
        ]);
    }
}