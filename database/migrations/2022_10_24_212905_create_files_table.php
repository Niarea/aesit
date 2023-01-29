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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('type_fichier');
            $table->string('matiere');
            $table->string('path');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('id_fac');
            $table->unsignedBigInteger('id_niveau');
            $table->unsignedBigInteger('id_user'); 
            $table->foreign('id_fac')->references('id')->on('facultes')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('id_niveau')->references('id')->on('niveau')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');           
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
        Schema::dropIfExists('files');
    }
};
