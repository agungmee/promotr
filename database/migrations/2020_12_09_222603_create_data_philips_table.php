<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPhilipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_philips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cust_site');
            $table->string('promo_by_year')->nullable();
            $table->string('cust_code');
            $table->string('cust_name');
            $table->string('promo_name');
            $table->string('promo_periode');
            $table->string('promo_paket');
            $table->string('p_led');
            $table->string('t_led');
            $table->string('p_dwlight');
            $table->string('t_dwlight');
            $table->string('p_wifi');
            $table->string('t_wifi');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('image5');
            $table->string('image6');
            $table->integer('nilai_benefit');
            $table->string('validation')->nullable();
            $table->string('last_updated_by');
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
        Schema::dropIfExists('data_ledclub2021');
    }
}
