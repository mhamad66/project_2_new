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
            'name'=> 'mhamad',
            'email'=>'mhamadaboasale@gmail.com',
            'password'=>bcrypt('mhamad6868')
        ]);
        $user->attachRole('super_admin');
    }//end run 
}
