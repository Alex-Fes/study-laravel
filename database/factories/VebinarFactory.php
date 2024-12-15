<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class VebinarFactory extends Factory
{
    public function definition(): array
    {
        // Используем Carbon для более удобной работы с датами
        $now = Carbon::now();
        
        // Начало регистрации - от сегодня до +7 дней
        $startRegistration = $now->copy()->addDays(rand(0, 7));
        
        // Конец регистрации - от даты начала регистрации +3-10 дней
        $endRegistration = $startRegistration->copy()->addDays(rand(3, 10));
        
        // Начало вебинара - на следующий день после окончания регистрации
        $startDate = $endRegistration->copy()->addDay();
        
        // Конец вебинара - 2 часа после начала
        $endDate = $startDate->copy()->addHours(2);
        
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'author' => fake()->name(),
            'author_email' => fake()->email(),
            'speaker' => fake()->name(),
            'speaker_email' => fake()->email(),
            'start_date' => $startDate,
            'end_date' => $endDate,
            'start_registration' => $startRegistration,
            'end_registration' => $endRegistration,
            'status' => fake()->randomElement(['draft', 'active', 'completed']),
            'comment' => fake()->optional()->sentence()
        ];
    }
}