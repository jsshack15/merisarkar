<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectricityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('electricity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adhaar');
            $table->integer('unit');
             $table->string('month');
              $table->string('year');

            $table->integer('amount');
            $table->rememberToken();
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
         Schema::drop('electricity');
    }
}
