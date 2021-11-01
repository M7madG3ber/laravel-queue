<?php

namespace Database\Seeders;

use App\Models\Email;
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
        Email::factory(5)->create();
    }
}