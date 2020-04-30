<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->first_name = "admin";
        $user->mobile = "9003743018";
        $user->email = "lovelyaravindh@gmail.com";
        $user->user_type = "super_admin";
        $user->password = bcrypt("1234");
        $user->save();
    }
}
