<?php

namespace Database\Factories;
Use App\Models\PostItems;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = PostItems::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email'=> $this->faker->unique->email,
            'address'=>$this->faker->city
        ];
    }
}
