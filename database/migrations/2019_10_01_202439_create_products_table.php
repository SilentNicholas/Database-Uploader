<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('DTD');
            $table->integer('count_places');
            $table->integer('total_weight');
            $table->integer('total_count');
            $table->string('currency_code');
            $table->string('MEB_description');
            $table->string('ETD_code');
            $table->bigInteger('ETD_number');
            $table->dateTime('ETD_date');
            $table->string('sender');
            $table->string('sender_name');
            $table->string('sender_address');
            $table->string('recipient');
            $table->string('recipient_name');
            $table->string('recipient_address');
            $table->string('telephone');
            $table->dateTime('arrival_date');
            $table->integer('MEB_type');
            $table->integer('count');
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
}
