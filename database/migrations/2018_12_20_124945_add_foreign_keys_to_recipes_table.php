<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRecipesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('recipes', function(Blueprint $table)
		{
			$table->foreign('category', 'fk_recipes_categories1')->references('idCategory')->on('categories')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('account_bank', 'fk_recipes_cont_banks1')->references('idContBank')->on('cont_banks')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('sub_category', 'fk_recipes_sub_categories1')->references('idSubcategory')->on('sub_categories')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user', 'fk_recipes_users1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('recipes', function(Blueprint $table)
		{
			$table->dropForeign('fk_recipes_categories1');
			$table->dropForeign('fk_recipes_cont_banks1');
			$table->dropForeign('fk_recipes_sub_categories1');
			$table->dropForeign('fk_recipes_users1');
		});
	}

}
