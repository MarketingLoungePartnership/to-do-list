<?php

namespace Database\Factories;

use App\Models\ToDoList;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\Factory;

class ToDoListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ToDoList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description'=> $this->faker->sentence(3),
            'status' =>$this->faker->boolean(0)
            
        ];
    }
}
