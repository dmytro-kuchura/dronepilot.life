<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 150; $i++) {
            $faker = Faker\Factory::create();

            DB::table('comments')->insert([
                'record_id' => rand(1, 6),
                'reply_comment_id' => 0,
                'name' => $faker->name,
                'email' => $faker->email,
                'message' => $faker->text(150),
                'ip' => $faker->ipv4,
                'user_agent' => $faker->userAgent,
                'status' => rand(0, 1),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
