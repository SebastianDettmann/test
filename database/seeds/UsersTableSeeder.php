<?php

use App\User;
use Illuminate\Database\Seeder;

/**
 * Class UserTableSeeder
 */
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::flushEventListeners();

        User::create([
            'email' => 'test@test.de',
            'password' => bcrypt('Qwertz123')
        ]);
    }
}
