<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDictionaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionary', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250)->nullable($value = 0);
            $table->tinyInteger('status')->nullable($value = 0);
            $table->unsignedBigInteger('uid')->nullable($value = 0);
            $table->text('photo_url')->nullable();
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
        Schema::dropIfExists('dictionary');
    }
}
