<?php

use App\Category;
use App\Question;
use App\User;
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

        $categories = Category::pluck('id')->toArray();
        $users = User::pluck('id')->toArray();
        
        for($i = 1; $i <= 20 ; $i++) {
            array_push($data, [
                'user_id'     => $faker->randomElement($users),
                'category_id' => $faker->randomElement($categories),
                'name'        => $faker->sentence(),
                'body'        => $faker->realText(),
            ]);
        }
        
        Question::insert($data);
    }
}
