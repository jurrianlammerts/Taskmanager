<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder {

    public function run(){
        DB::table('users')->delete();

        $users = array(
            array(
                'name' => 'Cees',
                'password' => Hash::make('cees'),
                'email' => 'example@example.com'
            )
        );

        DB::table('users')->insert($users);
    }
}
