<?php

use Illuminate\Database\Seeder;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student')->insert([
            ['name' => '小青', 'age' => 19],
            ['name' => '小蓝', 'age' => 37],
        ]);
    }
}
