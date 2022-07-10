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
        Schema::create('comers_documents', function (Blueprint $table) {
            $table->id('id_comer_documents');
            $table->string('ktp');
            $table->string('kk');
            $table->string('akte');
            $table->string('photo');
            $table->integer('comers_id');
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
        Schema::dropIfExists('comers_documents');
    }
};
