<?php

namespace Database\Factories;

use App\Enums\OrderStatus;
use App\Enums\ServiceEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'contact' => fake()->randomElement([fake()->phoneNumber(), fake()->email()]),
            'text' => fake()->optional()->text(),
            'service' => fake()->randomElement(ServiceEnum::all()),
            'status' => fake()->randomElement(OrderStatus::all()),
            'comment' => fake()->optional()->text(),
        ];
    }
}
