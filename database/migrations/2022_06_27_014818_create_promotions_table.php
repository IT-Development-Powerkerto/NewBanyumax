<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id');
            $table->foreignId('user_id');
            $table->string('promotion_name');
            $table->foreignId('product_id');
            $table->integer('promotion_product_price')->nullable();
            $table->integer('promotion_product_percent')->nullable();
            $table->integer('total_promotion');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
};
