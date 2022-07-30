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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->longText('token')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('about')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('youtube')->nullable();
            $table->integer('user_id');
            $table->string('Instagram')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Snapchat')->nullable();
            $table->string('Whatsapp')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('github')->nullable();
            $table->string('web1')->nullable();
            $table->string('web2')->nullable();
            $table->string('web3')->nullable();
            $table->string('web4')->nullable();
            $table->string('web5')->nullable();
            $table->string('web6')->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
