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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title_span_clients')->nullable();
            $table->string('title_span_projects')->nullable();
            $table->string('title_span_years')->nullable();
            $table->string('title_span_awards')->nullable();
            $table->string('video_background')->nullable();
            $table->string('desc_title')->nullable();
            $table->string('paragraph')->nullable();
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
        Schema::dropIfExists('abouts');
    }
};
