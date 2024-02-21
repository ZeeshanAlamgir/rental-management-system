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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            
            $table->string('company_name')->nullable();
            $table->string('website')->nullable();
            $table->string('abn')->nullable();
            $table->string('acn')->nullable();
            $table->enum('reg_gst', ['yes', 'no']);
            $table->longText('street_address_1')->nullable();
            $table->longText('street_address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('post_code')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->foreignId('user_id')->constrained();

            $table->softDeletes();
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
        Schema::dropIfExists('user_details');
    }
};
