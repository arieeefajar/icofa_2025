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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->date('session_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->time('start_discussion_time')->nullable();
            $table->time('end_discussion_time')->nullable();

            $table->unsignedBigInteger('panel_id');
            $table->foreign('panel_id')->references('id')->on('panels')->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
