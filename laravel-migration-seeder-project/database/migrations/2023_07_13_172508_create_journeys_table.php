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
        Schema::create('journeys', function (Blueprint $table) {
            $table->id(); // qusto è di default se si crea correttamente la migration

            $table->string("company")->unique(); //azienda
            $table->string("station_departure");//stazione di partenza
            $table->string("station_arrival");//stazione di arrivo
            $table->time("time_departure");//orario di partenza
            $table->time("time_arrival");//orario di arrivo
            $table->string("train_code")->unique();//codice treno
            $table->integer("carriages");//numero carrozze
            $table->boolean("on_time")->default(true);//in orario
            $table->boolean("canceled")->default(false);//cancellato

            $table->timestamps(); // qusto è di default se si crea correttamente la migration
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journeys');
    }
};