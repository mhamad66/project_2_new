<?php
// ---------------------------------
use Illuminate\Database\Seeder;
use App\Role;
// ----------------------------------
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // ------------superAdmin----------------
        $super_admin = App\Role::create([
            'name'=>'super_admin',
            'display_name'=>'super admin',
            'description'=>'can do anything in the project'
        ]);

        // --------------teache------------------
        $teacher = App\Role::create([
            'name'=>'teacher',
            'display_name'=>'teacher',
            'description'=>'can create quiz and homework receiver '
        ]);
        // --------------student-----------------
        $student = App\Role::create([
            'name'=>'student',
            'display_name'=>'student',
            'description'=>'can send homework'
        ]);
    } // end Run 


} //end RolesTablesSeeder
