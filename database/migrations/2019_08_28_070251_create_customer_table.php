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
        Schema::create('customer', function (Blueprint $table) {
       $table->increments('c_id');
       $table->string('c_name');
       $table->string('c_adress');
       $table->string('c_email');
       $table->string('c_pass');
       



       $table->timestamps();
   
        //
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
}
