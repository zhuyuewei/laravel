<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student')->insert([
            ['name' => '小白', 'age' => 20],
            ['name' => '小强', 'age' => 33],
        ]);
    }
}
