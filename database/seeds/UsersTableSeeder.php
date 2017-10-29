<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder {

    public function run(){
        DB::table('users')->delete();

        $users = array(
            array(
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'email' => 'example@example.com',
                'first_name' => 'Cees',
                'last_name' => 'van Dyk',
                'is_admin' => 1,
            )
        );

        DB::table('users')->insert($users);
    }
}
