<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pasien_id'=> mt_rand(1,3),
            'dokter_id'=>mt_rand(1,3),
            'kondisiKesehatan'=> $this->faker->sentence(mt_rand(2,8)),
            'suhu' => mt_rand(35,45.5),
            'gambar' => $this->faker->sentence()
        ];
    }
}
