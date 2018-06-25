<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_comment', function (Blueprint $table) {
            $table->increments('comment_id');
            $table->integer('blog_id');
            $table->integer('usre_id');
            $table->text('comments');
            $table->tinyInteger('publication_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_comment');
    }
}
