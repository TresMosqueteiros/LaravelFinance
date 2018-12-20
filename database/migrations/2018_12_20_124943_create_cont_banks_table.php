<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContBanksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cont_banks', function(Blueprint $table)
		{
			$table->integer('idContBank', true);
			$table->integer('user')->index('fk_ContBank_User1');
			$table->string('bank', 45)->nullable();
			$table->string('account', 10)->nullable();
			$table->string('agency', 10)->nullable();
			$table->string('type', 30);
			$table->string('title', 45)->nullable();
			$table->float('balance', 10, 0);
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
		Schema::drop('cont_banks');
	}

}
