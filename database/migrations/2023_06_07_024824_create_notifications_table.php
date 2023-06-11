<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('data');
            $table->time('read_at');
            $table->string('type');
            $table->foreignId('post_id')->constrained('posts', 'id')->cascadeOnDelete()->nullable();
            $table->foreignId('comment_id')->constrained('comments', 'id')->cascadeOnDelete()->nullable();
            $table->foreignId('follow_id')->constrained('follows', 'id')->cascadeOnDelete()->nullable();
            $table->foreignId('replay_id')->constrained('replays', 'id')->cascadeOnDelete()->nullable();
            $table->integer('user_sender')->unsigned();
            $table->foreign('user_sender')->references('id')->on('users')->cascadeOnDelete();
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
        Schema::dropIfExists('notifications');
    }
};
