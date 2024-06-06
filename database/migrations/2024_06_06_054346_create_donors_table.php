<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->unsignedBigInteger('blood_group_id');
            $table->date('last_donation_date')->nullable();
            $table->integer('total_donation_count')->default(0);
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('blood_group_id')->references('id')->on('blood_groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
