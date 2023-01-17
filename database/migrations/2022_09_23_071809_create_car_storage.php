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
        Schema::create('car_storages', function (Blueprint $table) {
            $table->id();
            $table->string("merk");
            $table->string("handelsbenaming");
            $table->dateTime("apk_verloop_datum")->nullable();
            $table->integer("vermogen_in_pk");
            $table->integer("vermogen_in_kw");
            $table->boolean("auto_rook")->nullable();
            $table->string("kenteken")->nullable();
            $table->integer('bouwjaar')->nullable();
            $table->integer('kilometerstand')->nullable();
            $table->text('beschrijving')->nullable();
            $table->float('prijs')->nullable();
            $table->text('img_link')->nullable();
            $table->text('pagina')->nullable();
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
