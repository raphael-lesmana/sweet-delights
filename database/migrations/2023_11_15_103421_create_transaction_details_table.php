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
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_header_id')->constrained();
            $table->integer('item_price')->unsigned();
            $table->integer('qty');
            $table->tinyInteger("top_layer")->unsigned();
            $table->tinyInteger("bottom_layer")->unsigned();
            $table->tinyInteger("petal_color")->unsigned();
            $table->tinyInteger("sugar_level")->unsigned();
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
        Schema::dropIfExists('transaction_details');
    }
};
