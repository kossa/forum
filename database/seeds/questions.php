<?php

use App\Question;
use Illuminate\Database\Seeder;

class questions extends Seeder
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
        
        for($i = 1; $i <= 20 ; $i++) {
            array_push($data, [
                'user_id'     => $faker->numberBetween(1,10),
                'category_id' => $faker->numberBetween(1,10),
                'name'        => $faker->sentence(),
                'body'        => $faker->realText(),
            ]);
        }
        
        Question::insert($data);
    }
}
