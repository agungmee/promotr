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
        Schema::create('promo_ledclub', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cust_code');
            $table->string('cust_name');
            $table->string('promo_name');
            $table->string('promo_period');
            $table->integer('nilai_periode');
            $table->integer('nilai_potong');
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
