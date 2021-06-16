<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recycles', function (Blueprint $table) {
            $table->id();
            $table->integer('day_id');
            $table->string('tipo_raccolta');
            $table->TIME('inizio_raccolta');
            $table->TIME('fine_raccolta');
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
        Schema::dropIfExists('recycles');
    }
}
