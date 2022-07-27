<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;
use Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $supperadmin = User::where('email','concaveit@gmail.com')->first();
        if(is_null($supperadmin)){
            $user = new User();
            $user->name = 'concaveit';
            $user->email = 'concaveit@gmail.com';
            $user->password = Hash::make('password');
            $user->phone = '01711158729';
            $user->assignRole('superadmin');
            $user->save();
        }
			
		
    }
}
