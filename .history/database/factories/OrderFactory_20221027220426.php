<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $userIds = User::get()->pluck('id')->toArray();
        dd($userIds);
        return [
            'user_id' => $userIds[rand(0,count($userIds))],
            'status' => rand(0,1)
        ];
    }
}