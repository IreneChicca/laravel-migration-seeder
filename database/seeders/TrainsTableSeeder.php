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
        $train = new Train();
    
    
            
            $train->corporate = $faker->word();
            $train->start_station= $faker->city();
            $train->end_station= $faker->city();
            $train->start_time = $faker->time();
            $train->end_time = $faker->time();
            $train->start_date = $faker->date();
            $train->end_date = $faker->date();
            $train->train_code= $faker->ean8();
            $train->n_wagon = $faker->numberBetween(1,8);
            $train->delay = $faker->numberBetween(0,1);
            $train->deleted = $faker->numberBetween(0,1);
                
            $train->save();
    
    }
}