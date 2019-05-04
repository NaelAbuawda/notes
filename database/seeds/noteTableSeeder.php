<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class noteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('note')->insert(['title'=>'first', 'content'=>'this is the first note']);
        \Illuminate\Support\Facades\DB::table('note')->insert(['title'=>'second', 'content'=>'this is the second note']);
        \Illuminate\Support\Facades\DB::table('note')->insert(['title'=>'third', 'content'=>'this is the third note']);
    }
}
