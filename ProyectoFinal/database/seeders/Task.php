<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\environment;

class Task extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        environment::factory(10)->create();
    }
}
