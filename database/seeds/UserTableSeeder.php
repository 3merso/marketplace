<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 40)->create()->each(function ($user) {
//            save para objetos e create para arrays
            $user->store()->save(factory(\App\Store::class)->make());
        });
    }
}
