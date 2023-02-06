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
        //

        Schema::create('clients', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('phonenumber');
            $table->string('email');
            $table->string('address');
            
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
        //
    }
};
