<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', Role::ROLE_ADMIN)->first();
        $role_teacher = Role::where('name', Role::ROLE_TEACHER)->first();
        $role_student = Role::where('name', Role::ROLE_STUDENT)->first();

        $admin = User::create([
            'name' => 'Adminjon Adminov',
            'email' => 'admin@example.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        ]);
        $admin->roles()->attach($role_admin);

        $teachers = factory(User::class, 50)->create();
        foreach ($teachers as $user)
        {
            $user->roles()->attach($role_teacher);
        }

        $students = factory(User::class, 100)->create();
        foreach ($students as $user)
        {
            $user->roles()->attach($role_student);
        }
    }
}
