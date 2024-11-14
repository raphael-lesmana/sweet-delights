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
        Schema::create('transaction_headers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string("destination_address");
            $table->string('city');
            $table->string('province');
            $table->string('zip_code');
            $table->enum("status", ["pending", "processing", "delivery", "received"]);
            $table->timestamp("order_date");
            $table->timestamp("received_date")->nullable();
            $table->string("notes")->nullable();
            $table->string("receipt")->nullable();
            $table->bigInteger("total_price")->unsigned();
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
        Schema::dropIfExists('transaction_headers');
    }
};
