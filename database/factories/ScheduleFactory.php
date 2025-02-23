<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\Room;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject_id' => Subject::factory()->create()->id,
            'teacher_id' => User::factory()->create()->id,
            'group_id' => Group::factory()->create()->id,
            'room_id' => Room::factory()->create()->id,
            'enum' => $this->faker->numberBetween(1,6),
            'week_day' => $this->faker->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']),
            'data' => $this->faker->date(),

        ];
    }
}
