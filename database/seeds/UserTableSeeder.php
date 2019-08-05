<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	    $users = factory(User::class)->times(50)->make();
	    User::insert($users->makeVisible(['password','remeber_token'])->toArray());
	    
	    $user = User::find(1);
	    $user->name = 'Summer';
	    $user->email = 'summer@example.com';
	    $user->password = bcrypt('123456');
	    $user->save();
    }
}
