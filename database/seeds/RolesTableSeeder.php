<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'Admin';
        $role->slug = 'admin';
        $role->description = 'Admin';
        $role->special = 'all-access';
        $role->save();

        $role = new Role();
        $role->name = 'Suspendido';
        $role->slug = 'suspendido';
        $role->description = 'Suspendido';
        $role->special = 'no-access';
        $role->save();
    }
}
