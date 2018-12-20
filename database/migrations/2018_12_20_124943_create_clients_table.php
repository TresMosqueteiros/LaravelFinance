<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
			$table->integer('idClient', true);
			$table->integer('user')->index('fk_Client_User1');
			$table->string('name', 45);
			$table->string('lastname', 70)->nullable();
			$table->binary('image', 65535)->nullable();
			$table->string('cpf', 14)->nullable()->unique('cpf_UNIQUE');
			$table->date('dt_nasc')->nullable();
			$table->string('email', 100)->unique('email_UNIQUE');
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
		Schema::drop('clients');
	}

}
