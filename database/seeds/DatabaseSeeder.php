<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(users::class);
        $this->call(categories::class);
        $this->call(questions::class);
        $this->call(answers::class);
    }
}
