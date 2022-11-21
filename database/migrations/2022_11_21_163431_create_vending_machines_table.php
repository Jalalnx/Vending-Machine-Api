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
        Schema::create('vending_machines', function (Blueprint $table) {
            $table->id();
            $table->string('owner');
            $table->string('capactiy');
            $table->string('model');
            $table->string('manufactory');
            $table->geometry('positions');
            $table->boolean('Maintenance')->default(false);
            $table->boolean('active')->default(true);
            $table->integer('total_money_Collected');
            $table->integer('cerrent_money_Collected');
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
        Schema::dropIfExists('vending_machines');
    }
};