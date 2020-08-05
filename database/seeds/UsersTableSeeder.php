<?php

use Illuminate\Database\Seeder;
use App\User;
// ------------------------------
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'name'=> 'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin123456')
        ]);
        $user->attachRole('super_admin');
    }//end run 
}
