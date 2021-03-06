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
            $table->integer('admin_id');
            $table->foreignId('user_id');
            $table->string('campaign_name');
            $table->foreignId('product_id');
            $table->string('facebook_pixel');
            $table->string('tiktok_pixel');
            $table->foreignId('facebook_event_id');
            $table->foreignId('tiktok_event_id');
            $table->foreignId('facebook_wa_id');
            $table->string('customer_cs');
            $table->string('cs_customer');
            $table->string('thanks_page')->nullable();
            $table->boolean('rotation_type')->default(false);
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
        Schema::dropIfExists('campaigns');
    }
};
