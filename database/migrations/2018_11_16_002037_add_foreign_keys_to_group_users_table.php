<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToGroupUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('group_users', function (Blueprint $table) {
            $table->foreign('creator', 'fk_GroupUser_User1')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('editor', 'fk_GroupUser_User2')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('group_users', function (Blueprint $table) {
            //
            $table->dropForeign('fk_GroupUser_User1');
            $table->dropForeign('fk_GroupUser_User2');
        });
    }
}
