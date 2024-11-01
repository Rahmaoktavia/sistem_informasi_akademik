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
        Schema::table('dosens', function (Blueprint $table) {
            // Tambahkan kolom jabatan setelah kolom alamat
            $table->enum('jabatan', ['Asisten Ahli', 'Lektor', 'Lektor Kepala', 'Guru Besar'])
                  ->default('Asisten Ahli')
                  ->after('alamat'); // Mengatur kolom jabatan setelah kolom alamat
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dosens', function (Blueprint $table) {
            $table->dropColumn('jabatan');
        });
    }
};
