<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGroupUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('group_users', function(Blueprint $table)
		{
			$table->foreign('creator', 'fk_group_users_users1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('editor', 'fk_group_users_users2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('group_users', function(Blueprint $table)
		{
			$table->dropForeign('fk_group_users_users1');
			$table->dropForeign('fk_group_users_users2');
		});
	}

}
