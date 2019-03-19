<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TermsTableSeeder::class);
        $this->call(DocsTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(ModuleTableSeeder::class);
    }
}
