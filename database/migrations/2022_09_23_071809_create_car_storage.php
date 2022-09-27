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
        Schema::create('car_storage', function (Blueprint $table) {
            $table->id();
            $table->string("merk");
            $table->string("handelsbenaming");
            $table->dateTime("apk_verloop_datum");
            $table->integer("vermogen_in_pk");
            $table->integer("vermogen_in_kw");
            $table->boolean("auto_rook");
            $table->string("kenteken");
            $table->text('beschrijving')->nullable();
            $table->float('prijs');
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
        Schema::dropIfExists('car_storage');
    }
};
