<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('live_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->unique(['live_id', 'locale']);
            $table->foreign('live_id')->references('id')->on('lives')->onDelete('cascade');
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
        Schema::dropIfExists('live_translations');
    }
}
