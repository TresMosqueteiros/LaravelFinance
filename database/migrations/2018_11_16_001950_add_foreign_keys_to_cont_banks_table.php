<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToContBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cont_banks', function (Blueprint $table)
        {
            $table->foreign('user', 'fk_ContBank_User1')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cont_banks', function (Blueprint $table)
        {
            $table->dropForeign('fk_ContBank_User1');
        });
    }
}
