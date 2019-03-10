<?php

use App\Doc;
use Illuminate\Database\Seeder;

class DocsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Doc::class, 100)->create();
    }
}
