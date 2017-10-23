<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder {

    public function run(){
        DB::table('users')->delete();

        $users = array(
            array(
                'username' => 'Cees',
                'password' => Hash::make('cees'),
                'email' => 'example@example.com',
                'first_name' => 'Cees',
                'last_name' => 'van Dyk',
            )
        );

        DB::table('users')->insert($users);
    }
}
