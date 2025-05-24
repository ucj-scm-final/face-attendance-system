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
        Schema::create('student_registrations', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('reg_no');     // Registration number
            $table->string('name');       // Student name
            $table->string('nic');        // NIC number
            $table->string('stu_image');  // Image file path or name
            $table->unsignedBigInteger('dep_id'); // Foreign key to departments table

            $table->timestamps();

            // Add foreign key constraint (assuming departments table exists)
            $table->foreign('dep_id')->references('id')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_registrations');
    }
};
