<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title_pl'=>'Biz kimik',
            'title_ru'=>'Kto mi',
            'title_en'=>'english',
            'description_pl'=>'Bizi haqqimizda uzun metn olacaq',
            'description_ru'=>'ruskiy yazik desc',
            'description_en'=>'english'
        ];
    }
}
