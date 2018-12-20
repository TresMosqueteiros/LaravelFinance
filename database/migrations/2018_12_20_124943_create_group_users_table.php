<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_users', function(Blueprint $table)
		{
			$table->integer('idGroupUser', true);
			$table->string('status', 10)->nullable();
			$table->string('title', 45)->nullable();
			$table->integer('creator')->index('fk_group_users_users1_idx');
			$table->integer('editor')->index('fk_group_users_users2_idx');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('group_users');
	}

}
