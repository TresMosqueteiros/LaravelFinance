<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecipesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipes', function(Blueprint $table)
		{
			$table->integer('idRecipe', true);
			$table->integer('user')->index('fk_recipes_users1_idx');
			$table->integer('account_bank')->nullable()->index('fk_recipes_cont_banks1_idx');
			$table->integer('category')->index('fk_recipes_categories1_idx');
			$table->integer('sub_category')->nullable()->index('fk_recipes_sub_categories1_idx');
			$table->string('title', 45);
			$table->date('date');
			$table->float('value', 15);
			$table->float('balance_before', 15)->nullable();
			$table->float('balance_after', 15)->nullable();
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
		Schema::drop('recipes');
	}

}
