<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                'name' => Role::ROLE_ADMIN,
                'description' => 'For admins',
            ],
            [
                'name' => Role::ROLE_TEACHER,
                'description' => 'For teachers',
            ],
            [
                'name' => Role::ROLE_STUDENT,
                'description' => 'For students',
            ],
        ]);
    }
}
