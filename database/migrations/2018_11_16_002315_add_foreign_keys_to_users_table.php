<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('GroupFinance', 'fk_User_GroupFinance1')->references('idGroupFinance')->on('groupfinances')->onDelete('CASCADE');
            $table->foreign('GroupUser', 'fk_User_GroupUser1')->references('idGroupUser')->on('groupusers')->onDelete('CASCADE');
            $table->foreign('creator', 'fk_User_User1')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('editor', 'fk_User_User2')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('fk_User_GroupFinance1');
            $table->dropForeign('fk_User_GroupUser1');
            $table->dropForeign('fk_User_User1');
            $table->dropForeign('fk_User_User2');
        });
    }
}
