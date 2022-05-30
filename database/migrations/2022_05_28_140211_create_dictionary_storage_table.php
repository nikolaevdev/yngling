<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDictionaryStorageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionary_storage', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable($value = 0);
            $table->unsignedBigInteger('dictionary_id')->nullable($value = 0);
            $table->unsignedBigInteger('uid')->nullable($value = 0);
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
        Schema::dropIfExists('dictionary_storage');
    }
}
