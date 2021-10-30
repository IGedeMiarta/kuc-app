<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Job_role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
    }
}
