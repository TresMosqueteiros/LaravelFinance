<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('transactions', function(Blueprint $table)
		{
			$table->foreign('accountBank_in', 'fk_transactions_cont_banks1')->references('idContBank')->on('cont_banks')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('accountBank_out', 'fk_transactions_cont_banks2')->references('idContBank')->on('cont_banks')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('transactions', function(Blueprint $table)
		{
			$table->dropForeign('fk_transactions_cont_banks1');
			$table->dropForeign('fk_transactions_cont_banks2');
		});
	}

}
