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
            $table->bigIncrements('id');
            $table->string('cust_code');
            $table->string('cust_name');
            $table->string('cust_site');
            $table->string('cust_address');
            $table->string('sales_code');
            $table->string('sales_name');
            $table->string('cust_category');
            $table->string('ktp_image')->nullable();
            $table->string('npwp_image')->nullable();
            $table->string('sppkp_image')->nullable();
            $table->string('toko_image')->nullable();
            $table->string('owner_image')->nullable();
            $table->string('last_update_by')->nullable();
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
