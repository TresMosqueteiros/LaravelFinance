<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 191);
			$table->string('email', 100)->unique();
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password', 191);
			$table->integer('group_finance')->nullable()->index('fk_users_group_finances1_idx');
			$table->integer('group_user')->nullable()->index('fk_users_group_users1_idx');
			$table->string('status', 10)->nullable();
			$table->integer('creator')->nullable();
			$table->integer('editor')->nullable();
			$table->date('last_activity')->nullable()->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->nullable()->change();
			$table->integer('acess')->nullable();
			$table->integer('lvl_acess')->default(1);
			$table->boolean('active')->default(1);
			$table->string('remember_token', 100)->nullable();
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
		Schema::drop('users');
	}

}
