<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->bigIncrements('id',true);
            $table->string('titre');
            $table->unsignedBigInteger('type_id');
            $table->string('contenu_lien')->nullable();
            $table->text('contenu_fichier')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('mot_cle');
            $table->timestamps();


             $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');

             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
