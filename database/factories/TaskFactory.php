<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'status' => $this->faker->name,
			'state' => $this->faker->name,
        ];
    }
}
