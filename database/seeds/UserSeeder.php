<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            $user = new User();
            $user->name = 'name' . $i;
            $user->email = 'user'.$i.'@hotmail.com';
            $user->password = Hash::make('123456');
            $user->save();
        }
    }
}
