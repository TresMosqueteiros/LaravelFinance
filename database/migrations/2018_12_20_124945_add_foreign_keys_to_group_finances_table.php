<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGroupFinancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('group_finances', function(Blueprint $table)
		{
			$table->foreign('administrator', 'fk_group_finances_users1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('creator', 'fk_group_finances_users2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('editor', 'fk_group_finances_users3')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('group_finances', function(Blueprint $table)
		{
			$table->dropForeign('fk_group_finances_users1');
			$table->dropForeign('fk_group_finances_users2');
			$table->dropForeign('fk_group_finances_users3');
		});
	}

}
