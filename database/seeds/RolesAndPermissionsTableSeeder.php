<?php

use Illuminate\Database\Seeder;
use App\User;

class RolesAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Defender::createRole('admin');
        $roleModerator = Defender::createRole('moderator');

        $listUserPermission   =  Defender::createPermission('user.list', 'List Users');
        $createUserPermission =  Defender::createPermission('user.create', 'Create Users');
        $updateUserPermission =  Defender::createPermission('user.update', 'Update Users');
        $deleteUserPermission =  Defender::createPermission('user.delete', 'Delete Users');

        $viewDashboardPermission = Defender::createPermission('dashboard.view', 'View Dashboard');

        $roleAdmin->attachPermission($viewDashboardPermission);

        $roleAdmin->attachPermission($listUserPermission);
        $roleAdmin->attachPermission($createUserPermission);
        $roleAdmin->attachPermission($updateUserPermission);
        $roleAdmin->attachPermission($deleteUserPermission);
        
        $roleModerator->attachPermission($listUserPermission);
        $roleModerator->attachPermission($updateUserPermission);
        
        $jozo = User::find(1);
        $mate = User::find(2);

        $jozo->attachRole($roleAdmin);
        $mate->attachRole($roleModerator);
    }
}
