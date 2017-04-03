<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin Fabricate";
        $user->email = "admin@fabricate.studio";
        $user->password = bcrypt("admin1234");
        $user->save();
    }
}
