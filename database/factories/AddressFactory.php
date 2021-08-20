<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(20),
            'area_id' => 1,
            'city_id' => 1,
            'street' => $this->faker->streetName(),
            'house' => $this->faker->buildingNumber(),
            'info' => $this->faker->text(50),
        ];
    }
}
