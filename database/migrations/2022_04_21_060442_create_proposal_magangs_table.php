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
        Schema::create('proposal_magang', function (Blueprint $table) {
            $table->id('id_proposal_magang');
            $table->string('resume');
            $table->string('certificate');
            $table->string('status');
            $table->text('description');
            $table->integer('id_magang');
            $table->integer('id_users');
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
        Schema::dropIfExists('proposal_magangs');
    }
};
