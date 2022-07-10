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
        Schema::create('educations', function (Blueprint $table) {
            $table->id('id_educations');
            $table->string('institution');
            $table->string('degree');
            $table->string('study');
            $table->string('month_start');
            $table->integer('years_start');
            $table->string('month_end')->nullable();
            $table->integer('years_end')->nullable();
            $table->string('status');
            $table->string('info')->nullable();
            $table->string('id_users');
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
        Schema::dropIfExists('edications');
    }
};
