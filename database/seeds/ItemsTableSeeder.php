<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder {

    public function run(){
        DB::table('items')->delete();

        $items = array(
            array(
                'user_id' => 1,
                'list_id' => 1,
                'name' => 'Do your homework',
                'done' => false
            ),
            array(
                'user_id' => 1,
                'list_id' => 1,
                'name' => 'Walk the dogs',
                'done' => true
            ),
            array(
                'user_id' => 1,
                'list_id' => 1,
                'name' => 'Cook dinner',
                'done' => false
            ),
        );

        DB::table('items')->insert($items);
    }
}
