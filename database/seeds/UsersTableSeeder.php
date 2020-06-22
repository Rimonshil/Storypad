<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user =  User::where('email', 'rimonroy.cse@gmail.com')->first();

       if(!$user) {
           User::create([
               'name'=> 'Rimon Roy',
               'email'=> 'rimonroy.cse@gmail.com',
               'role'=> 'admin',
               'password'=> Hash::make('password'), //password
               'gender'=>'male',
               'dateofbirth'=>Carbon::create('2000', '01','02'),
               'phone'=> '01839455545'

           ]);
       }
    }
}
