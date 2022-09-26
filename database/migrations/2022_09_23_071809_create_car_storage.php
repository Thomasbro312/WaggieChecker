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
            $table->string("handelbenaming");
            $table->dateTime("apk_verloop_datum");
            $table->integer("vermogen_in_pk");
            $table->integer("vermogen_in_kw");
            $table->string("kenteken");
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
