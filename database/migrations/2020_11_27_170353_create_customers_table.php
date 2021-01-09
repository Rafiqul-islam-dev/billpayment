<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customerId')->nullable();
            $table->string('name');
            $table->string('number');
            $table->string('address')->nullable();
            $table->string('connectiondate')->nullable();
            $table->string('connectiontype')->nullable();
            $table->string('nudNo')->nullable();
            $table->string('area')->nullable();
            $table->string('customerPass')->nullable();
            $table->string('billamount')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
