<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 10 ; $i++){
            $newTrain= new Train();

            $newTrain->agency = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = 'AB' . $faker->randomDigit();
            $newTrain->number_of_carriages =  $faker->numberBetween(2, 12);
            $newTrain->in_time =  $faker->boolean();
            $newTrain->deleted =  $faker->boolean();
            $newTrain->save();
            

        }
    }
}
