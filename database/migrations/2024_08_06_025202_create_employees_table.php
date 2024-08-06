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
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('national_id')->nullable();
            $table->enum('gender',['','male','female'])->default('');

            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('location_id')->nullable();
            $table->unsignedBigInteger('branch_id')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->unsignedBigInteger('section_id')->nullable();
            $table->unsignedBigInteger('position_id')->nullable();
            $table->unsignedBigInteger('nationality_id')->nullable();
            
            $table->date('birth_date')->nullable();
            $table->date('hiring_date')->nullable();
            $table->date('contract_date')->nullable();
            $table->date('expire_date')->nullable();
            
            $table->unsignedBigInteger('add_user_id')->nullable();

            $table->unsignedBigInteger('modify_user_id')->nullable();

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
