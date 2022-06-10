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
        Schema::create('comments', function (Blueprint $table) {
            $table->id()->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->nullable()->onDelete('cascade');
            $table->unsignedBigInteger('article_id')->onDelete('cascade');
            $table->string('picture')->nullable();
            $table->text('name');
            $table->text('email');
            $table->text('content')->nullable();
            $table->text('time');
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
        Schema::dropIfExists('comments');
    }
};
