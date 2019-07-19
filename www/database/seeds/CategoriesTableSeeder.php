<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $value) {
            DB::table("categories")->insert($value);
        }
    }

    protected function data()
    {
        return [
            [
                "name" => "Интересное",
                "alias" => "interesting",
                "title" => "Интересное",
                "keywords" => null,
                "description" => null,
                "status" => 1,
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ], [
                "name" => "Гайды",
                "alias" => "guide",
                "title" => "Интересное",
                "keywords" => null,
                "description" => null,
                "status" => 1,
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ], [
                "name" => "Мир дронов",
                "alias" => "drones-world",
                "title" => "Интересное",
                "keywords" => null,
                "description" => null,
                "status" => 1,
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ], [
                "name" => "Настройки",
                "alias" => "settings",
                "title" => "Настройки",
                "keywords" => null,
                "description" => null,
                "status" => 1,
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ], [
                "name" => "Остальное",
                "alias" => "other",
                "title" => "Остальное",
                "keywords" => null,
                "description" => null,
                "status" => 1,
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ], [
                "name" => "Тесты",
                "alias" => "tests",
                "title" => "Тесты",
                "keywords" => null,
                "description" => null,
                "status" => 1,
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
        ];
    }
}
