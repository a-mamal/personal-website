<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Profile;
use App\Models\Issuer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Certificate>
 */
class CertificateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'profile_id' => Profile::factory(),
            'issuer_id' => Issuer::inRandomOrder()->first()->id ?? Issuer::factory()->create()->id,

            'name' => $this->faker->sentence(3),
            'description' => $this->faker->optional()->paragraph(),

            'date_awarded' => $this->faker->
                date('-5 years', 'now'),

            'expiration_date' => $this->faker->optional()->
                date('now', '+10 years'),
           

            'credential_link' => $this->faker->optional()->url(),
            'image' => null,
        ];
    }
}
