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
        Schema::table('hdvs', function (Blueprint $table) {
            $table->integer('for')->nullable();
            $table->integer('end')->nullable();
            $table->integer('dex')->nullable();
            $table->integer('int')->nullable();
            $table->string('eveil')->nullable();
            $table->string('niveau')->nullable();
            $table->integer('eau')->nullable();
            $table->integer('feu')->nullable();
            $table->integer('terre')->nullable();
            $table->integer('foudre')->nullable();
            $table->integer('vent')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
