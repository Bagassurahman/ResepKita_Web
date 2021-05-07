<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'project_create',
            ],
            [
                'id'    => 18,
                'title' => 'project_edit',
            ],
            [
                'id'    => 19,
                'title' => 'project_show',
            ],
            [
                'id'    => 20,
                'title' => 'project_delete',
            ],
            [
                'id'    => 21,
                'title' => 'project_access',
            ],
            [
                'id'    => 22,
                'title' => 'folder_create',
            ],
            [
                'id'    => 23,
                'title' => 'folder_edit',
            ],
            [
                'id'    => 24,
                'title' => 'folder_show',
            ],
            [
                'id'    => 25,
                'title' => 'folder_delete',
            ],
            [
                'id'    => 26,
                'title' => 'folder_access',
            ],
            [
                'id'    => 27,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 28,
                'title' => 'resep_create',
            ],
            [
                'id'    => 29,
                'title' => 'resep_edit',
            ],
            [
                'id'    => 30,
                'title' => 'resep_show',
            ],
            [
                'id'    => 31,
                'title' => 'resep_delete',
            ],
            [
                'id'    => 32,
                'title' => 'resep_access',
            ],
            [
                'id'    => 33,
                'title' => 'kategori_create',
            ],
            [
                'id'    => 34,
                'title' => 'kategori_edit',
            ],
            [
                'id'    => 35,
                'title' => 'kategori_show',
            ],
            [
                'id'    => 36,
                'title' => 'kategori_delete',
            ],
            [
                'id'    => 37,
                'title' => 'kategori_access',
            ],
            [
                'id'    => 38,
                'title' => 'kategoridropdown_access',
            ],
            [
                'id'    => 39,
                'title' => 'gambarkategori_access',
            ],
            [
                'id'    => 40,
                'title' => 'contact_create',
            ],
            [
                'id'    => 41,
                'title' => 'contact_edit',
            ],
            [
                'id'    => 42,
                'title' => 'contact_show',
            ],
            [
                'id'    => 43,
                'title' => 'contact_delete',
            ],
            [
                'id'    => 44,
                'title' => 'contact_access',
            ],
            [
                'id'    => 45,
                'title' => 'resep_admin_access',
            ],
            [
                'id'    => 46,
                'title' => 'resep_user_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
