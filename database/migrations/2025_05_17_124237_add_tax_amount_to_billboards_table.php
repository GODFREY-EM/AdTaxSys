<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::table('billboards', function (Blueprint $table) {
            $table->decimal('tax_amount', 10, 2)->default(0);
        });
    }

    public function down()
    {
        Schema::table('billboards', function (Blueprint $table) {
            $table->dropColumn('tax_amount');
        });
    }
};
