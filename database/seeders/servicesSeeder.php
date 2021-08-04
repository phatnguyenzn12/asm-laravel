<?php

namespace Database\Seeders;

use App\Models\services;
use Illuminate\Database\Seeder;

class servicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        services::factory(5)->create();
    }
}
