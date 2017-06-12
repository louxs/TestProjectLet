<?php

use App\Relation;
use Illuminate\Database\Seeder;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            $relation = new Relation();
            $relation->name = 'name' . $i;
            $relation->email = 'relation'.$i.'@hotmail.com';
            $relation->password = Hash::make('123456');
            $relation->password_2 = Hash::make('123456');
            $relation->currency = 1;
            $relation->save();
        }
    }
}
