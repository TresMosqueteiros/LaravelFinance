<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExpensesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('expenses', function(Blueprint $table)
		{
			$table->foreign('card', 'fk_Expense_Card1')->references('idCard')->on('cards')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('category', 'fk_Expense_Category1')->references('idCategory')->on('categories')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('account_bank', 'fk_expenses_cont_banks1')->references('idContBank')->on('cont_banks')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('sub_category', 'fk_expenses_sub_categories1')->references('idSubcategory')->on('sub_categories')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user', 'fk_expenses_users1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('expenses', function(Blueprint $table)
		{
			$table->dropForeign('fk_Expense_Card1');
			$table->dropForeign('fk_Expense_Category1');
			$table->dropForeign('fk_expenses_cont_banks1');
			$table->dropForeign('fk_expenses_sub_categories1');
			$table->dropForeign('fk_expenses_users1');
		});
	}

}
