<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('posts', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->foreign('user_id')->references('users')->on('id');
            $table->char('name_user')->nullable();
            $table->string('publication', 5000)->nullable();
            $table->string('coment', 5000)->nullable();
            $table->timestamps();
            $table->rememberToken();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
