<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\JobTitle;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class JobTitleFactory extends Factory
{
    protected $model = JobTitle::class;

    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
        ];
    }
}
