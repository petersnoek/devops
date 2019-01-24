<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Label::class, 50)->create();
    }
}
