<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('titulo', 150);
            $table->text('texto');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('post_id')->nullable();
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onUpdate('cascade');
            $table->foreign('post_id')->nullable()->references('id')->on('posts')->onUpdate('cascade') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
