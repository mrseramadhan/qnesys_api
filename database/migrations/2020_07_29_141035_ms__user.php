<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ms_User', function (Blueprint $table) {
          $table->integerIncrements('id_user');
          $table->string('name',100);
          $table->string('username',50)->unique();
          $table->string('password',100);
          $table->timestamps();
        });

        Schema::table('Sy_Token', function($table) {
            $table->foreign('id_user')->references('id_user')->on('ms_user')->onUpdate('cascade')->onDelete('set null');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Ms_User');
    }
}
