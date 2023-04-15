<?php

namespace Database\Seeders;

use App\Models\Students;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Students::factory(5)->create();
    }
}
