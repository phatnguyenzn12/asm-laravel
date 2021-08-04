<?php

namespace Database\Seeders;

use App\Models\roomservices;
use Illuminate\Database\Seeder;

class roomservicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        roomservices::factory(5)->create();
    }
}
