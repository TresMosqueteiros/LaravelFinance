<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function(Blueprint $table)
		{
			$table->integer('idTransaction', true);
			$table->integer('accountBank_in')->index('fk_transactions_cont_banks1_idx');
			$table->integer('accountBank_out')->index('fk_transactions_cont_banks2_idx');
			$table->string('title', 45)->nullable();
			$table->string('type', 20)->nullable();
			$table->float('value', 10, 0);
			$table->date('date');
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
		Schema::drop('transactions');
	}

}
