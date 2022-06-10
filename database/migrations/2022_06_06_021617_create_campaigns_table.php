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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('campaign_name');
            $table->string('facebook_pixel');
            $table->string('tiktok_pixel');
            $table->foreignId('product_id');
            $table->foreignId('facebook_pixel_id');
            $table->foreignId('tiktok_pixel_id');
            $table->foreignId('whatsapp_pixel_id');
            $table->string('customer_cs');
            $table->string('cs_customer');
            $table->string('thanks_page')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('facebook_pixel_id')->references('id')->on('facebook_event_pixels');
            $table->foreign('tiktok_pixel_id')->references('id')->on('tiktok_event_pixels');
            $table->foreign('whatsapp_pixel_id')->references('id')->on('whatsapp_event_pixels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
};
