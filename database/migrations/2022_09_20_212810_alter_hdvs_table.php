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
            $table->integer('patk')->nullable();
            $table->integer('pdef')->nullable();
            $table->integer('ppv')->nullable();
            $table->integer('pmp')->nullable();
            $table->integer('ppf')->nullable();
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
