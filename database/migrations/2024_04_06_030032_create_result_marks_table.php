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
        Schema::create('result_marks', function (Blueprint $table) {
            $table->id();
            $table->string('subject_name')->nullable();
            $table->double('out_of_marks')->nullable();
            $table->double('obtain_marks')->nullable();
            $table->foreignId('result_id')->nullable()->constrained('results')->onDelete('cascade');
            $table->integer('status')->default(0);
            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('deleted_by')->nullable()->constrained('users')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_marks');
    }
};
