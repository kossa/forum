<?php

use App\Category;
use Illuminate\Database\Seeder;

class categories extends Seeder
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
        
        for($i = 1; $i <= 10 ; $i++) {
            array_push($data, [
                'name' => $faker->word,
            ]);
        }
        
        Category::insert($data);
    }
}
