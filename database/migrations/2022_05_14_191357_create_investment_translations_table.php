<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('investment_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->unique(['investment_id', 'locale']);
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
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
        Schema::dropIfExists('investment_translations');
    }
}
