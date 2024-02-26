<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bank_beneficiary_type', function (Blueprint $table) {
            $table->foreignId('bank_id')->nullable()->constrained('banks');
            $table->foreignId('beneficiary_type_id')->nullable()->constrained('beneficiary_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_beneficiary_type');
    }
};
