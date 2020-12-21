<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromoLedclubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('philips2021', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cust_code');
            $table->string('cust_name');
            $table->string('cust_site');
            $table->string('promo_name');
            $table->string('promo_period');
            $table->string('sales_name');
            $table->integer('nilai_benefit');
            $table->integer('nilai_realisasi');
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
        Schema::dropIfExists('promo_ledclub');
    }
}
