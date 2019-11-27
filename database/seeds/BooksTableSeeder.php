<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => "Book 1",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus quos explicabo facilis cum exercitationem saepe?",
            'price' => 10,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('books')->insert([
            'title' => "Book 2",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus quos explicabo facilis cum exercitationem saepe?",
            'price' => 15,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('books')->insert([
            'title' => "Book 3",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus quos explicabo facilis cum exercitationem saepe?",
            'price' => 20,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
