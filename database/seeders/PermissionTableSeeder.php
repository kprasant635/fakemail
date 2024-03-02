<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-module',
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',

           'product-module',
           'product-list',
           'product-create',
           'product-edit',
           'product-delete',

           'user-module',
           'user-list',
           'user-create',
           'user-edit',
           'user-delete'
        ];
   
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
