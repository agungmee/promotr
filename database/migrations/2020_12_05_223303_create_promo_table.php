<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo_philips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cust_site');
            $table->string('promo_by_year');
            $table->string('cust_code');
            $table->string('cust_name');
            $table->string('promo_name');
            $table->string('promo_period');
            $table->string('sales_code');
            $table->string('sales_name');
            $table->integer('nilai_benefit');
            $table->integer('nilai_realisasi');
            $table->string('last_update_by');
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
