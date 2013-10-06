<?php

use Illuminate\Database\Migrations\Migration;

class AddAuthors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	  DB::table('authors')->insert(array(
	     'name'=>'Andrew Perkins',
	     'bio'=>'Andrew Perkins is a really great author!',
	     'created_at'=>date('Y-m-d H:m:s'),
	     'updated_at'=>date('Y-m-d H:m:s')					     
	  ));

	  DB::table('authors')->insert(array(
	     'name'=>'Mary Lancaster',
	     'bio'=>'Mary Lancaster is a really great author as well.',
	     'created_at'=>date('Y-m-d H:m:s'),
	     'updated_at'=>date('Y-m-d H:m:s')					     
	  ));

	  DB::table('authors')->insert(array(
	     'name'=>'Kenny Yuen',
	     'bio'=>'Kenny Yuen is a really great author as well.',
	     'created_at'=>date('Y-m-d H:m:s'),
	     'updated_at'=>date('Y-m-d H:m:s')					     
	  ));

	  DB::table('authors')->insert(array(
	     'name'=>'Mary Wells',
	     'bio'=>'Mary Wells is a really great author as well.',
	     'created_at'=>date('Y-m-d H:m:s'),
	     'updated_at'=>date('Y-m-d H:m:s')					     
	  ));

	  DB::table('authors')->insert(array(
	     'name'=>'Jan Doe',
	     'bio'=>'Jan Doe is a really great author as well.',
	     'created_at'=>date('Y-m-d H:m:s'),
	     'updated_at'=>date('Y-m-d H:m:s')					     
	  ));

	  DB::table('authors')->insert(array(
	     'name'=>'Bill Bo',
	     'bio'=>'Bill Bo is a really great author as well.',
	     'created_at'=>date('Y-m-d H:m:s'),
	     'updated_at'=>date('Y-m-d H:m:s')					     
	  ));

	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	  DB::table('authors')->delete(1);
	  DB::table('authors')->delete(2);
	  DB::table('authors')->delete(3);
	  DB::table('authors')->delete(4);
	  DB::table('authors')->delete(5);
	  DB::table('authors')->delete(6);
	}

}
