<?php

namespace Database\Factories;

use App\Models\BankAccount;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<BankAccount>
 */
class BankAccountFactory extends Factory
{
    protected $model = BankAccount::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'account_number' => $this->faker->unique()->numerify('##########'),
            'full_name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->unique()->numerify('0#########'),
            'balance' => $this->faker->numberBetween(0, 500000000),
            'status' => $this->faker->randomElement(['active', 'inactive', 'blocked']),
        ];
    }
}
