<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_categories', function (Blueprint $table)
        {
            $table->foreign('category', 'fk_Subcategory_Category')->references('idCategory')->on('categories')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_categories', function (Blueprint $table)
        {
            $table->dropForeign('fk_Subcategory_Category');
        });
    }
}
