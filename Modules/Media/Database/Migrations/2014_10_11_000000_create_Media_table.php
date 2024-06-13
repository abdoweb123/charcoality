<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();

            $table->string('title_ar')->nullable();
            $table->string('title_en')->nullable();
            
            $table->boolean('status')->nullable()->default(1);
            
            $table->timestamps();
        });
        Schema::create('gallery', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('media_id');
            $table->foreign('media_id')->on('media')->references('id')->onUpdate('cascade')->onDelete('cascade');

            $table->string('title_ar')->nullable();
            $table->string('title_en')->nullable();

            $table->text('desc_ar')->nullable();
            $table->text('desc_en')->nullable();

            $table->string('image')->nullable();

            $table->boolean('status')->nullable()->default(1);
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gallery');
        Schema::dropIfExists('media');
    }
}
