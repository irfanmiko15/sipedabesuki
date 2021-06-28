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
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'adminbestro@gmail.com',
            'role'=>'admin',
            
            'password' => Hash::make('asoey8790'),
          
        ]);
    }
}
