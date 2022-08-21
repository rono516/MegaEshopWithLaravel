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


        // $table->id();
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->tinyInteger('role_as')->default('0');
        //     $table->rememberToken();
        //     $table->timestamps();
    }
}
