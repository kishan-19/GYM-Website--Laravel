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
        Schema::create('pk_subscribers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('F_Name')->require();
            $table->string('L_Name')->nullable();
            $table->text('Address_1')->require();
            $table->text('Address_2')->nullable();
            $table->string('City')->require();
            $table->string('Pin_Code',6)->require();
            $table->string('Price',10)->require();
            $table->string('Number',10)->require()->unique();
            $table->enum('Gender',['Male','Female','Other'])->nullable();
            $table->string('Email')->unique();
            $table->string('E_FName')->require();
            $table->string('E_LName')->nullable();
            $table->string('E_Number',10)->require();
            $table->enum('E_Relationship',['Spouse','Sibling','parent','Friend','Other'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pk_subscribers');
    }
};
