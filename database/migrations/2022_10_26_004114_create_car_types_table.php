<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartypesTable extends Migration
{
    public function up()
    {
        Schema::create('car_types', function (Blueprint $table) {
            $table->id();
            $table->string('Manufacturer');
            $table->string('Typ');
            $table->string('color');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('car_types');
    }
}
