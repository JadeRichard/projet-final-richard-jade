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
        Schema::create('panels', function (Blueprint $table) {
            $table->id()->onDelete('cascade');
            $table->text('request')->nullable();
            $table->text('name')->nullable();
            $table->text('email')->nullable();
            $table->text('teacher')->nullable();
            $table->text('course')->nullable();
            $table->text('date')->nullable();;
            $table->text('time')->nullable();;
            $table->boolean('is_validated')->default(false);
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
        Schema::dropIfExists('panels');
    }
};
