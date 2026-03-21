<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->jobTitle(),
            'salary'=>fake()->numberBetween(30000,60000),
            'location'=>fake()->boolean() ? fake()->city()." , ". fake()->country() : 'remote',
            'time_of_work'=>fake()->randomElement(['fulltime','parttime']),
            'url'=>fake()->url(),
            'description'=>fake()->text(300),
            'employer_id'=>Employer::factory(),
            'featured'=>fake()->boolean(10),
        ];
    }
}



            // $table->string('title');
            // $table->string('salary');
            // $table->string('location');
            // $table->enum('time_of_work',['fulltime','parttime']);
            // $table->string('url');//url to company site which contain all details about the job
            // $table->text('description');
            // $table->boolean('featured')->default(false);
