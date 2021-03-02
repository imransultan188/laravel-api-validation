<?php

namespace Database\Seeders;

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
         \App\Models\Post::factory(10)->create();
         \App\Models\User::factory(20)->create();
        //  \App\Models\Cameras::factory(5)->create();
        //  \App\Models\Dvr::factory(5)->create();
        //  \App\Models\Clas::factory(5)->create();
         \App\Models\student::factory(4)->create();
         \App\Models\employee::factory(3)->create();
         \App\Models\project::factory(4)->create();


    }
}
