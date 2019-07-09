<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_root=Role::where('name','Admin')->first();

        $user=new User();
        $user->name='Shawn';
        $user->mobile_phone='13810500130';
        $user->save();
        $user->roles()->attach($role_root);
    }
}
