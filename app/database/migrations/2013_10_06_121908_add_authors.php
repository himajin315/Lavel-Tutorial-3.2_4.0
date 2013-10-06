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
	     'name'=>'Author Number 2',
	     'bio'=>'Author Number 2 is a really great author as well.',
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
	  DB::table('authors')->where('name','=','Andrew Perkins')->delete();
	  DB::table('authors')->where('name','=','Author Number 2')->delete();
	}

}