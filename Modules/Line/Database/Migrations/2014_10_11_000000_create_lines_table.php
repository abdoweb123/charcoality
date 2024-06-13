<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinesTable extends Migration
{
    public function up()
    {
        Schema::create('lines', function (Blueprint $table) {
            $table->id();

            $table->string('title_ar')->nullable();
            $table->string('title_en')->nullable();

            $table->text('desc_ar')->nullable();
            $table->text('desc_en')->nullable();

            $table->string('image')->nullable();

            $table->string('link')->nullable();

            $table->boolean('status')->nullable()->default(1);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lines');
    }
}
