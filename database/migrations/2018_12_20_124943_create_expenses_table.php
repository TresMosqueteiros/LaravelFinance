<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExpensesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('expenses', function(Blueprint $table)
		{
			$table->integer('idExpense', true);
			$table->integer('user')->index('fk_expenses_users1_idx');
			$table->integer('category')->index('fk_Expense_Category1');
			$table->integer('sub_category')->nullable()->index('fk_expenses_sub_categories1_idx');
			$table->string('title', 45);
			$table->date('date');
			$table->float('value', 15);
			$table->float('balance_before', 15)->nullable();
			$table->float('balance_after', 15)->nullable();
			$table->string('method_pay', 45)->default('a vista');
			$table->integer('account_bank')->nullable()->index('fk_expenses_cont_banks1_idx');
			$table->integer('card')->nullable()->index('fk_Expense_Card1');
			$table->integer('portions_current')->nullable();
			$table->integer('portions_total')->nullable();
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
		Schema::drop('expenses');
	}

}
