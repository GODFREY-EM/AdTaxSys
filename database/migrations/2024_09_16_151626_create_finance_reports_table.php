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
        Schema::create('finance_reports', function (Blueprint $table) {
            $table->id();
            $table->string('report_name'); // Field for report name
            $table->decimal('total_income', 15, 2); // Total income for the report
            $table->decimal('total_expense', 15, 2); // Total expense for the report
            $table->decimal('net_profit', 15, 2); // Net profit calculation
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finance_reports');
    }
};
