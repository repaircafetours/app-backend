<?php

use App\Models\Visitor;
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
        Schema::create('logs_visitors', function (Blueprint $table) {
           $table->foreignIdFor(Visitor::class)
                ->primary()
                ->constrained()
                ->nullOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs_visitors');
    }
};
