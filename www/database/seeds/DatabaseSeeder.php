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
//        $this->call(RecordsTableSeeder::class);
//        $this->call(ProjectsTableSeeder::class);
//        $this->call(CommentsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }
}
