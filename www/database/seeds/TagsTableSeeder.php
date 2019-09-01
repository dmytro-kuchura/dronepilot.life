<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $value) {
            DB::table('tags')->insert($value);
        }
    }

    protected function data()
    {
        return [
            [
                'name' => 'DJI',
                'alias' => 'dji',
                'title' => 'DJI',
                'keywords' => 'DJI',
                'description' => 'DJI',
                'status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'name' => 'DJI Mavic AIR',
                'alias' => 'dji_mavic_air',
                'title' => 'DJI Mavic AIR',
                'keywords' => 'DJI Mavic AIR',
                'description' => 'DJI Mavic AIR',
                'status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'name' => 'DJI Spark',
                'alias' => 'dji_spark',
                'title' => 'DJI Spark',
                'keywords' => 'DJI Spark',
                'description' => 'DJI Spark',
                'status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ];
    }
}
