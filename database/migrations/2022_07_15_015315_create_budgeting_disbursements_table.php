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
        Schema::create('budgeting_disbursements', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id');
            $table->foreignId('user_id');
            $table->foreignId('role_id');
            $table->integer('nominal');
            $table->string('no_rek');
            $table->integer('target_omzet');
            $table->boolean('status')->default('2');
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budgeting_disbursements');
    }
};
