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
        Schema::create('multiplechoices_answers', function (Blueprint $table) {
            $table->id();
            $table->integer('multiplechoices_id');
            $table->string('answer');
            $table->string('images');
            $table->integer('survey_id');
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
        Schema::dropIfExists('multiplechoices_answers');
    }
};
