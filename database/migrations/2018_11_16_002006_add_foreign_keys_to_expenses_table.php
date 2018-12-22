<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expenses', function (Blueprint $table)
        {
            $table->foreign('card', 'fk_Expense_Card1')->references('idCard')->on('cards')->onDelete('cascade');
            $table->foreign('category', 'fk_Expense_Category1')->references('idCategory')->on('categories')->onDelete('cascade');
            $table->foreign('accountBank', 'fk_Expense_ContBank1')->references('idContBank')->on('contbanks')->onDelete('cascade');
            $table->foreign('subCategory', 'fk_Expense_Subcategory1')->references('idSubcategory')->on('subcategories')->onDelete('cascade');
            $table->foreign('user', 'fk_Expense_User1')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expenses', function (Blueprint $table)
        {
            $table->dropForeign('fk_Expense_Card1');
            $table->dropForeign('fk_Expense_Category1');
            $table->dropForeign('fk_Expense_ContBank1');
            $table->dropForeign('fk_Expense_Subcategory1');
            $table->dropForeign('fk_Expense_User1');
        });
    }
}
