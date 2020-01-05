<?php

use Illuminate\Database\Seeder;
use App\Todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo::create([
            'title' => 'タイトル１',
            'body'  => '内容１',
        ]);
        Todo::create([
            'title' => 'タイトル２',
            'body'  => '内容２',
        ]);
        Todo::create([
            'title' => 'タイトル３',
            'body'  => '内容３',
        ]);
    }
}
