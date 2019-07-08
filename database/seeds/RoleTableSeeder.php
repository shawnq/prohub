<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role=new Role();
        $role->name = 'Admin/';
        $role->description = '根管理员';
        $role->save();
    }
}
