<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04/03/15
 * Time: 02:44 PM
 */
use Illuminate\Database\Seeder;

class UserTableSeeder  extends Seeder {

     public function run() {

\DB::table('users')->insert(array(

    'name'=>'robert',
    'email'=>'deabreu.robert@gmail.com',
    'password'=>\Hash::make('123456')




));


     }







}