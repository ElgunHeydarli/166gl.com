<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Settings>
 */
class SettingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>'175 Evakuasiya',
            'email'=>'lorem@gmail.com',
            'phone'=>'0507773808',
            'adress_pl'=>'pl unvan',
            'adress_en'=>'en unvan',
            'adress_ru'=>'ru unvan'
        ];
    }
}
