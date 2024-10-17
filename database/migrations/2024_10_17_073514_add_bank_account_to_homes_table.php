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
        Schema::table('homes', function (Blueprint $table) {
            $table->text('bank_account')->nullable()->after('logo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('homes', function (Blueprint $table) {
            $table->dropColumn('bank_account');
        });
    }
};
