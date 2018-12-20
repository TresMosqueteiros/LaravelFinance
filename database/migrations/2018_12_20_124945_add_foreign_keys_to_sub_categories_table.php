<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSubCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sub_categories', function(Blueprint $table)
		{
			$table->foreign('category', 'fk_sub_categories_categories1')->references('idCategory')->on('categories')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sub_categories', function(Blueprint $table)
		{
			$table->dropForeign('fk_sub_categories_categories1');
		});
	}

}
