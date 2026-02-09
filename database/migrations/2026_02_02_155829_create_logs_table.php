<?php

use App\Models\Column;
use App\Models\Volunteer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("logs", function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table
                ->foreignIdFor(Column::class)
                ->constrained()
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table
                ->foreignIdFor(Volunteer::class)
                ->nullable()
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
        Schema::dropIfExists("logs");
    }
};
