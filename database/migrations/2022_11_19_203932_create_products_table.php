<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\pricePlane;
use App\Models\Saller;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
     
            $table->string('item_name');
            $table->string('manufactory');
            $table->integer('count');
            $table->foreignIdFor(pricePlane::class);
            $table->foreignIdFor(Saller::class);
            $table->timestamp('note')->nullable();
            $table->timestamp('production_date')->nullable();
            $table->timestamp('Validity_expiration_date')->nullable();
            $table->softDeletes();
            $table->comment('products in the  stock');
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
        Schema::dropIfExists('products');
    }
};