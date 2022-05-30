<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDictionaryHasWordsFavouritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionary_has_words_favourites', function (Blueprint $table) {
            $table->unsignedBigInteger('dictionary');
            $table->unsignedBigInteger('word');
            $table->unsignedBigInteger('uid');

            $table->foreign('dictionary')
                ->references('id')
                ->on('dictionary')
                ->onDelete('cascade');

            $table->foreign('word')
                ->references('id')
                ->on('words')
                ->onDelete('cascade');

            $table->foreign('uid')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->primary(['dictionary', 'word', 'uid'], 'dictionary_has_words_id_dictionary_id_word_id_user');

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
        Schema::dropIfExists('dictionary_has_words_favourites');
    }
}
