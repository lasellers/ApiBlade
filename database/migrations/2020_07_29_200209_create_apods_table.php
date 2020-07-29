<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apods', function (Blueprint $table) {
            $table->id();
            $table->string('copyright', 255);
            $table->string('title', 255);
            $table->date('date');
            $table->text('explanation');
            $table->string('media_type', 64);
            $table->string('service_version', 64);
            $table->string('url', 255);
            $table->string('hd_url', 255);
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
        Schema::dropIfExists('apods');
    }
}
