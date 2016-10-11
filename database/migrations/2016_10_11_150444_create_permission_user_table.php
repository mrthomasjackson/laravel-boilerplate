<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_user', function (Blueprint $table) {
            $table->unsignedInteger('permission_id');
            $table->unsignedInteger('user_id');
        });

        Schema::table('permission_user', function ($table) {
            $table->foreign('permission_id')
                ->references('id')->on('permissions')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('machine_mold', function ($table) {
            $table->dropForeign(['permission_id']);
            $table->dropForeign(['user_id']);

        });
        Schema::dropIfExists('permission_user');
    }
}
