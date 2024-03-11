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
        Schema::create('staff_details', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('preferred_name')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->date('date_of_birth')->nullable();
            $table->string('acc_management_fee')->nullable();
            $table->json('company_details')->nullable();
            $table->json('billing_details')->nullable();
            $table->json('address')->nullable();
            $table->json('profile_img')->nullable();
            $table->foreignId('payment_id')->constrained();
            $table->foreignId('membership_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('staff_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('staff_details');
    }
};
