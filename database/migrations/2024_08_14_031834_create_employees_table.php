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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->enum('gender', ['Male', 'Female'])->default('Male');
            $table->date('dob');
            $table->string('pob');
            $table->string('address');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('position');
            $table->integer('salary')->default(0);
            $table->unum('status', ['0', '1'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
