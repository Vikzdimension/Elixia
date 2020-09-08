<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery', function (Blueprint $table) {
            $table->id();
            $table->integer('delivery_no')->nullable(false)->unique();
            $table->integer('shipment_no')->nullable(true);
            $table->string('source_code')->nullable(false);
            $table->string('destination_code')->nullable(false);
            $table->string('vehicle_no');
            $table->string('transporter_code');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('Driver_name', 50);
            $table->smallInteger('phone_no');
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
        Schema::dropIfExists('delivery');
    }
}
