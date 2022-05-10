<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExclusiveTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exclusive_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('exclusive_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->unique(['exclusive_id', 'locale']);
            $table->foreign('exclusive_id')->references('id')->on('exclusives')->onDelete('cascade');
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
        Schema::dropIfExists('exclusive_translations');
    }
}
