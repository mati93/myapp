<?php

use Illuminate\Database\Seeder;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('password'),
            'type'=>'admin'
        ]);

        DB::table('users')->insert([
            'name'=>'Jan Kowalski',
            'email'=>'janek@gmail.com',
            'password'=>bcrypt('password'),
            'type'=>'mechanic'
        ]);

        DB::table('users')->insert([
            'name'=>'Andrzej Nowak',
            'email'=>'andrzejek@gmail.com',
            'password'=>bcrypt('password'),
            'type'=>'mechanic'
        ]);

        DB::table('users')->insert([
            'name'=>'Adam Wolf',
            'email'=>'wolf@gmail.com',
            'password'=>bcrypt('password'),
            'type'=>'client'
        ]);

        DB::table('users')->insert([
            'name'=>'Janusz Lewandowski',
            'email'=>'lewy@gmail.com',
            'password'=>bcrypt('password'),
            'type'=>'client'
        ]);

    }
}
