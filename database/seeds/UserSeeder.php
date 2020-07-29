<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@local.com',
            'password' => password_hash('admin', PASSWORD_DEFAULT)
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@local.com',
            'password' => password_hash('user', PASSWORD_DEFAULT)
        ]);
        User::create([
            'name' => 'test',
            'email' => 'test@local.com',
            'password' => password_hash('test', PASSWORD_DEFAULT)
        ]);

    }
}
