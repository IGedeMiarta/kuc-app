<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
          return [
            'name' => $this->faker->name(),
            'no_id' => $this->faker->unique()->numberBetween(111111111111,999999999999),
            'no_hp' => $this->faker->phoneNumber(),
            'alamat'=>$this->faker->streetAddress(),
            'job_role'=>$this->faker->numberBetween(1,5)
        ];
    }
}
