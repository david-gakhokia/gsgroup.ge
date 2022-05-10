<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivacyPolicyTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privacy_policy_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('privacy_policy_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title');
            $table->string('name');
            $table->longText('description');
            $table->unique(['privacy_policy_id', 'locale']);
            $table->foreign('privacy_policy_id')->references('id')->on('privacy_policies')->onDelete('cascade');
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
        Schema::dropIfExists('privacy_policy_translations');
    }
}
