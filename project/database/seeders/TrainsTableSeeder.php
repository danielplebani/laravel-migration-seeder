<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 12; $i++) {
            $train = new Train();
            $train->company =  $faker->word();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeBetween('now', '+2 week');
            $train->arrival_time = $faker->dateTimeBetween('now', '+2 week');
            $train->train_code = $faker->bothify('???-###');
            $train->carriages = $faker->numberBetween(2, 30);
            $train->on_time = $faker->boolean();
            $train->deleted = $faker->boolean();
            $train->save();
        }
    }
}
