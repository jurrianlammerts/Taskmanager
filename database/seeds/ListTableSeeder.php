<?php

use Illuminate\Database\Seeder;

class ListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lists')->delete();
        
        $lists = array(
            array(
                'id' => 1,
                'name' => 'List one',
            )
        );

        DB::table('lists')->insert($lists);
    }
}
