<?php

namespace Database\Factories;

use App\Models\entregable;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntregableFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = entregable::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=> 'Tarea',rand(0,10),
        ];
    }
}
