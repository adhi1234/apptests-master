<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('customer',function(Blueprint $table){

            $table->increments('reg-id');
            $table->integer('log-id');
            $table->string('name');
            $table->date('DoB');
            $table->char('gender');
            $table->string('house-no');
            $table->string('street');
            $table->string('locality');
            $table->string('city');
            $table->string('district');
            $table->string('state');
            $table->string('email-id');
            $table->string('nationality');
            $table->bigInteger('aadhaar');

          });
        //
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
}
