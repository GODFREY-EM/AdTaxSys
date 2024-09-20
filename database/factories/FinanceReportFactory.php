<?php

namespace Database\Factories;

use App\Models\FinanceReport; // Add this line to import the FinanceReport model
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FinanceReport>
 */
class FinanceReportFactory extends Factory
{
    protected $model = FinanceReport::class;

    public function definition()
    {
        return [
            'report_name' => $this->faker->sentence(3),
            'total_income' => $this->faker->randomFloat(2, 1000, 5000),
            'total_expense' => $this->faker->randomFloat(2, 500, 3000),
            'net_profit' => function (array $attributes) {
                return $attributes['total_income'] - $attributes['total_expense'];
            },
        ];
    }
}
