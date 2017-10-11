<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder {

    public function run(){
        DB::table('items')->delete();

        $items = array(
            array(
                'owner_id' => 3,
                'name' => 'Do your homework',
                'done' => false
            ),

            array(
                'owner_id' => 3,
                'name' => 'Walk the dogs',
                'done' => true
            ),
            array(
                'owner_id' => 3,
                'name' => 'Cook dinner',
                'done' => false
            ),
        );

        DB::table('items')->insert($items);
    }
}
