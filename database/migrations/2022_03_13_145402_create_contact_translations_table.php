<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('contact_id')->unsigned();
            $table->string('locale')->index();
            $table->string('phone')->nullable();
            $table->longText('address')->nullable();
            $table->longText('maps')->nullable();
            $table->unique(['contact_id', 'locale']);
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
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
        Schema::dropIfExists('contact_translations');
    }
}
