<?php

namespace Database\Seeders;
use App\Models\ToDoList;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* User::factory(5)
        ->create()
        ->each(function($user){
            ToDoList::factory(10)
            ->create(['user_id'=> $user->id]);
        }); */
    }
}
