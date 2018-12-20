<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupFinancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_finances', function(Blueprint $table)
		{
			$table->integer('idGroupFinance', true);
			$table->integer('administrator')->index('fk_group_finances_users1_idx');
			$table->string('title', 45)->nullable();
			$table->string('status', 10)->nullable();
			$table->integer('creator')->index('fk_group_finances_users2_idx');
			$table->integer('editor')->index('fk_group_finances_users3_idx');
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
		Schema::drop('group_finances');
	}

}
