<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'あああ',
            'email' => 'test@email.com',
            'password' => Hash::make('11111111'),
            ],[
            'name' => 'いいい',
            'email' => 'test2@email.com',
            'password' => Hash::make('11111111'),
            ],[
            'name' => 'ううう',
            'email' => 'test3@email.com',
            'password' => Hash::make('11111111'),
            ]
        ]);
    }
}
