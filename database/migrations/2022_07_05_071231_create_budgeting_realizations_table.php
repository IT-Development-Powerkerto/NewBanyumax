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
        Schema::create('budgeting_realizations', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id');
            $table->foreignId('user_id');
            $table->foreignId('role_id');
            $table->foreignId('campaign_id');
            $table->string('user_name');
            $table->string('item');
            $table->integer('nominal');
            $table->integer('funds');
            $table->string('description');
            // $table->string('image')->nullable();
            $table->string('attachment')->nullable();
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
        Schema::dropIfExists('budgeting_realizations');
    }
};
