<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('room_facilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')
                  ->constrained('rooms')
                  ->cascadeOnDelete();
            $table->string('name')->comment('Nama fasilitas, misal: Proyektor, AC, Komputer');
            $table->unsignedSmallInteger('quantity')->default(1);
            $table->string('condition')
                  ->default('baik')
                  ->comment('baik | rusak | dalam_perbaikan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('room_facilities');
    }
};
