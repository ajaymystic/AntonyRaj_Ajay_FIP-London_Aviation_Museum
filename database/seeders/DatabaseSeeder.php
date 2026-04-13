<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // I left the database already populated from the existing project
    public function run(): void
    {
        // I call the seeders in this order so the admin exists before any content is added
        $this->call([
            AdminSeeder::class,
            BorPilotSeeder::class,
        ]);
    }
}