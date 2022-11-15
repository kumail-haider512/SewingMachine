<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataParsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_parses', function (Blueprint $table) {
            $table->id();
            $table->string('order_ref');
            $table->string('rep');
            $table->string('customer');
            $table->string('main_category');
            $table->string('prod_code');
            $table->string('qty_needed');
            $table->string('status');
            $table->string('move_status');
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
        Schema::dropIfExists('data_parses');
    }
}
