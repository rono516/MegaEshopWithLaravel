<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'mega admin';
        $user->email = 'megaemail@gmail.com';
        $user->password = bcrypt('1234567890');
        $user->role_as = 1;
        $user->save();
    }
}
