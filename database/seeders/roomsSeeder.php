<?php

namespace Database\Seeders;

use App\Models\rooms;
use Illuminate\Database\Seeder;

class roomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        rooms::factory(5)->create();
    }
}
