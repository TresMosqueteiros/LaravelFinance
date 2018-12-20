<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cards', function(Blueprint $table)
		{
			$table->integer('idCard', true);
			$table->integer('user')->index('fk_Card_User1_idx');
			$table->string('type', 45);
			$table->float('limit', 10, 0)->nullable();
			$table->integer('date_invoice')->nullable();
			$table->date('valid')->nullable();
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
		Schema::drop('cards');
	}

}
