<?php

namespace Database\Factories;

use App\Models\rooms;
use Illuminate\Database\Eloquent\Factories\Factory;

class roomsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = rooms::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "room_no" => $this->faker->numerify('P###'),
            "floor" => rand(1,10),
            "image" => "image.jpg",
            "detail"=> $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            "price" => $this->faker->numerify('###000')
        ];
    }
}
