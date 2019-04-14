<?php

use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("todos")->insert([
            "name" => "梅田",
            "content" => "友達と梅田に行く"
        ]);
        DB::table("todos")->insert([
            "name" => "心斎橋",
            "content" => "心斎橋に学校に行く"
        ]);
    }
}
