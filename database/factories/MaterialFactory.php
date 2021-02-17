<?php

namespace Database\Factories;

use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MaterialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Material::class;
    private $code;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->code = $this->faker->randomLetter . '0' . $this->faker->randomNumber(4);

        return [
            'code'  =>  Str::upper($this->code),
            'name'  =>  Str::upper($this->faker->word),
        ];
    }
}
