<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('celebrities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('short_description')->nullable();
            $table->string('occupation')->nullable();
            $table->string('known_for')->nullable();
            $table->string('booking_fee')->nullable();
            $table->string('born')->nullable();
            $table->string('years_active')->nullable();
            $table->string('image')->nullable();
            $table->string('birthday_fee')->nullable();
            $table->string('acceptance_fee')->nullable();
            $table->string('music_fee')->nullable();
            $table->string('endorsement')->nullable();
            $table->string('wedding_fee')->nullable();
            $table->string('virtual_event')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('celebrities');
    }
};
