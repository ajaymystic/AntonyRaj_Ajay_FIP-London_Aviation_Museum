<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    // I seed a default admin account so the panel works straight after setup
    public function run(): void
    {
        // I check first so re-running the seeder doesn't create a duplicate
        $exists = DB::table('admins')->where('username', 'admin')->exists();

        if (!$exists) {
            DB::table('admins')->insert([
                'username'      => 'admin',
                'email'         => 'admin@londonaviation.com',
                'password_hash' => '$2y$10$OzEqjntsC3rGc4U6Mm2OOOEi3P/ijSbWShi5EDOO.FXpelUTas4NC',
                'role'          => 'admin',
                'created_at'    => '2026-03-02 05:01:10',
                'last_login'    => null,
            ]);
        }
    }
}
