<?php

use App\User;
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
        User::truncate();

        User::create([
            'name' => 'John Doe',
            'password' => bcrypt('123456'),
            'email' => 'johndoe@mail.com'
        ]);

        User::create([
            'name' => 'Jane Doe',
            'password' => bcrypt('123456'),
            'email' => 'janedoe@email.com'
        ]);
    }
}
