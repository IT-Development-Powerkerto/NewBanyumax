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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id')->nullable();
            $table->string('name');
            $table->string('nickname')->nullable();
            $table->foreignId('role_id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(1);
            $table->integer('point')->nullable();
            $table->foreignId('package_id')->nullable();
            $table->boolean('exp')->default(0);
            $table->rememberToken()->nullable();
            $table->timestamps();
            $table->date('expired_at')->nullable();
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
        Schema::dropIfExists('users');
    }
};
