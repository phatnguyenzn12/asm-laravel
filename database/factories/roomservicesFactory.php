<?php

namespace Database\Factories;

use App\Models\rooms;
use App\Models\roomservices;
use App\Models\services;
use Illuminate\Database\Eloquent\Factories\Factory;

class roomservicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = roomservices::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'room_id' => rooms::all()->random()->id,
            'service_id' => services::all()->random()->id,
            'addtional_price' => $this->faker->numerify('###000')
        ];
    }
}
