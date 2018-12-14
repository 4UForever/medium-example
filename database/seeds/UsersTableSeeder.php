<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $arrInsert[] = [
        	'name'							=> $faker->name,
        	'email'							=> 'admin@admin.com',
        	'email_verified_at'				=> null,
        	'password'						=> Hash::make('123456'),
        	'type'							=> User::ADMIN_TYPE
    	];

    	$arrInsert[] = [
        	'name'							=> $faker->name,
        	'email'							=> 'user@user.com',
        	'email_verified_at'				=> null,
        	'password'						=> Hash::make('123456'),
        	'type'							=> User::DEFAULT_TYPE
    	];

    	foreach($arrInsert as $arr){
    		User::create($arr);
    	}
    }
}
