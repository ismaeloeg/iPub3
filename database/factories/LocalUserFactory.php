<?php

namespace Database\Factories;

use App\Models\LocalUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LocalUser>
 */
class LocalUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            'avatar' => ('images/default_avatar.png'),
            'pin' => $this->faker->numberBetween(1000, 9999)
        ];
    }
}
