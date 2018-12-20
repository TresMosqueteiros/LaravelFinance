<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->foreign('group_finance', 'fk_users_group_finances1')->references('idGroupFinance')->on('group_finances')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('group_user', 'fk_users_group_users1')->references('idGroupUser')->on('group_users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropForeign('fk_users_group_finances1');
			$table->dropForeign('fk_users_group_users1');
		});
	}

}
