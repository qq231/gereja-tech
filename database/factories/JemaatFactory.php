<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JemaatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'nama_lengkap' => $this->faker->name(),
          'kelamin' => rand(0, 1),
          'tempat_lahir' => $this->faker->city(),
          'tgl_lahir' => $this->faker->date(),
          'alamat' => $this->faker->address(),
          'kab_kota' => $this->faker->city(),
          'provinsi' => $this->faker->state(),
          'mobile_phone' => $this->faker->phoneNumber(),
          'pekerjaan' => $this->faker->jobTitle()
        ];
    }
}
