<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Email');
            $table->string('phoneNumber');
            $table->string('Image');
            $table->string('Address');
            $table->string('Description');
            $table->string('Status');

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
        Schema::dropIfExists('requests');
    }
};
