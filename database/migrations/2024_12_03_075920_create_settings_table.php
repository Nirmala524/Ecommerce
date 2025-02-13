<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->bigInteger('contact');
            $table->longText('desc');
            $table->Text('work');
            $table->string('facebook');
            $table->string('youtube');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('darkimage');
            $table->string('lightimage');
            $table->Text('map');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
