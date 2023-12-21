<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\House;
use Faker\Generator as Faker;

class HouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newHouse = new House();
            $newHouse->image = $faker->imageUrl(640, 480, 'animals', true);
            $newHouse->reference = $faker->bothify('??-##');
            $newHouse->address = $faker->streetAddress();
            $newHouse->postal_code = $faker->bothify('??-###');
            $newHouse->city = $faker->city();
            $newHouse->state = $faker->state();
            $newHouse->square_meters = $faker->numberBetween(30, 1000);
            $newHouse->rooms = $faker->numberBetween(2, 30);
            $newHouse->bathrooms = $faker->numberBetween(1, 6);
            $newHouse->type = $faker->word();
            $newHouse->description = $faker->paragraphs(5, true);
            $newHouse->price = $faker->randomFloat(2, 200000, 5000000);
            $newHouse->is_available = $faker->numberBetween(0, 1);
            $newHouse->save();
        }
    }
}
