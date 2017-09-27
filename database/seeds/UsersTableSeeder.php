<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder {

    public function run(){
        DB::table('users')->delete();

        $users = array(
            array(
                'name' => 'John',
                'password' => Hash::make('johnny'),
                'email' => 'example@example.com'
            )
        );

        DB::table('users')->insert($users);
    }
}
