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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id');
            $table->string('advertiser');
            $table->foreignId('operator_id')->nullable();
            $table->foreignId('campaign_id')->nullable();
            // $table->foreignId('client_id');
            $table->string('client_name')->nullable();
            $table->string('client_whatsapp')->nullable();
            $table->foreignId('product_id');
            $table->foreignId('user_id');
            $table->integer('quantity')->nullable();
            $table->integer('price');
            $table->integer('total_price')->nullable();
            $table->foreignId('status_id')->nullable();
            $table->date('created_at');
            $table->date('updated_at');
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
        Schema::dropIfExists('leads');
    }
};
