<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Recycle;
use App\Models\Day;

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
        Day::factory(31)->create();
    }
}
