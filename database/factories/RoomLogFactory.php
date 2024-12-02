<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\RoomLog;
use App\Models\Employee;
use App\Models\Room;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class RoomLogFactory extends Factory
{
    protected $model = RoomLog::class;

    public function definition()
    {
        return [
            'employee_id' => Employee::factory(),
            'room_id' => Room::factory(),
            'entered_at' => $this->faker->dateTimeThisMonth(),
            'exited_at' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
