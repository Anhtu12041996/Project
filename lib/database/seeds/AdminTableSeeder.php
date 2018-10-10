<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		[
    			'email'=>'admin@gmail.com',
    			'password'=>bcrypt('aloalo123'),
    			'level'=>1
    		],

    	];

        DB::table('db_admin')->insert($data);
    }
}
