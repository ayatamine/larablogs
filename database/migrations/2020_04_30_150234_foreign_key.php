<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
           $table->foreign('user_id')
           ->references('id')
           ->on('users')
           ->onUpdate('cascade')
           ->onDelete('cascade');
        });
        Schema::table('posts', function (Blueprint $table) {
           $table->foreign('category_id')
           ->references('id')
           ->on('categories')
           ->onUpdate('cascade')
           ->onDelete('cascade');
        });
        Schema::table('comments', function (Blueprint $table) {
           $table->foreign('user_id')
           ->references('id')
           ->on('users')
           ->onUpdate('cascade')
           ->onDelete('cascade');
        });
        Schema::table('comments', function (Blueprint $table) {
           $table->foreign('post_id')
           ->references('id')
           ->on('posts')
           ->onUpdate('cascade')
           ->onDelete('cascade');
        });
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
