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
         \App\Models\ToDoList::factory(10)->create();
        // Assuming to do list does not belongs to a user
        //$this->call(UserSeeder::class);
        
    }
}
