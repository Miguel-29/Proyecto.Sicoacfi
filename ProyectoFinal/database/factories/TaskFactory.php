<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\environment;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = environment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => '123',
            'floor' => 'piso 1',
        ];
    }
}
