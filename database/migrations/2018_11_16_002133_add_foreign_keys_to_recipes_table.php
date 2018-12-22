<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recipes', function (Blueprint $table) {
            $table->foreign('category', 'fk_Recipe_Category1')->references('idCategory')->on('categories')->onDelete('CASCADE');
            $table->foreign('accountBank', 'fk_Recipe_ContBank1')->references('idContBank')->on('contbanks')->onDelete('CASCADE');
            $table->foreign('subCategory', 'fk_Recipe_Subcategory1')->references('idSubcategories')->on('subcategories')->onDelete('CASCADE');
            $table->foreign('user', 'fk_Recipe_User1')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipes', function (Blueprint $table)
        {
            $table->dropForeign('fk_Recipe_Category1');
            $table->dropForeign('fk_Recipe_ContBank1');
            $table->dropForeign('fk_Recipe_Subcategory1');
            $table->dropForeign('fk_Recipe_User1');
        });
    }
}
