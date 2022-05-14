<?php

namespace Database\Factories;
use App\Models\Seller;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seller>
 */
class SellerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */
    public $model  = Seller::class;
    public function definition()
    {
        return [
          'name'=>$this ->faker->name,
          'email'=>$this ->faker->email,
          'address'=>$this ->faker->address,
          'contact'=>$this ->faker->numerify('###########'),
        ];
    }
}
