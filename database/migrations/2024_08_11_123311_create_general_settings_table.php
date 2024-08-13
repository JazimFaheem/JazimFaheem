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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title')->nullable();
            $table->string('description')->nullable();
            $table->string('disclaimer')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_tags')->nullable();
            $table->binary('main_logo')->nullable();
            $table->binary('footer_logo')->nullable();
            $table->binary('favicon')->nullable();
            $table->binary('phone')->nullable();
            $table->binary('email')->nullable();
            $table->binary('whatsapp')->nullable();
            $table->binary('address')->nullable();
            $table->binary('facebook')->nullable();
            $table->binary('instagram')->nullable();
            $table->binary('twitter')->nullable();
            $table->binary('linkedin')->nullable();
            $table->binary('pinterest')->nullable();
            $table->binary('youtube')->nullable();
            $table->binary('about')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
};
