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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');           // اسم الشركة
            $table->string('from');                   // من وين
            $table->string('to');                     // لوين
            $table->tinyInteger('rating');            // تقييم بعدد النجوم (1-5)
            $table->integer('total_seats');           // عدد الكراسي الكامل
            $table->integer('available_seats');       // عدد الكراسي المتاحة
            $table->string('ac');                     // AC أو لا
            $table->decimal('price', 8, 2);           // سعر التذكرة
            $table->date('trip_date');                // تاريخ الرحلة
            $table->string('location_details');       // عنوان تفصيلي
            $table->string('supervisor_name');        // اسم المشرف
            $table->string('supervisor_phone');       // رقم المشرف
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
