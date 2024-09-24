<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{

    public function up()
    {
        Schema::create('ManageOrders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('orderStatus');
            $table->integer('orderTotal');
            $table->string('sizeID');
            $table->decimal('totalPrice', 10, 2);
            $table->datetime('dateOrder');
            $table->datetime('dateReceived');
            $table->string('appointment');
            $table->string('UploadFile');
            $table->timestamps();
        });
    }
};
