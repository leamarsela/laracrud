<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_comment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isi');
            $table->integer('commentator_id');
            $table->unsignedBigInteger('answer_id')->unsigned();
            $table->timestamps();

            $table->foreign('answer_id')->references('id')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_comment');
    }
}
