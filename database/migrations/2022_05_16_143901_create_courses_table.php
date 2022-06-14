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
        Schema::create('courses', function (Blueprint $table) {
            $table->id()->onDelete('cascade');
            $table->string('title');
            $table->string('description');
            $table->string('picture');
            $table->string('picture_2');
            $table->string('picture_3');
            $table->string('picture_4');
            $table->string('date');
            $table->string('duration');
            $table->float('price');
            $table->string('study_level');
            $table->string('discipline');
            $table->boolean('is_popular')->default(false)->nullable();
            $table->boolean('is_published')->default(true)->nullable();
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('courses');
    }
};
