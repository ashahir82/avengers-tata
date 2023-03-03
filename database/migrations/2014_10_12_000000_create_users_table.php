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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('citizenship');
            $table->string('isCitizen');
            $table->string('nonCitizen');
            $table->string('userid');
            $table->string('emailid');
            $table->string('dob');
            $table->string('race');
            $table->string('gender');
            $table->string('passport');
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->string('postcode');
            $table->string('isCountry');
            $table->string('isState');
            $table->string('isCity');
            $table->string('nonCountry');
            $table->string('nonState');
            $table->string('nonCity');
            $table->string('security');
            $table->string('answer');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
