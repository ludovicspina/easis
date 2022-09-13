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
        Schema::create('hdvs', function (Blueprint $table) {
            $table->id();
            $table->string("objet");
            $table->string("joueur");
            $table->string("prix");
            $table->boolean("typeRequete");
            $table->string("quantite");
            $table->string("region");
            $table->string("serveur");
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
        Schema::dropIfExists('hdvs');
    }
};
