<?php

use App\Users; //added line 
namespace Database\Seeders;

use Illuminate\Database\Seeder;


//use Illuminate\Support\Facades\easywiz;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         $this->call(UsersTableSeeder::class);
         
         factory(Framework\User::class, 10)->create()->each(function ($user) {
            $user->profile()->create([
                'user_id' => $user->id
            ]);
        });
    }
}
