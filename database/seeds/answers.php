<?php

use App\Answer;
use Illuminate\Database\Seeder;

class answers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        $data = [];
        
        for($i = 1; $i <= 100 ; $i++) {
            array_push($data, [
                'user_id'     => $faker->numberBetween(1, 10),
                'question_id' => $faker->numberBetween(1, 20),
                'body'        => $faker->realText(),
            ]);
        }
        
        Answer::insert($data);
    }
}
