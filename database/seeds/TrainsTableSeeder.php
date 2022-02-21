<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->word();
            $newTrain->department_station = $faker->word();
            $newTrain->arrive_station = $faker->word();
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrive_time = $faker->dateTime();
            $newTrain->train_code = $faker->regexify('[A-Z]{4}[0-9]{12}[A-Z]{4}');
            $newTrain->carriage = $faker->randomDigit();
            $newTrain->in_time = $faker->numberBetween(0, 1);
            $newTrain->cancelled = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
